<?php
/**
 * The class for WP-CLI commands for One Click Demo Import plugin.
 *
 * @package VAST_OCDI
 */

namespace VAST_OCDI;

use WP_CLI;

class WPCLICommands extends \WP_CLI_Command {

	/**
	 * @var object Main VAST_OCDI class object.
	 */
	private $VAST_OCDI;

	public function __construct() {
		parent::__construct();

		$this->VAST_OCDI = VastDemoImporter::get_instance();

		Helpers::set_demo_import_start_time();

		$this->VAST_OCDI->log_file_path = Helpers::get_log_path();
	}

	/**
	 * List all predefined demo imports.
	 */
	public function list_predefined() {
		if ( empty( $this->VAST_OCDI->import_files ) ) {
			WP_CLI::error( esc_html__( 'There are no predefined demo imports for currently active theme!', 'vdi' ) );
		}

		WP_CLI::success( esc_html__( 'Here are the predefined demo imports:', 'vdi' ) );

		foreach ( $this->VAST_OCDI->import_files as $index => $import_file ) {
			WP_CLI::log(
				sprintf(
					'%d -> %s [content: %s, widgets: %s, customizer: %s, redux: %s]',
					$index,
					$import_file['import_file_name'],
					empty( $import_file['import_file_url'] ) && empty( $import_file['local_import_file'] ) ? 'no' : 'yes',
					empty( $import_file['import_widget_file_url'] ) && empty( $import_file['local_import_widget_file'] ) ? 'no' : 'yes',
					empty( $import_file['import_customizer_file_url'] ) && empty( $import_file['local_import_customizer_file'] ) ? 'no' : 'yes',
					empty( $import_file['import_redux'] ) && empty( $import_file['local_import_redux'] ) ? 'no' : 'yes'
				)
			);
		}
	}

	/**
	 * Import content/widgets/customizer settings with the VAST_OCDI plugin.
	 *
	 * ## OPTIONS
	 *
	 * [--content=<file>]
	 * : Content file (XML), that will be used to import the content.
	 *
	 * [--widgets=<file>]
	 * : Widgets file (JSON or WIE), that will be used to import the widgets.
	 *
	 * [--customizer=<file>]
	 * : Customizer file (DAT), that will be used to import the customizer settings.
	 *
	 * [--predefined=<index>]
	 * : The index of the predefined demo imports (use the 'list_predefined' command to check the predefined demo imports)
	 */
	public function import( $args, $assoc_args ) {
		if ( ! $this->any_import_options_set( $assoc_args ) ) {
			WP_CLI::error( esc_html__( 'At least one of the possible options should be set! Check them with --help', 'vdi' ) );
		}

		if ( isset( $assoc_args['predefined'] ) ) {
			$this->import_predefined( $assoc_args['predefined'] );
		}

		if ( ! empty( $assoc_args['content'] ) ) {
			$this->import_content( $assoc_args['content'] );
		}

		if ( ! empty( $assoc_args['widgets'] ) ) {
			$this->import_widgets( $assoc_args['widgets'] );
		}

		if ( ! empty( $assoc_args['customizer'] ) ) {
			$this->import_customizer( $assoc_args['customizer'] );
		}
	}

	/**
	 * Check if any of the possible options are set.
	 *
	 * @param array $options
	 *
	 * @return bool
	 */
	private function any_import_options_set( $options ) {
		$possible_options = array(
			'content',
			'widgets',
			'customizer',
			'predefined',
		);

		foreach ( $possible_options as $option ) {
			if ( array_key_exists( $option, $options ) ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * Import the predefined demo content/widgets/customizer settings with VAST_OCDI.
	 *
	 * @param int $predefined_index Index of a VAST_OCDI predefined demo import.
	 */
	private function import_predefined( $predefined_index ) {
		if ( ! is_numeric( $predefined_index ) ) {
			WP_CLI::error( esc_html__( 'The "predefined" parameter should be a number (an index of the VAST_OCDI predefined demo import)!', 'vdi' ) );
		}

		$predefined_index = absint( $predefined_index );

		if ( ! array_key_exists( $predefined_index, $this->VAST_OCDI->import_files ) ) {
			WP_CLI::warning( esc_html__( 'The supplied predefined index does not exist! Please take a look at the available predefined demo imports:', 'vdi' ) );

			$this->list_predefined();

			return false;
		}

		WP_CLI::log( esc_html__( 'Predefined demo import started! All other parameters will be ignored!', 'vdi' ) );

		$selected_files = $this->VAST_OCDI->import_files[ $predefined_index ];

		if ( ! empty( $selected_files['import_file_name'] ) ) {
			WP_CLI::log( sprintf( esc_html__( 'Selected predefined demo import: %s', 'vdi' ), $selected_files['import_file_name'] ) );
		}

		WP_CLI::log( esc_html__( 'Preparing the demo import files...', 'vdi' ) );

		$import_files = Helpers::download_import_files( $selected_files );

		if ( empty( $import_files ) ) {
			WP_CLI::error( esc_html__( 'Demo import files could not be retrieved!', 'vdi' ) );
		}

		WP_CLI::log( esc_html__( 'Demo import files retrieved successfully!', 'vdi' ) );

		WP_CLI::log( esc_html__( 'Importing...', 'vdi' ) );

		if ( ! empty( $import_files['content'] ) ) {
			$this->do_action( 'vt-VAST_OCDI/before_content_import_execution', $import_files, $this->VAST_OCDI->import_files, $predefined_index );

			$this->import_content( $import_files['content'] );
		}

		if ( ! empty( $import_files['widgets'] ) ) {
			$this->do_action( 'vt-VAST_OCDI/before_widgets_import', $import_files );

			$this->import_widgets( $import_files['widgets'] );
		}

		if ( ! empty( $import_files['customizer'] ) ) {
			$this->import_customizer( $import_files['customizer'] );
		}

		$this->do_action( 'vt-VAST_OCDI/after_all_import_execution', $import_files, $this->VAST_OCDI->import_files, $predefined_index );

		WP_CLI::log( esc_html__( 'Predefined import finished!', 'vdi' ) );
	}

	/**
	 * Import the content with VAST_OCDI.
	 *
	 * @param string $relative_file_path Relative file path to the content import file.
	 */
	private function import_content( $relative_file_path ) {
		$content_import_file_path = realpath( $relative_file_path );

		if ( ! file_exists( $content_import_file_path ) ) {
			WP_CLI::warning( esc_html__( 'Content import file provided does not exist! Skipping this import!', 'vdi' ) );
			return false;
		}

		// Change the single AJAX call duration so the whole content import will be done in one go.
		add_filter(
			'vt-VAST_OCDI/time_for_one_ajax_call', function() {
				return 3600;
			}
		);

		WP_CLI::log( esc_html__( 'Importing content (this might take a while)...', 'vdi' ) );

		Helpers::append_to_file( '', $this->VAST_OCDI->log_file_path, esc_html__( 'Importing content', 'vdi' ) );

		$this->VAST_OCDI->append_to_frontend_error_messages( $this->VAST_OCDI->importer->import_content( $content_import_file_path ) );

		if ( empty( $this->VAST_OCDI->frontend_error_messages ) ) {
			WP_CLI::success( esc_html__( 'Content import finished!', 'vdi' ) );
		} else {
			WP_CLI::warning( esc_html__( 'There were some issues while importing the content!', 'vdi' ) );

			foreach ( $this->VAST_OCDI->frontend_error_messages as $line ) {
				WP_CLI::log( $line );
			}

			$this->VAST_OCDI->frontend_error_messages = array();
		}
	}

	/**
	 * Import the widgets with VAST_OCDI.
	 *
	 * @param string $relative_file_path Relative file path to the widgets import file.
	 */
	private function import_widgets( $relative_file_path ) {
		$widgets_import_file_path = realpath( $relative_file_path );

		if ( ! file_exists( $widgets_import_file_path ) ) {
			WP_CLI::warning( esc_html__( 'Widgets import file provided does not exist! Skipping this import!', 'vdi' ) );
			return false;
		}

		WP_CLI::log( esc_html__( 'Importing widgets...', 'vdi' ) );

		WidgetImporter::import( $widgets_import_file_path );

		if ( empty( $this->VAST_OCDI->frontend_error_messages ) ) {
			WP_CLI::success( esc_html__( 'Widgets imported successfully!', 'vdi' ) );
		} else {
			WP_CLI::warning( esc_html__( 'There were some issues while importing widgets!', 'vdi' ) );

			foreach ( $this->VAST_OCDI->frontend_error_messages as $line ) {
				WP_CLI::log( $line );
			}

			$this->VAST_OCDI->frontend_error_messages = array();
		}
	}

	/**
	 * Import the customizer settings with VAST_OCDI.
	 *
	 * @param string $relative_file_path Relative file path to the customizer import file.
	 */
	private function import_customizer( $relative_file_path ) {
		$customizer_import_file_path = realpath( $relative_file_path );

		if ( ! file_exists( $customizer_import_file_path ) ) {
			WP_CLI::warning( esc_html__( 'Customizer import file provided does not exist! Skipping this import!', 'vdi' ) );
			return false;
		}

		WP_CLI::log( esc_html__( 'Importing customizer settings...', 'vdi' ) );

		CustomizerImporter::import( $customizer_import_file_path );

		if ( empty( $this->VAST_OCDI->frontend_error_messages ) ) {
			WP_CLI::success( esc_html__( 'Customizer settings imported successfully!', 'vdi' ) );
		} else {
			WP_CLI::warning( esc_html__( 'There were some issues while importing customizer settings!', 'vdi' ) );

			foreach ( $this->VAST_OCDI->frontend_error_messages as $line ) {
				WP_CLI::log( $line );
			}

			$this->VAST_OCDI->frontend_error_messages = array();
		}
	}

	/**
	 * Run the registered actions.
	 *
	 * @param string $action            Name of the action.
	 * @param array  $selected_files    Selected import files.
	 * @param array  $all_import_files  All predefined demos.
	 * @param null   $selected_index    Selected predefined index.
	 */
	private function do_action( $action, $import_files = array(), $all_import_files = array(), $selected_index = null ) {
		if ( false !== has_action( $action ) ) {
			WP_CLI::log( sprintf( esc_html__( 'Executing action: %s ...', 'vdi' ), $action ) );

			ob_start();
				do_action( $action, $import_files, $all_import_files, $selected_index );
			$message = ob_get_clean();

			Helpers::append_to_file( $message, $this->VAST_OCDI->log_file_path, $action );
		}
	}
}

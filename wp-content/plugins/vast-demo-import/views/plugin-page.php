<?php
/**
 * The plugin page view - the "settings" page of the plugin.
 *
 * @package VAST_OCDI
 */

namespace VAST_OCDI;

$predefined_themes = $this->import_files;

if ( ! empty( $this->import_files ) && isset( $_GET['import-mode'] ) && 'manual' === $_GET['import-mode'] ) {
	$predefined_themes = array();
}
?>

<div class="VAST_OCDI  wrap  about-wrap">

	<?php ob_start(); ?>
		<h1 class="VAST_OCDI__title  dashicons-before  dashicons-upload"><?php esc_html_e( 'Vast Demo Import', 'vdi' ); ?></h1>
	<?php
	$plugin_title = ob_get_clean();

	// Display the plugin title (can be replaced with custom title text through the filter below).
	echo wp_kses_post( apply_filters( 'vt-VAST_OCDI/plugin_page_title', $plugin_title ) );

	// Display warrning if PHP safe mode is enabled, since we wont be able to change the max_execution_time.
	if ( ini_get( 'safe_mode' ) ) {
		printf(
			esc_html__( '%1$sWarning: your server is using %2$sPHP safe mode%3$s. This means that you might experience server timeout errors.%4$s', 'vdi' ),
			'<div class="notice  notice-warning  is-dismissible"><p>',
			'<strong>',
			'</strong>',
			'</p></div>'
		);
	}

	// Start output buffer for displaying the plugin intro text.
	ob_start();
	?>


	<?php
	$plugin_intro_text = ob_get_clean();

	// Display the plugin intro text (can be replaced with custom text through the filter below).
	echo wp_kses_post( apply_filters( 'vt-VAST_OCDI/plugin_intro_text', $plugin_intro_text ) );
	?>

	<?php if ( empty( $this->import_files ) ) : ?>
		<div class="notice  notice-info  is-dismissible">
			<p><?php esc_html_e( 'There are no predefined import files available in this theme. Please upload the import files manually!', 'vdi' ); ?></p>
		</div>
	<?php endif; ?>

	<?php if ( empty( $predefined_themes ) ) : ?>

		<div class="VAST_OCDI__file-upload-container">
			<h2><?php esc_html_e( 'Manual demo files upload', 'vdi' ); ?></h2>

			<div class="VAST_OCDI__file-upload">
				<h3><label for="content-file-upload"><?php esc_html_e( 'Choose a XML file for content import:', 'vdi' ); ?></label></h3>
				<input id="VAST_OCDI__content-file-upload" type="file" name="content-file-upload">
			</div>

			<div class="VAST_OCDI__file-upload">
				<h3><label for="widget-file-upload"><?php esc_html_e( 'Choose a WIE or JSON file for widget import:', 'vdi' ); ?></label></h3>
				<input id="VAST_OCDI__widget-file-upload" type="file" name="widget-file-upload">
			</div>

			<div class="VAST_OCDI__file-upload">
				<h3><label for="customizer-file-upload"><?php esc_html_e( 'Choose a DAT file for customizer import:', 'vdi' ); ?></label></h3>
				<input id="VAST_OCDI__customizer-file-upload" type="file" name="customizer-file-upload">
			</div>

			<?php if ( class_exists( 'ReduxFramework' ) ) : ?>
			<div class="VAST_OCDI__file-upload">
				<h3><label for="redux-file-upload"><?php esc_html_e( 'Choose a JSON file for Redux import:', 'vdi' ); ?></label></h3>
				<input id="VAST_OCDI__redux-file-upload" type="file" name="redux-file-upload">
				<div>
					<label for="redux-option-name" class="VAST_OCDI__redux-option-name-label"><?php esc_html_e( 'Enter the Redux option name:', 'vdi' ); ?></label>
					<input id="VAST_OCDI__redux-option-name" type="text" name="redux-option-name">
				</div>
			</div>
			<?php endif; ?>
		</div>

		<p class="VAST_OCDI__button-container">
			<button class="VAST_OCDI__button  button  button-hero  button-primary  js-VAST_OCDI-import-data"><?php esc_html_e( 'Vast Import Demo', 'vdi' ); ?></button>
		</p>

	<?php elseif ( 1 === count( $predefined_themes ) ) : ?>

		<div class="VAST_OCDI__demo-import-notice  js-VAST_OCDI-demo-import-notice">
		<?php
		if ( is_array( $predefined_themes ) && ! empty( $predefined_themes[0]['import_notice'] ) ) {
			echo wp_kses_post( $predefined_themes[0]['import_notice'] );
		}
		?>
		</div>

		<p class="VAST_OCDI__button-container">
			<button class="VAST_OCDI__button  button  button-hero  button-primary  js-VAST_OCDI-import-data"><?php esc_html_e( 'Vast Import Demo', 'vdi' ); ?></button>
		</p>

	<?php else : ?>

		<!-- VAST_OCDI grid layout -->
		<div class="VAST_OCDI__gl  js-VAST_OCDI-gl">
		<?php
			// Prepare navigation data.
			$categories = Helpers::get_all_demo_import_categories( $predefined_themes );
		?>
			<?php if ( ! empty( $categories ) ) : ?>
				<div class="row VAST_OCDI__gl-header  js-VAST_OCDI-gl-header">
					<nav class="col-lg-8 col-md-8 col-sm-8 col-xs-12 VAST_OCDI__gl-navigation">
						<ul>
							<li class="active"><a href="#all" class="VAST_OCDI__gl-navigation-link  js-VAST_OCDI-nav-link"><?php esc_html_e( 'All', 'vdi' ); ?></a></li>
							<?php foreach ( $categories as $key => $name ) : ?>
								<li><a href="#<?php echo esc_attr( $key ); ?>" class="VAST_OCDI__gl-navigation-link  js-VAST_OCDI-nav-link"><?php echo esc_html( $name ); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</nav>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 VAST_OCDI__gl-search">
					<div class="VAST_OCDI__gl-cari pull-right">
							<input type="search" class="VAST_OCDI__gl-search-input  js-VAST_OCDI-gl-search" name="VAST_OCDI-gl-search" value="" placeholder="<?php esc_html_e( 'Search demo...', 'vdi' ); ?>"><i class="fa fa-search"></i>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="VAST_OCDI__gl-item-container  wp-clearfix  js-VAST_OCDI-gl-item-container">
				<?php foreach ( $predefined_themes as $index => $import_file ) : ?>
					<?php
						// Prepare import item display data.
						$img_src = isset( $import_file['import_preview_image_url'] ) ? $import_file['import_preview_image_url'] : '';
						// Default to the theme screenshot, if a custom preview image is not defined.
					if ( empty( $img_src ) ) {
						$theme   = wp_get_theme();
						$img_src = $theme->get_screenshot();
					}

					?>
					<div class="VAST_OCDI__gl-item js-VAST_OCDI-gl-item" data-categories="<?php echo esc_attr( Helpers::get_demo_import_item_categories( $import_file ) ); ?>" data-name="<?php echo esc_attr( strtolower( $import_file['import_file_name'] ) ); ?>">
						<div class="VAST_OCDI__gl-item-image-container">
							<?php if ( ! empty( $img_src ) ) : ?>
								<img class="VAST_OCDI__gl-item-image" src="<?php echo esc_url( $img_src ); ?>">
							<?php else : ?>
								<div class="VAST_OCDI__gl-item-image  VAST_OCDI__gl-item-image--no-image"><?php esc_html_e( 'No preview image.', 'vdi' ); ?></div>
							<?php endif; ?>
						</div>
						<div class="row VAST_OCDI__gl-item-footer<?php echo ! empty( $import_file['preview_url'] ) ? '  VAST_OCDI__gl-item-footer--with-preview' : ''; ?>">
							<div class="title_tes">
								<h4 class="VAST_OCDI__gl-item-title" title="<?php echo esc_attr( $import_file['import_file_name'] ); ?>"><?php echo esc_html( $import_file['import_file_name'] ); ?></h4>
							</div>
							<div class="previewimportbutton">
								<?php if ( ! empty( $import_file['preview_url'] ) ) : ?>
									<a class="VAST_OCDI__gl-item-button prev button" href="<?php echo esc_url( $import_file['preview_url'] ); ?>" target="_blank"><?php esc_html_e( 'Preview', 'vdi' ); ?></a>
								<?php endif; ?>
								<button class="VAST_OCDI__gl-item-button  button import button-primary  js-VAST_OCDI-gl-import-data" value="<?php echo esc_attr( $index ); ?>"><?php esc_html_e( 'Import', 'vdi' ); ?></button>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div id="js-VAST_OCDI-modal-content"></div>

	<?php endif; ?>

	<p class="VAST_OCDI__ajax-loader  js-VAST_OCDI-ajax-loader">
		<span class="spinner"></span> <?php esc_html_e( 'Importing, please wait!', 'vdi' ); ?>
	</p>

	<div class="VAST_OCDI__response  js-VAST_OCDI-ajax-response"></div>
</div>

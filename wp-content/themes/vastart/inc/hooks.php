<?php
/**
 * The Hooks
 *
 * @package Vastart
 */

if ( ! function_exists( 'vastart_theme_setup' ) ) :

	/**
	 * Theme Setup.
	 */
	function vastart_theme_setup() {
		// Add default features.
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );

		// Add available post formats.
		add_theme_support(
			'post-formats', array(
				'video',
				'gallery',
				'audio',
				'quote',
				'link',
			)
		);

		// Add logo.
		add_theme_support(
			'custom-logo', array(
				'width'       => 250,
				'height'      => 65,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);

		// Post thumbnail.
		add_theme_support(
			'post-thumbnails', array(
				'post',
				'page',
			)
		);

		// Woocommerce.
		add_theme_support( 'woocommerce' );

		// Banner / Header Image.
		register_default_headers(
			array(
				'wheel' => array(
					'url'           => '%s/assets/images/header.jpg',
					'thumbnail_url' => '%s/assets/images/header-thumbnail.jpg',
					'description'   => esc_html__( 'Default Header', 'vastart' ),
				),
			)
		);

		add_theme_support(
			'custom-header', array(
				'width'       => 1920,
				'height'      => 380,
				'flex-height' => false,
				'flex-width'  => false,
				'uploads'     => true,
				'header-text' => false,
			)
		);

		// Image size.
		add_image_size( 'vastart-banner-size', 1920, 380, array( 'center', 'center' ) );

		// Add Menus.
		register_nav_menus(
			array(
				'main_menu'       => esc_html__( 'Main', 'vastart' ),
			)
		);

		// Translate text from .mo files.
		load_theme_textdomain( 'vastart', VASTART_THEME_DIR . '/languages' );
	}

	add_action( 'after_setup_theme', 'vastart_theme_setup' );

endif;

if ( ! function_exists( 'vastart_gallery_theme_setup' ) ) :

	/**
	 * WooCommerce Lightbox
	 */
	function vastart_gallery_theme_setup() {
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}

	add_action( 'after_setup_theme', 'vastart_gallery_theme_setup' );

endif;

if ( ! function_exists( 'vastart_assets' ) ) :

	/**
	 * Register all css file.
	 */
	function vastart_assets() {
		// Register css file in here.
		// Get theme info.
		$theme_info = wp_get_theme();

		/**
		 * Load Vendor Scripts.
		 */
		// Poppper.
		if ( 'vastart-dropdown-style' === vastart_theme_setting( 'dropdown-layout' ) ) {
			// Selectize.js for dropdowns.
			wp_enqueue_style( 'selectize', get_theme_file_uri( '/assets/vendors/selectize/css/selectize.css' ), array(), null );
			wp_enqueue_script( 'selectize', get_theme_file_uri( '/assets/vendors/selectize/js/selectize.min.js' ), array(), null, true );
			wp_enqueue_script( 'dropdown', get_theme_file_uri( '/assets/vendors/selectize/js/dropdown.js' ), array(), null, true );
			wp_enqueue_script( 'dropdown-hover', get_theme_file_uri( '/assets/vendors/selectize/js/dropdownhover.js' ), array(), null, true );
		}

		if ( 'vastart-sticky' === vastart_theme_setting( 'sticky-layout' ) ) {
			// Headroom.js script.
			wp_enqueue_script( 'headroom', get_theme_file_uri( '/assets/vendors/headroom/headroom.min.js' ), array(), null, true );
			wp_enqueue_script( 'sticky-header', get_theme_file_uri( '/assets/vendors/headroom/sticky-header.js' ), array(), null, true );
		}

		if ( 'vastart-header-parallax' === vastart_theme_setting( 'parallax-layout' ) ) {
			// rellax.js script.
			wp_enqueue_script( 'rellax', get_theme_file_uri( '/assets/vendors/rellax/rellax.min.js' ), array(), null, true );
			wp_enqueue_script( 'rellax-banner', get_theme_file_uri( '/assets/vendors/rellax/banner.js' ), array(), null, true );
		}

		if ( 'vastart-masonry-layout' === vastart_theme_setting( 'style-layout' ) ) {
			wp_enqueue_script( 'masonry', '', array( 'imagesloaded' ), null, true );
			wp_enqueue_script( 'modernizr', get_theme_file_uri( '/assets/vendors/modernizr/modernizr-custom.min.js' ), array(), null, true );
			wp_enqueue_script( 'classie', get_theme_file_uri( '/assets/vendors/classie/classie.js' ), array(), null, true );
			wp_enqueue_script( 'anim-on-scroll', get_theme_file_uri( '/assets/vendors/anim-on-scroll/anim-on-scroll.js' ), array(), null, true );
		}

		/**
		 * Theme Scripts.
		 */
		// Custom Bootstrap.
		wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), null );
		wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery' ), null, true );

		// Load all javascripts.
		wp_enqueue_style( 'vastart-theme-style', get_theme_file_uri( '/assets/css/theme.min.css' ), array(), $theme_info->get( 'Version' ) );
		wp_enqueue_script( 'vastart-theme-js', get_theme_file_uri( '/assets/js/theme.min.js' ), array( 'jquery' ), $theme_info->get( 'Version' ), true );

		/**
		 * Load Main Style.
		 */
		wp_enqueue_style( 'vastart-style', get_theme_file_uri( 'style.css' ), array(), null );

		if ( is_rtl() ) {
			wp_style_add_data( 'vastart-theme-style', 'rtl', 'replace' );
		}

		// Comments script.
		if ( is_singular() ) {
			wp_enqueue_script( 'comment-reply' );
		}

		if ( class_exists( 'WooCommerce' ) && is_shop() ) {
			wp_enqueue_script( 'masonry', '', array( 'imagesloaded' ), null, true );
			wp_enqueue_script( 'modernizr', get_theme_file_uri( '/assets/vendors/modernizr/modernizr-custom.min.js' ), array(), null, true );
			wp_enqueue_script( 'classie', get_theme_file_uri( '/assets/vendors/classie/classie.js' ), array(), null, true );
			wp_enqueue_script( 'anim-on-scroll-shop', get_theme_file_uri( '/assets/vendors/anim-on-scroll/anim-on-scroll-shop.js' ), array(), null, true );
		}

		if ( class_exists( 'WooCommerce' ) && is_product() ) {
			wp_dequeue_script( 'dropdown' );
		}
	}

	add_action( 'wp_enqueue_scripts', 'vastart_assets' );

endif;

if ( ! function_exists( 'vastart_fonts_callback' ) ) :
	/**
	 * Font format callback.
	 *
	 * @param string $font_choosen   font name.
	 */
	function vastart_fonts_callback( $font_choosen ) {

		$font_choosen = strtolower( trim( $font_choosen ) );
		$font_choosen = preg_replace( '/[^a-z0-9-]/', '-', $font_choosen );
		$font_choosen = preg_replace( '/-+/', '-', $font_choosen );

		return $font_choosen;

	}
endif;

if ( ! function_exists( 'vastart_load_fonts' ) ) :
	/**
	 * Load Font Google.
	 */
	function vastart_load_fonts() {

		// Variabel ini digunakan untuk menampung variabel jenis font family yang akan diload, dalam bentuk array.
		$font_choosen = array( 'Lato', 'Montserrat', 'Merriweather' );

		if ( ! is_array( $font_choosen ) ) {
			return;
		}

		$font_slug = array_map( 'vastart_fonts_callback', $font_choosen );

		vastart_enqueue_gooogle_font( $font_slug );

	}

	add_action( 'wp_enqueue_scripts', 'vastart_load_fonts' );

endif;

if ( ! function_exists( 'vastart_body_classes' ) ) :

	/**
	 * Vastart Body Class
	 *
	 * @param array $classes HTML Class.
	 * @return string
	 */
	function vastart_body_classes( $classes ) {
		if ( class_exists( 'WooCommerce' ) && is_shop() ) {
			$classes[] = 'vastart-masonry-layout' ;
		} else {
			$classes[] = esc_attr( vastart_theme_setting( 'style-layout' ) );
		}
		$classes[] = esc_attr( vastart_theme_setting( 'blog-layout' ) );
		$classes[] = esc_attr( vastart_theme_setting( 'header_image_show_frontpage' ) );

		$classes[] = 'sidebar-none' === vastart_theme_setting( 'sidebar-layout' ) || is_active_sidebar( 'sidebar' ) === false ? 'no-sidebar' : 'has-sidebar';

		$classes[] = esc_attr( vastart_theme_setting( 'sidebar-layout' ) );
		$classes[] = esc_attr( vastart_theme_setting( 'sticky-layout' ) );

		return $classes;
	}

	add_filter( 'body_class', 'vastart_body_classes' );

endif;

if ( ! function_exists( 'vastart_header_template' ) ) :

	/**
	 * Vastart Header Template
	 */
	function vastart_header_template() {
		get_template_part( 'template-parts/header/layout' );

		if ( has_header_image() && ! is_404() ) {
			get_template_part( 'template-parts/header/banner' );
		}
	}

	add_action( 'vastart_header', 'vastart_header_template' );

endif;

if ( ! function_exists( 'vastart_related_post_template' ) ) :

	/**
	 * Vastart Header Template
	 */
	function vastart_related_post_template() {
		get_template_part( 'template-parts/header/layout' );

		if ( has_header_image() && ! is_404() ) {
			get_template_part( 'template-parts/header/banner' );
		}
	}

	add_action( 'vastart_related_post', 'vastart_related_post_template' );

endif;

if ( ! function_exists( 'vastart_widgets' ) ) :

	/**
	 * Register sidebar and footer widgets.
	 */
	function vastart_widgets() {
		// Sidebar.
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'vastart' ),
				'id'            => 'sidebar',
				'description'   => esc_html__( 'This sidebar area will be shown on blog page.', 'vastart' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		// 1st Footer.
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Column 1', 'vastart' ),
				'id'            => 'footer-1',
				'description'   => esc_html__( 'Widgets in this area will be shown in leftmost column in footer in each page.', 'vastart' ),
				'before_widget' => '<section id="%1$s" class="widget uf-dark-scheme %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		// 2nd Footer.
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Column 2', 'vastart' ),
				'id'            => 'footer-2',
				'description'   => esc_html__( 'Widgets in this area will be shown in 2nd column in footer in each page.', 'vastart' ),
				'before_widget' => '<section id="%1$s" class="widget uf-dark-scheme %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		// 3rd Footer.
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Column 3', 'vastart' ),
				'id'            => 'footer-3',
				'description'   => esc_html__( 'Widgets in this area will be shown in 3rd column in footer in each page..', 'vastart' ),
				'before_widget' => '<section id="%1$s" class="widget uf-dark-scheme %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		// 4th Footer.
		register_sidebar(
			array(
				'name'          => esc_html__( 'Footer Column 4', 'vastart' ),
				'id'            => 'footer-4',
				'description'   => esc_html__( 'Widgets in this area will be shown in rightmost column in footer in each page.', 'vastart' ),
				'before_widget' => '<section id="%1$s" class="widget uf-dark-scheme %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}

	add_action( 'widgets_init', 'vastart_widgets' );

endif;

if ( ! function_exists( 'vastart_add_classes_on_li' ) ) :

	/**
	 * Add bootstrap class on menu li.
	 *
	 * @param array  $classes The CSS classes that are applied to the menu item's <li>.
	 * @param object $item    Menu item data object.
	 * @param array  $args    An array of arguments. @see wp_nav_menu().
	 * @param int    $depth   Depth of menu item.
	 */
	function vastart_add_classes_on_li( $classes, $item, $args, $depth ) {
		// for header navigation only, not widget.
		if ( ! empty( $args->menu_id ) ) {
			if ( 'header_navigation' === $args->menu_id ) {
				if ( in_array( 'menu-item-has-children', $classes, false ) ) {
					$classes[] = 'dropdown';

					if ( $depth > 0 ) {
						if ( is_rtl() ) {
							$classes[] = 'icon-chevron-left';
						} else {
							$classes[] = 'icon-chevron-right';
						}
					} else {
						$classes[] = 'icon-chevron-down';
					}
				}

				if ( 0 === $depth ) {
					$classes[] = 'd-flex align-items-center';
				}
			}
		}

		$classes[] = 'nav-item';
		return $classes;
	}

	add_filter( 'nav_menu_css_class','vastart_add_classes_on_li', 1, 4 );

endif;

if ( ! function_exists( 'vastart_add_classes_on_link' ) ) :

	/**
	 * Add bootstrap class on menu anchor tag.
	 *
	 * @param array  $atts    The CSS classes that applied to the menu link's <a>.
	 * @param object $item    Menu item data object.
	 * @param array  $args    An array of arguments. @see wp_nav_menu().
	 */
	function vastart_add_classes_on_link( $atts, $item, $args ) {
		// for header navigation only, not widget.
		if ( ! empty( $args->menu_id ) ) {
			if ( 'header_navigation' === $args->menu_id ) {
				if ( in_array( 'menu-item-has-children', $item->classes, false ) ) {
					$atts['class'] = 'nav-link dropdown-item dropdown-toggle';
				} else {
					$atts['class'] = 'nav-link';
				}
			} else {
				$atts['class'] = 'nav-link';
			}
		}

		return $atts;
	}

	add_filter( 'nav_menu_link_attributes','vastart_add_classes_on_link', 10, 3 );

endif;

if ( ! function_exists( 'vastart_add_classes_on_submenu' ) ) :

	/**
	 * Add bootstrap class on submenu anchor tag.
	 *
	 * @param array $classes    The CSS classes that are applied to the menu <ul> element.
	 * @param array $args    An array of arguments. @see wp_nav_menu().
	 * @param int   $depth    Depth of menu item. Used for padding.
	 */
	function vastart_add_classes_on_submenu( $classes, $args, $depth ) {
		if ( 'header_navigation' === $args->menu_id ) {
			if ( $depth > 0 ) {
				$classes[] = 'uf-submenu-right dropdown-menu arrow_box';
			} else {
				$classes[] = 'dropdown-menu uf-submenu';
			}
		}

		return $classes;
	}

	add_filter( 'nav_menu_submenu_css_class','vastart_add_classes_on_submenu', 10, 3 );
endif;

if ( ! function_exists( 'vastart_add_submenu_arrow_on_mobile_menu' ) ) :

	/**
	 * Add submenu arrow on mobile menu.
	 *
	 * @param string   $item_output The menu item's starting HTML output.
	 * @param WP_Post  $item        Menu item data object.
	 * @param int      $depth       Depth of menu item. Used for padding.
	 * @param stdClass $args        An object of wp_nav_menu() arguments.
	 */
	function vastart_add_submenu_arrow_on_mobile_menu( $item_output, $item, $depth, $args ) {
		if ( ! empty( $args->menu_id ) ) {
			if ( 'mobile_navigation' === $args->menu_id ) {
				if ( in_array( 'menu-item-has-children', $item->classes, false ) ) {
					if ( is_rtl() ) {
						$item_output .= '<label class="uf-mobile-nav-expand-submenu"><i class="icon-chevron-left"></i></label>';
					} else {
						$item_output .= '<label class="uf-mobile-nav-expand-submenu"><i class="icon-chevron-right"></i></label>';
					}
				}
			}
		}

		return $item_output;
	}

	add_filter( 'walker_nav_menu_start_el','vastart_add_submenu_arrow_on_mobile_menu', 10, 4 );
endif;

if ( ! function_exists( 'vastart_sanitize_pagination' ) ) :

	/**
	 * Remove screen reader text on pagination.
	 *
	 * @param string $content The content of pagination.
	 */
	function vastart_sanitize_pagination( $content ) {

		$content = preg_replace( '#<h2.*?>(.*?)<\/h2>#si', '', $content );
		return $content;
	}

	add_action( 'navigation_markup_template', 'vastart_sanitize_pagination' );

endif;

if ( ! function_exists( 'vastart_comment_fields' ) ) :

	/**
	 * Add placeholder to comments form.
	 *
	 * @param array $fields List of comment fields.
	 */
	function vastart_comment_fields( $fields ) {
		$fields['author'] = str_replace(
			'<input',
			'<input placeholder="'
				. esc_attr_x(
					'Name',
					'comment author placeholder',
					'vastart'
				)
				. '"',
			$fields['author']
		);

		$fields['email'] = str_replace(
			'<input id="email" name="email" type="text"',
			'<input placeholder="'
				. esc_attr_x(
					'Email',
					'comment email placeholder',
					'vastart'
				)
				. '" id="email" name="email" type="email"',
			$fields['email']
		);

		$fields['url'] = str_replace(
			'<input id="url" name="url" type="text"',
			'<input placeholder="'
				. esc_attr_x(
					'Website',
					'comment url placeholder',
					'vastart'
				)
				. '" id="url" name="url" type="url"',
			$fields['url']
		);

		return $fields;
	}

	add_filter( 'vastart_comment_form_default_fields', 'vastart_comment_fields' );
endif;

if ( ! function_exists( 'vastart_form_field' ) ) :

	/**
	 * Add placeholder to textarea
	 *
	 * @param string $field The comment field.
	 */
	function vastart_form_field( $field ) {
		$field = '<p class="comment-form-comment">' .
			'<label for="comment">' . esc_html__( 'Comment', 'vastart' ) . '</label> ' .
			'<textarea required id="comment" name="comment" placeholder="' . esc_attr__( 'Your comment here...', 'vastart' ) . '" cols="45" rows="8"></textarea>' .
		'</p>';

		return $field;
	}

	add_filter( 'comment_form_field_comment', 'vastart_form_field' );
endif;

if ( ! function_exists( 'vastart_add_classes_on_category' ) ) :

	/**
	 * Function to add classes on category list
	 *
	 * @param array  $thelist The comment field.
	 * @param string $separator The separator.
	 */
	function vastart_add_classes_on_category( $thelist, $separator ) {
		$count = 0;
		$class_to_add = 'pills pills-primary';

		// Remove separator.
		$thelist = str_replace( '>' . $separator . '<',  '><', $thelist, $count );

		// Add custom class.
		$result = str_replace( '<a href="',  '<a class="' . esc_attr( $class_to_add ) . '" href="', $thelist, $count );

		if ( 0 === $count ) {
			$result = '';
		}
		return $result;
	}

	if ( ! is_admin() ) {
		add_filter( 'the_category', 'vastart_add_classes_on_category', 10, 2 );
	}
endif;

if ( ! function_exists( 'vastart_breadcrumb_classes' ) ) :
	/**
	 * Add breadcrumbs class filters.
	 *
	 * @param array $classes Class List.
	 * @return array
	 */
	function vastart_breadcrumb_classes( $classes ) {
		$classes[] = 'uf-breadcrumbs';

		return $classes;
	}

	add_filter( 'vastart_breadcrumb_class', 'vastart_breadcrumb_classes' );
endif;

if ( ! function_exists( 'vastart_gallery_post' ) ) :

	/**
	 * Custom gallery output.
	 *
	 * @param string $output of gallery galery post.
	 * @param array  $attr atributes of gallery post output.
	 * @return array
	 */
	function vastart_gallery_post( $output, $attr ) {
		global $post;

		if ( isset( $attr['orderby'] ) ) {
			$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
			if ( ! $attr['orderby'] ) {
				unset( $attr['orderby'] );
			}
		}

		$atts = shortcode_atts(
			array(
				'order' => 'ASC',
				'orderby' => 'menu_order ID',
				'id' => $post->ID,
				'class' => '',
				'itemtag' => 'dl',
				'icontag' => 'dt',
				'captiontag' => 'dd',
				'columns' => 3,
				'size' => 'thumbnail',
				'include' => '',
				'exclude' => '',
			), $attr
		);

		$id = intval( $atts['id'] );

		if ( ! empty( $atts['include'] ) ) {
			$include = preg_replace( '/[^0-9,]+/', '', $atts['include'] );
			$_attachments = get_posts(
				array(
					'include' => $include,
					'post_status' => 'inherit',
					'post_type' => 'attachment',
					'post_mime_type' => 'image',
					'order' => $atts['order'],
					'orderby' => $atts['orderby'],
				)
			);
			$attachments = array();
			foreach ( $_attachments as $key => $val ) {
				$attachments[ $val->ID ] = $_attachments[ $key ];
			}
		}

		if ( empty( $attachments ) ) {
			return '';
		}

		if ( 'carousel' === $atts['class'] ) {

			// Here's your actual output, you may customize it to your needs.
			$carousel_id = 'carousel-' . uniqid();

			$output = '<div id=' . $carousel_id . ' class="uf-carousel carousel slide" data-ride="carousel">' .
			'<div class="carousel-inner">';

			$i = 0;

			foreach ( $attachments as $id => $attachment ) {
				$img = wp_get_attachment_image_src( $id, 'large' );

				if ( 0 === $i ) {
					$output .= '<div class="carousel-item active">';
				} else {
					$output .= '<div class="carousel-item">';
				}

				$output .= '<img src="' . esc_attr( $img[0] ) . '" width="' . esc_attr( $img[1] ) . '" height="' . esc_attr( $img[2] ) . '" class="d-block w-100" />';
				$output .= '</div>';
				$i++;
			}

			$output .= '<a class="carousel-control-prev" href="#' . $carousel_id . '" role="button" data-slide="prev">' .
				'<span class="icon-chevron-left" aria-hidden="false"></span>' .
				'<span class="sr-only">' . esc_html__( 'Previous', 'vastart' ) . '</span>' .
			'</a>' .
			'<a class="carousel-control-next" href="#' . $carousel_id . '" role="button" data-slide="next">' .
				'<span class="icon-chevron-right" aria-hidden="false"></span>' .
				'<span class="sr-only">' . esc_html__( 'Next', 'vastart' ) . '</span>' .
			'</a>' .
			'</div>' .
			'</div>';
		}

		return $output;
	}

	add_filter( 'post_gallery', 'vastart_gallery_post', 10, 2 );
endif;

if ( ! function_exists( 'vastart_wp_list_categories_args' ) ) :

	/**
	 * Alter wp list categories arguments.
	 * Adds a span around the counter for easier styling.
	 *
	 * @param string $links Links.
	 * @since 1.0.0
	 *
	 * @return string
	 */
	function vastart_wp_list_categories_args( $links ) {
		$categories = preg_replace( '/<\/a> \(([0-9]+)\)/', ' (\\1)</a>', $links );
		return $categories;
	}

	add_filter( 'wp_list_categories','vastart_wp_list_categories_args' );
endif;

if ( ! function_exists( 'vastart_breadcrumbs_template' ) ) :

	/**
	 * Vastart breadcrumbs Template
	 */
	function vastart_breadcrumbs_template() {
		if ( is_404() || is_front_page() ) {
			return;
		}

		get_template_part( 'template-parts/breadcrumbs/layout' );
	}

	add_action( 'vastart_breadcrumbs', 'vastart_breadcrumbs_template' );

endif;

if ( ! function_exists( 'vastart_banner_style' ) ) :

	/**
	 * Vastart breadcrumbs Template
	 */
	function vastart_banner_style() {
		$css = array();

		if ( has_header_image() ) {
			$css[] = array(
				'element' => '#header-image-bg',
				'rules'   => array(
					'background-image' => 'url(' . get_header_image() . ')',
				),
			);
		}

		if ( has_custom_logo() ) {
			$css[] = array(
				'element' => '.custom-logo-link img',
				'rules'   => array(
					'max-height' => esc_attr( vastart_theme_setting( 'logo-height' ) . vastart_theme_setting( 'logo-height', true, 'unit' ) ),
				),
			);
		}

		// If it's not the same with default value.
		$logo_sticky = vastart_theme_setting( 'logo-sticky' );
		if ( vastart_theme_setting( 'logo-sticky', true ) !== $logo_sticky ) {
			$css[] = array(
				'element' => '.custom-logo-sticky-link img',
				'rules'   => array(
					'max-height' => esc_attr( vastart_theme_setting( 'logo-sticky-height' ) . vastart_theme_setting( 'logo-sticky-height', true, 'unit' ) ),
				),
			);
		}

		// If it's not the same with default value.
		$navbar_bottom_border = vastart_theme_setting( 'navbar-bottom-border' );
		if ( vastart_theme_setting( 'navbar-bottom-border', true ) !== $navbar_bottom_border ) {
			$css[] = array(
				'element' => '.home #header.sticky--top, .home.vastart-scroll #header',
				'rules'   => array(
					'border-bottom' => esc_attr( $navbar_bottom_border ),
				),
			);

			$css[] = array(
				'element' => '.home #header.sticky--top .navbar-toggler',
				'rules'   => array(
					'border-right' => esc_attr( $navbar_bottom_border ),
				),
			);
		}

		// If it's not the same with default  value.
		$navbar_font_color = vastart_theme_setting( 'navbar-font-color' );
		if ( vastart_theme_setting( 'navbar-font-color', true ) !== $navbar_font_color ) {
			$css[] = array(
				'element' => '.home .navbar-light .navbar-nav .nav-link, .home #navbar .icon-chevron-down::before, .home #header.sticky.sticky--top #quadmenu.detheme_default_menu .quadmenu-navbar-nav > li > a > .quadmenu-item-content, .home #header.sticky.sticky--top #quadmenu.quadmenu-default_theme .quadmenu-navbar-nav > li:not(.quadmenu-item-type-button) > a > .quadmenu-item-content, .home .navbar-light .navbar-nav .menu-item-has-children::before, .home .navbar-light .navbar-nav .page_item_has_children::before',
				'rules'   => array(
					'color' => esc_attr( $navbar_font_color ),
				),
			);
		}

		// If it's not the same with default value.
		$navbar_background_color = vastart_theme_setting( 'navbar-background-color' );
		if ( vastart_theme_setting( 'navbar-background-color', true ) !== $navbar_background_color ) {
			$css[] = array(
				'element' => '.vastart-scroll #header, #header.sticky.sticky--top',
				'rules'   => array(
					'background-color' => esc_attr( $navbar_background_color ),
				),
			);
		}

		// If it's not the same with default value.
		$navbar_font_sticky_color = vastart_theme_setting( 'navbar-font-sticky-color' );
		if ( vastart_theme_setting( 'navbar-font-sticky-color', true ) !== $navbar_font_sticky_color ) {
			$css[] = array(
				'element' => '#header.sticky.sticky--top .navbar-light .navbar-nav .sub-menu .nav-link, #header.sticky.sticky--not-top .navbar-light .navbar-nav .nav-link, #header.sticky.sticky--not-top .icon-chevron-down::before, #header #quadmenu.detheme_default_menu .quadmenu-navbar-nav > li > a > .quadmenu-item-content, #header #quadmenu.quadmenu-default_theme .quadmenu-navbar-nav > li:not(.quadmenu-item-type-button) > a > .quadmenu-item-content, .uf-mobile-nav-modal #quadmenu.detheme_default_menu .quadmenu-navbar-nav > li > a > .quadmenu-item-content, .uf-mobile-nav-modal #quadmenu.quadmenu-default_theme .quadmenu-navbar-nav > li:not(.quadmenu-item-type-button) > a > .quadmenu-item-content,.home #header.sticky.sticky--not-top #quadmenu.detheme_default_menu .quadmenu-navbar-nav > li > a > .quadmenu-item-content',
				'rules'   => array(
					'color' => esc_attr( $navbar_font_sticky_color ),
				),
			);
		}

		// If it's not the same with default value.
		$navbar_background_sticky_color = vastart_theme_setting( 'navbar-background-sticky-color' );
		if ( vastart_theme_setting( 'navbar-background-sticky-color', true ) !== $navbar_background_sticky_color ) {
			$css[] = array(
				'element' => '#header.sticky.sticky--not-top',
				'rules'   => array(
					'background-color' => esc_attr( $navbar_background_sticky_color ),
				),
			);
		}

		// Top Bar font color ( homepage only ).
		// If it's not the same with default  value.
		$topbar_home_font_color = vastart_theme_setting( 'topbar-home-font-color' );
		if ( vastart_theme_setting( 'topbar-home-font-color', true ) !== $topbar_home_font_color ) {
			$css[] = array(
				'element' => '.home .topbar-desktop',
				'rules'   => array(
					'color' => esc_attr( $topbar_home_font_color ),
				),
			);

			$css[] = array(
				'element' => '.home .topbar-desktop a',
				'rules'   => array(
					'color' => esc_attr( $topbar_home_font_color ),
				),
			);
		}

		// Top Bar background color ( homepage only ).
		// If it's not the same with default value.
		$topbar_home_background_color = vastart_theme_setting( 'topbar-home-background-color' );
		if ( vastart_theme_setting( 'topbar-home-background-color', true ) !== $topbar_home_background_color ) {
			$css[] = array(
				'element' => '.home .topbar-desktop',
				'rules'   => array(
					'background-color' => esc_attr( $topbar_home_background_color ),
				),
			);
		}

		// Top Bar background color ( homepage only ).
		// If it's not the same with default value.
		$topbar_home_border_color = vastart_theme_setting( 'topbar-home-border-color' );
		if ( vastart_theme_setting( 'topbar-home-border-color', true ) !== $topbar_home_border_color ) {
			$css[] = array(
				'element' => '.home .topbar-desktop .topbar-content',
				'rules'   => array(
					'border-bottom-color' => esc_attr( $topbar_home_border_color ),
				),
			);
		}

		// If it's not the same with default value.
		$primary_color = vastart_theme_setting( 'primary-color' );
		if ( vastart_theme_setting( 'primary-color', true ) !== $primary_color ) {
			$css[] = array(
				'element' => 'blockquote,.pagination .current',
				'rules'   => array(
					'border-color' => esc_attr( $primary_color ),
				),
			);

			$css[] = array(
				'element' => '.uf-breadcrumbs>span>span, .widget .rsswidget:hover, .widget .recentcomments .comment-author-link .url:hover, .widget #wp-calendar tbody td a:hover, .widget.uf-dark-scheme .rsswidget:hover, .widget.uf-dark-scheme #wp-calendar tbody tr td a:hover, #navbar ul li:hover .sub-menu li:hover, main#content #archive-post a.more-link:hover, main#content #blog-entries a.more-link:hover, main#content #blog-entries .sticky-icon span.icon-bookmark2,main#content #archive-post .sticky-icon span.icon-bookmark2, .uf-single-post .wp-caption-text a:hover, #footer .widget a:hover, .error404 #not-found h1, .mejs-container * .mejs-controls .mejs-volume-button a:hover, .navbar-light .navbar-nav .menu-item:hover::before, .navbar-light .navbar-nav .menu-item:hover > .nav-link, .navbar-light .navbar-nav .page_item:hover::before, .navbar-light .navbar-nav .page_item:hover > .nav-link, .list-item .kc-entry_meta > span i, .kc_tabs_nav li.ui-tabs-active a, .kc_tabs_nav li.ui-tabs-active a:hover, .kc_tabs_nav li:hover a, .post-grid > div > .content > .post-title-alt > a:hover, .post-grid > div > .content > .entry-meta > span > a, .list-post-type > .list-item > .post-content > h3 > a:hover, .list-item .kc-entry_meta > span a:hover, .uf-single-post__content a',
				'rules'   => array(
					'color' => esc_attr( $primary_color . ' !important' ),
				),
			);

			$css[] = array(
				'element' => 'a:hover, .uf-card-body .entry__content a',
				'rules'   => array(
					'color' => esc_attr( $primary_color ),
				),
			);

			$css[] = array(
				'element' => 'main#content #archive-post a.more-link:hover::after, main#content #blog-entries a.more-link:hover::after',
				'rules'   => array(
					'background-color' => esc_attr( $primary_color . ' !important' ),
				),
			);

			$css[] = array(
				'element' => '.uf-checkbox .uf-checkbox-label input:checked ~ .checkmark, .widget #wp-calendar tr #today, .widget.uf-dark-scheme #wp-calendar tbody tr td#today, .selectize-control.single .selectize-dropdown .option.active, .uf-dark-scheme .selectize-control.single .selectize-dropdown .option.active, a.uf-buttons,.uf-buttons,input[type=\'submit\'],input[type=\'reset\'],input[type=\'button\'],#comments .comment-form .form-submit input, .kc-ui-progress, .kc_button, .pills.pills-primary,.widget.widget_tag_cloud .pills-primary.tag-cloud-link, .pagination .current, .mejs-container * .mejs-controls .mejs-time-rail .mejs-time-current, .mejs-container * .mejs-controls .mejs-volume-button .mejs-volume-current, .mejs-container * .mejs-controls .mejs-horizontal-volume-current, .content-button a, .kc-blog-posts .kc-post-2-button, a.kc-read-more, .kc-team .content-socials a',
				'rules'   => array(
					'background-color' => esc_attr( $primary_color . ' !important' ),
				),
			);

			$css[] = array(
				'element' => '.uf-radio input:checked ~ .uf-radio-label::before',
				'rules'   => array(
					'box-shadow' => esc_attr( 'inset 0 0 0 3px ' . $primary_color ),
				),
			);

			$css[] = array(
				'element' => '.uf-single-post__content a:hover',
				'rules'   => array(
					'filter' => 'brightness(90%)',
				),
			);

			$css[] = array(
				'element' => '.pills.pills-primary:hover , .uf-buttons:hover',
				'rules'   => array(
					'box-shadow' => 'inset 0 0 100px 100px rgba(0, 0, 0, 0.1)',
				),
			);

			$css[] = array(
				'element' => '.kc_button:hover',
				'rules' => array(
					'color' => '#ffffff',
				),
			);

			$css[] = array(
				'element' => '.kc_button:hover',
				'rules' => array(
					'box-shadow' => 'inset 0 0 100px 100px rgba(0, 0, 0, 0.1)',
				),
			);

			$css[] = array(
				'element' => '.kc_tabs_nav li.ui-tabs-active a, .kc_tabs_nav li.ui-tabs-active a:hover, .kc_tabs_nav li:hover a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a, .single-product div.product .related.products h2:hover, .woocommerce ul.products li.product h2.woocommerce-loop-product__title:hover',
				'rules' => array(
					'color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '.kc_button, .kc-ui-progress, .content-button a, .content-button a, .owl-theme .owl-controls .owl-page span, .woocommerce-cart .button, .woocommerce-checkout .button, .woocommerce-account .button, .woocommerce .comment-respond input.submit, #sidebar .woocommerce a.button.checkout, #footer .woocommerce a.button.checkout',
				'rules' => array(
					'background-color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '.woocommerce .single_add_to_cart_button, .single-product div.product .product_meta .posted_in a',
				'rules' => array(
					'background' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '.widget .widget-title:before',
				'rules' => array(
					'background' => esc_attr( $primary_color ),
				),
			);

			$css[] = array(
				'element' => '.navbar-light .navbar-nav .current-menu-item, .current-menu-item > .nav-link, .menu-item:hover::before, .menu-item:hover > .nav-link, .navbar-light .navbar-nav .current_page_item, .current_page_item > .nav-link, .page_item:hover::before, .page_item:hover > .nav-link',
				'rules' => array(
					'color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '.navbar-light .navbar-nav .current-menu-ancestor, .current-menu-ancestor > .nav-link, .navbar-light .navbar-nav .current_page_ancestor, .current_page_ancestor > .nav-link, .navbar-light .navbar-nav .current_page_parent, .navbar-light .navbar-nav .current_page_parent > .nav-link',
				'rules' => array(
					'color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '.navbar-light .navbar-nav .current-menu-ancestor::after, .current-menu-parent::after, .current-menu-item::after, .navbar-light .navbar-nav .current_page_ancestor::after, .current_page_parent::after, .current_page_item::after',
				'rules' => array(
					'background' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '#header.sticky--not-top.sticky--unpinned .navbar-light .navbar-nav .menu-item:hover::before, .menu-item:hover > .nav-link, #header.sticky--not-top.sticky--unpinned .navbar-light .navbar-nav .page_item:hover::before, .page_item:hover > .nav-link',
				'rules' => array(
					'color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '.navbar-light .navbar-nav .dropdown-menu .menu-item:hover > .nav-link, .navbar-light .navbar-nav .dropdown-menu .page_item:hover > .nav-link',
				'rules' => array(
					'color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '#header.sticky--not-top.sticky--unpinned .navbar-light .navbar-nav .dropdown-menu .menu-item:active > .nav-link, .menu-item:hover > .nav-link, #header.sticky--not-top.sticky--unpinned .navbar-light .navbar-nav .dropdown-menu .page_item:active > .nav-link, .page_item:hover > .nav-link, #header.sticky.sticky--not-top .navbar-light .navbar-nav .current_page_item .nav-link',
				'rules' => array(
					'color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '#header.sticky.sticky--not-top .navbar-light .navbar-nav .current-menu-ancestor.menu-item::before, .current-menu-item.menu-item::before, #header.sticky.sticky--not-top .navbar-light .navbar-nav .current_page_ancestor.page_item::before, .current_page_item.page_item::before',
				'rules' => array(
					'color' => esc_attr( $primary_color . '!important' ),
				),
			);

			$css[] = array(
				'element' => '.home .topbar-desktop a:hover',
				'rules'   => array(
					'color' => esc_attr( $primary_color ),
				),
			);

			$css[] = array(
				'element' => '.post-navigation .nav-links .nav-next:hover i, .post-navigation .nav-links .nav-previous:hover i',
				'rules'   => array(
					'border-color' => esc_attr( $primary_color ),
				),
			);

			$css[] = array(
				'element' => '.post-navigation .nav-links .nav-next:hover i, .post-navigation .nav-links .nav-previous:hover i',
				'rules'   => array(
					'background-color' => esc_attr( $primary_color ),
				),
			);

			$css[] = array(
				'element' => 'article.entry.sticky::before',
				'rules'   => array(
					'color' => esc_attr( $primary_color . ' !important' ),
				),
			);

			$css = apply_filters( 'vastart_primary_color_filter', $css, $primary_color );
		}

		$css_output = array();

		foreach ( $css as $_css ) {
			$css_output[] = $_css['element'] . '{';

			foreach ( $_css['rules'] as $rule => $props ) {
				$css_output[] = $rule . ':' . $props;
			}

			$css_output[] = '}';
		}

		wp_add_inline_style( 'vastart-theme-style', implode( '', $css_output ) );
	}

	add_action( 'wp_enqueue_scripts', 'vastart_banner_style' );

endif;

if ( ! function_exists( 'vastart_custom_logo' ) ) :

	/**
	 * Overrides itemprop value from custom_logo.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	function vastart_custom_logo() {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$html = sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
			esc_url( home_url( '/' ) ),
			wp_get_attachment_image(
				$custom_logo_id, 'full', false, array(
					'class'    => esc_attr( 'custom-logo' ),
					'alt'      => esc_attr__( 'Vastart', 'vastart' ),
				)
			)
		);
		return $html;
	}

	add_filter( 'get_custom_logo', 'vastart_custom_logo' );

endif;

if ( ! function_exists( 'vastart_next_post_link' ) ) :

	/**
	 * Add tag span before next post link to fix justify-content: space between issue in flexbox.
	 *
	 * @since 1.0.0
	 * @param string $output HTML Navigation.
	 * @return string
	 */
	function vastart_next_post_link( $output ) {
		return '<span></span>' . $output;
	}

	add_filter( 'next_post_link','vastart_next_post_link' );
endif;

if ( ! function_exists( 'vastart_navigation_template' ) ) :

	/**
	 * Overrides role navigation from from navigation template.
	 *
	 * @since 1.0.0
	 * @param string $template HTML Navigation.
	 * @return string
	 */
	function vastart_navigation_template( $template ) {
		$template = '
		<nav class="navigation %1$s">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
		</nav>';

		return $template;
	}

	add_filter( 'navigation_markup_template', 'vastart_navigation_template' );

endif;

if ( ! function_exists( 'vastart_smartslider3_skip_license_modal' ) ) :

	/**
	 * Smartslider 3 skip license modal.
	 *
	 * @since 1.0.0
	 * @return boolean
	 */
	function vastart_smartslider3_skip_license_modal() {
		return true;
	}

	add_filter( 'smartslider3_skip_license_modal', 'vastart_smartslider3_skip_license_modal' );
endif;

if ( ! function_exists( 'vastart_woocommerce_pagination_args' ) ) :

	/**
	 * Override Woocommerce Pagination.
	 *
	 * @since 1.0.0
	 * @param array $args Woocommerce Pagination Arguments.
	 * @return array
	 */
	function vastart_woocommerce_pagination_args( $args ) {
		$args['type'] = 'plain';

		$args['prev_text'] = is_rtl() ? wp_kses(
			'<span class="icon-chevron-right"></span>',
			array(
				'span' => array(
					'class' => array(),
				),
			)
		) : wp_kses(
			'<span class="icon-chevron-left"></span>',
			array(
				'span' => array(
					'class' => array(),
				),
			)
		);

		$args['next_text'] = is_rtl() ? wp_kses(
			'<span class="icon-chevron-left"></span>',
			array(
				'span' => array(
					'class' => array(),
				),
			)
		) : wp_kses(
			'<span class="icon-chevron-right"></span>',
			array(
				'span' => array(
					'class' => array(),
				),
			)
		);

		return $args;
	}

	add_filter( 'woocommerce_pagination_args', 'vastart_woocommerce_pagination_args' );
endif;

if ( ! function_exists( 'vastart_check_php_version' ) ) :

	/**
	 * Check Minimum requirement PHP Version.
	 */
	function vastart_check_php_version() {

		// Compare versions.
		if ( version_compare( PHP_VERSION, VASTART_THEME_REQUIRED_PHP_VERSION, '<' ) ) :

			// Theme not activated info message.
			add_action( 'admin_notices', 'vastart_php_version_admin_notice' );

			/**
			 * Notice Minimum requirement PHP Version.
			 */
			function vastart_php_version_admin_notice() {
				?>
				<div class="update-nag"><strong>
					<?php
					echo esc_html__( 'Vastart theme requires a minimum PHP version of ', 'vastart' ) . esc_html( VASTART_THEME_REQUIRED_PHP_VERSION );
					echo esc_html__( '. Your PHP version is ', 'vastart' ) . esc_html( PHP_VERSION );
					echo esc_html__( '. Your previous theme has been restored.', 'vastart' );
					?>
				</strong></div>
				<?php
			}

			// Switch back to previous theme.
			switch_theme( get_option( 'theme_switched' ) );
				return false;

		endif;
	}

	add_action( 'after_switch_theme', 'vastart_check_php_version' );

endif;

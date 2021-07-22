<?php
// Including Bootstrap Navwalker file (bootstrap responsive menu)
// require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


/* ************************************************************************************** */
// Including customizer.php (theme customizer)
require_once get_template_directory() . '/inc/customizer.php';


/* ************************************************************************************** */
// Including TGM Plugin Activation
// require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
// require_once get_template_directory() . '/inc/required-plugins.php';


/* ************************************************************************************** */
// Registering scripts and styles
function load_scripts() {
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true ); //  'true' is to enqueue a script before </body> instead of in the <head> portion; alternative is 'false'

    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/bebc2a7ee7.js', array( 'jquery' ), '1.0', true );

    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/cssanimation.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'scrolly-js', get_template_directory_uri() . '/js/scrolly.js', array ( 'jquery' ), '1.0', true );
    wp_enqueue_style( 'gutenberg-css', get_template_directory_uri() . '/css/style-editor.css', array(), '1.0', 'all' );

    // wp_enqueue_script( 'scrolls-js', get_template_directory_uri() . '/js/scrolls.js', array ( 'jquery' ), '1.0', true );
    
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all' ); // wp_enqueue_style( 'main', get_stylesheet_uri() );
    // wp_enqueue_style( 'main-min-css', get_template_directory_uri() . '/css/main.min.css', array(), '1.0', 'all' ); // minified CSS version
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


/* ************************************************************************************** */
// Main configuration
function wp_config() {
    // Registering nav menus
    register_nav_menus( 
        array(
            'my_main_menu' => __('Main Menu', 'custom_theme'),
            'my_main_menu-#' => __('Main Menu - #', 'custom_theme')
        )
    );

    // Registering theme supports
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
        $textdomain = 'custom_theme';
        load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

        /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300; // 150
        $logo_height = 100; // 50

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
        add_theme_support( 'align-wide' );
        
        // Add support for editor styles.
        add_theme_support( 'editor-styles' );
        

        $editor_stylesheet_path = './css/style-editor.css';
        add_editor_style( $editor_stylesheet_path );


		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Grey', 'custom_theme' ),
				'slug'  => 'grey',
				'color'	=> '#d8d8d8',
			),
			array(
				'name'  => __( 'Blue', 'custom_theme' ),
				'slug'  => 'blue',
				'color' => '#1695c3',
			),
			array(
				'name'  => __( 'Orange', 'custom_theme' ),
				'slug'  => 'orange',
				'color' => '#e9592d',
			),
			array(
			'name'  => __( 'Dark grey 2', 'custom_theme' ),
			'slug'  => 'dark-grey-2',
			'color' => '#1c1d21',
			),
			array(
				'name'  => __( 'Dark grey', 'custom_theme' ),
				'slug'  => 'dark-grey',
				'color' => '#868f9b',
			),
			array(
				'name'  => __( 'Dark blue', 'custom_theme' ),
				'slug'  => 'dark-blue',
				'color' => '#337ab7',
			),
			array(
				'name'  => __( 'Black-ish', 'custom_theme' ),
				'slug'  => 'black-ish',
				'color' => '#10161A',
			),
			array(
				'name'  => __( 'Black', 'custom_theme' ),
				'slug'  => 'black',
				'color' => 'black',
			),
			array(
				'name'  => __( 'White', 'custom_theme' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
		) );

}
add_action( 'after_setup_theme', 'wp_config' );


/**
* Block Editor Settings.
* Add custom colors and font sizes to the block editor.
*/
// function block_editor_settings() {

// 	// Block Editor Palette.
// 	$editor_color_palette = array(
// 		array(
// 			'name'  => __( 'Accent Color', 'twentytwenty' ),
// 			'slug'  => 'accent',
// 			'color' => twentytwenty_get_color_for_area( 'content', 'accent' ),
// 		),
// 		array(
// 			'name'  => _x( 'Primary', 'color', 'twentytwenty' ),
// 			'slug'  => 'primary',
// 			'color' => twentytwenty_get_color_for_area( 'content', 'text' ),
// 		),
// 		array(
// 			'name'  => _x( 'Secondary', 'color', 'twentytwenty' ),
// 			'slug'  => 'secondary',
// 			'color' => twentytwenty_get_color_for_area( 'content', 'secondary' ),
// 		),
// 		array(
// 			'name'  => __( 'Subtle Background', 'twentytwenty' ),
// 			'slug'  => 'subtle-background',
// 			'color' => twentytwenty_get_color_for_area( 'content', 'borders' ),
// 		),
// 	);
// add_action( 'after_setup_theme', 'block_editor_settings' );


/* ************************************************************************************** */
// Registering sidebars & widgets
// function wp_sidebars() {
//     register_sidebar( 
//         array(
//             'name' => __('Home Page Sidebar', 'custom_theme'),
//             'id' => 'sidebar-1',
//             'description' => __('This is the home page sidebar. You can add your widgets here.', 'custom_theme'),
//             'before_widget' => '<div class="widget-wrapper">',
//             'after_widget' => '</div>',
//             'before_title' => '<h2 class="widget-title">',
//             'after_title' => '</h2>'
//         ) 
//     );
//     register_sidebar( 
//         array(
//             'name' => __('Social Icons Widget', 'custom_theme'),
//             'id' => 'social-icons',
//             'description' => __('Social Icons Widget', 'custom_theme'),
//             'before_widget' => '<div class="widget-wrapper">',
//             'after_widget' => '</div>',
//             'before_title' => '<h2 class="widget-title">',
//             'after_title' => '</h2>'
//         ) 
//     );
// }
// add_action( 'widgets_init', 'wp_sidebars' );


/* ************************************************************************************** */
// Add class to menu items of one specific menu (nav_menu_css_class)
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'selected';
  }
  return $classes;
}


/* ************************************************************************************** */
// Change language name
add_filter( 'trp_beautify_language_name', 'trpc_change_language_name', 10, 3 );
function trpc_change_language_name ($name, $code, $english_or_native ) {
	if ( $code == 'de_AT' ) { // replace with the code of the language to change
        return 'Deutsch';     // replace with your desired language name
    }

    if ( $code == 'en_GB' ) {
        return 'English';
	}
	return $name;
}
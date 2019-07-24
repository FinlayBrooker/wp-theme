<?php
/**
 * yellowtractor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yellowtractor
 */

if ( ! function_exists( 'yellowtractor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yellowtractor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on yellowtractor, use a find and replace
		 * to change 'yellowtractor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yellowtractor', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		// add_theme_support( 'post-thumbnails' );
		add_image_size('hex-thumb', 173,150,tr);
		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'yellowtractor' ),
		) );
		register_nav_menus( array(
			'menu-2' => esc_html__( 'Secondary', 'yellowtractor' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
	//	add_theme_support( 'custom-logo', array(
	//		'height'      => 250,
	//		'width'       => 250,
	//		'flex-width'  => true,
	//		'flex-height' => true,
	//	) );

	}
endif;
add_action( 'after_setup_theme', 'yellowtractor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yellowtractor_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'yellowtractor_content_width', 800 );
}
add_action( 'after_setup_theme', 'yellowtractor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yellowtractor_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'yellowtractor' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'yellowtractor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Latest', 'yellowtractor' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add stuff to widget 2.', 'yellowtractor' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Contact', 'yellowtractor' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add stuff to widget 3.', 'yellowtractor' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'yellowtractor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yellowtractor_scripts() {
	wp_enqueue_style( 'yellowtractor-style', get_stylesheet_uri() );

	wp_enqueue_script( 'extra', get_template_directory_uri() . '/js/extra.js', array ('jquery'), NULL, true);

	wp_enqueue_script( 'social', get_template_directory_uri() . '/js/social.js', array ('jquery'), NULL, true);

	wp_enqueue_script( 'yellowtractor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'yellowtractor-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yellowtractor_scripts' );


/**
 * Tidy up WP header
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'start_post_rel_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link');

/**
 * Enqueue shiv for IE in head
 */

 function _s_scripts() {
 	wp_enqueue_script( '_s-html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.2', false );
 	wp_script_add_data( '_s-html5shiv', 'conditional', 'lt IE 9' );
 }
 add_action( 'wp_enqueue_scripts', '_s_scripts' );

function _ie9_scripts() {
 wp_enqueue_script( 'ie_respond', get_template_directory_uri() . '/js/respond.min.js' );
 wp_style_add_data( 'ie_respond', 'conditional', 'lt IE 9' );
}
 add_action( 'wp_enqueue_scripts', '_ie9_scripts' );

 // Enqueue Font Awesome.
 add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
 function custom_load_font_awesome() {
     wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/js/all.js', array(), null );
 }

 add_filter( 'script_loader_tag', 'add_defer_attribute', 10, 2 );
 /**
  * Filter the HTML script tag of `font-awesome` script to add `defer` attribute.
  *
  * @param string $tag    The <script> tag for the enqueued script.
  * @param string $handle The script's registered handle.
  *
  * @return   Filtered HTML script tag.
  */
 function add_defer_attribute( $tag, $handle ) {
     if ( 'font-awesome' === $handle ) {
         $tag = str_replace( ' src', ' defer src', $tag );
     }

     return $tag;
 }


 /**
  * Enqueue external google fonts
  */
	add_action( 'wp_enqueue_scripts', 'wpse217390_enqueue_google_fonts' );
	 	function wpse217390_enqueue_google_fonts() {


		 $query_args = array(
	 	   'family' => 'Raleway|Oxygen:300,400,700'

	 	 );

	 	 wp_register_style(
	 	   'google-fonts',
	 	   add_query_arg( $query_args, '//fonts.googleapis.com/css' ),
	 	   array(),
	 	   null
	 	 );
	 	 wp_enqueue_style( 'google-fonts' );

	 	}




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function custom_excerpt_length( $length ) {
        return 10;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Function which displays your post date in time ago format */
function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}

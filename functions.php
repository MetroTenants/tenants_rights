<?php
/**
 * tenants_rights functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tenants_rights
 */

if ( ! function_exists( 'tenants_rights_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tenants_rights_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tenants_rights, use a find and replace
	 * to change 'tenants_rights' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tenants_rights', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'tenants_rights' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tenants_rights_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'tenants_rights_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tenants_rights_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tenants_rights_content_width', 640 );
}
add_action( 'after_setup_theme', 'tenants_rights_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tenants_rights_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tenants_rights' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tenants_rights' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name' => 'Footer Contact',
		'id' => 'footer-contact',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	) );
}

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_action( 'widgets_init', 'tenants_rights_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tenants_rights_scripts() {
	wp_enqueue_style( 'tenants_rights-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tenants_rights-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tenants_rights-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tenants_rights_scripts' );

/**
 * Pulls posts with related tags, or categories if no tags available
 */
function tenants_rights_related_posts( $post_id ) {
	$type = 'tags';
	$items = get_the_tags( $post_id );
	if ( !$items && is_wp_error( $items ) ) {
		$type = 'category';
		$items = get_the_categories( $post_id );
	}
	$item_ids = array();

	if ( $items && !is_wp_error( $items ) ) {
		foreach ( $items as $item ) {
			array_push( $item_ids, $item->term_id );
		}
	}

	$current_post_type = get_post_type( $post_id );
	return array(
		$type . '__in' => $item_ids,
		'post_type' => $current_post_type,
		'posts_per_page' => '5',
		'post__not_in' => array( $post_id )
	);
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

<?php
/**
 * Lavenia Cosméticos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lavenia_Cosméticos
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lavenia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lavenia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Lavenia Cosméticos, use a find and replace
		 * to change 'lavenia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lavenia', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'header-menu' => esc_html__( 'Menu Cabeçalho', 'lavenia' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'lavenia_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'lavenia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lavenia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lavenia_content_width', 640 );
}
add_action( 'after_setup_theme', 'lavenia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lavenia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lavenia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lavenia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lavenia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lavenia_scripts() {
	wp_enqueue_style( 'lavenia-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lavenia-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lavenia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lavenia_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Functions Admin.
 */
require get_template_directory() . '/inc/admin.php';

/**
 * Implement ACF config pages.
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function wpdocs_after_setup_theme() {
  add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

add_image_size( 'featured-blog-desktop', 1170, 480, true );
add_image_size( 'featured-blog-mobile', 414, 570, true );
add_image_size( 'recent-posts', 375, 270, true );
add_image_size( 'list-posts', 230, 190, true );

function set_post_views($post_id) {
	$count_key = 'wp_post_views_count';
	$count = get_post_meta($post_id, $count_key, true);

	if($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}

function track_post_views ($post_id) {
	if ( !is_single() ){
		return;
	}

	if ( empty ( $post_id) ) {
			global $post;
			$post_id = $post->ID;
	}

	set_post_views($post_id);
}

add_action( 'wp_head', 'track_post_views');

function remove_pages_from_search() {
	global $wp_post_types;
	$wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');

function box_leia_tambem() {
	$featured_posts = get_field('links_leia_tambem');
	if( $featured_posts ):
		$teste = '';

		$teste .= '<div class="box-leia-tambem">
			<p class="title">' . get_field( 'titulo_box' ) . '</p>';

		foreach( $featured_posts as $featured_post ):
			$permalink = get_permalink( $featured_post->ID );
			$title = get_the_title( $featured_post->ID );

			$teste .= '<a href="' . esc_url( $permalink ) . '">' . esc_html( $title ) . '</a>';

		endforeach;

		$teste .= '</div>';

	endif;

	return $teste;
}
add_shortcode( 'box_leia_tambem', 'box_leia_tambem' );

function add_paragraphs($content) {
	$additions = array('[box_leia_tambem]');

	$output = '';
	$parts = explode("</p>", $content);
	$count = count($parts);

	for($i=0; $i<$count; $i++) {
		$output .= $parts[$i] . '</p>' . $additions[$i];
	}
	return $output;
}
add_filter('the_content','add_paragraphs');

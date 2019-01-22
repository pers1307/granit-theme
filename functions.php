<?php
// Хук для подключения стилей и скриптов
add_action('wp_enqueue_scripts', 'granit_scripts');
// Хук для настройки темы
add_action('after_setup_theme', 'granit_theme_setup');

require get_template_directory() . '/controllers/customizer.php';

/** Функция для подключения стилей и скриптов */
function granit_scripts()
{
    wp_register_style(
        'granit-reset',
        get_template_directory_uri() . '/assets/css/reset.css'
    );
    wp_register_style(
        'granit-content',
        get_template_directory_uri() . '/assets/css/content.css'
    );
    wp_register_style(
        'granit-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );
    wp_register_style(
        'granit-bxslider',
        get_template_directory_uri() . '/assets/css/jquery.bxslider.css'
    );
    wp_enqueue_style('granit-reset');
    wp_enqueue_style('granit-content');
    wp_enqueue_style('granit-style');
    wp_enqueue_style('granit-bxslider');

//    wp_register_script(
//        'wfm-script',
//        plugins_url('ajax_script.js', __FILE__),
//        ['jquery']
//    );
//    wp_enqueue_script('wfm-script');
//
//    wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );
//    wp_enqueue_style( 'untheme-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
//    wp_enqueue_script( 'untheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
}

// Настройки темы
function granit_theme_setup() {
    // Logo Support
    add_theme_support('custom-logo');

//    // Featured Image
//    add_theme_support('post-thumbnails');
//    register_nav_menus(array(
//        'primary'	=> __('Primary Menu')
//    ));
}







/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

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

/** 
 * Include primary navigation menu
 */
function untheme_nav_init() {
	register_nav_menus( array(
		'menu-1' => 'Primary Menu',
	) );
}
add_action( 'init', 'untheme_nav_init' );

/**
 * Register widget area.
 *
 */
function untheme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'untheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function untheme_scripts() {
	wp_enqueue_style( 'untheme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'untheme-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_script( 'untheme-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
}
add_action( 'wp_enqueue_scripts', 'untheme_scripts' );

function untheme_create_post_custom_post() {
	register_post_type('custom_post', 
		array(
		'labels' => array(
			'name' => __('Custom Post', 'untheme'),
		),
		'public'       => true,
		'hierarchical' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
		), 
		'taxonomies'   => array(
				'post_tag',
				'category',
		) 
	));
}
add_action('init', 'untheme_create_post_custom_post'); // Add our work type
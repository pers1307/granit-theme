<?php
// Хук для подключения стилей и скриптов
add_action('wp_enqueue_scripts', 'granit_scripts');
// Хук для настройки темы
add_action('after_setup_theme', 'granit_theme_setup');
// Хук для создания своих типов записей
add_action('init', 'granit_create_custom_posts');

require get_template_directory() . '/controllers/customizer.php';
require get_template_directory() . '/customize/NavWalker.php';

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
function granit_theme_setup()
{
    // Logo Support
    add_theme_support('custom-logo');

//    // Featured Image
//    add_theme_support('post-thumbnails');
//    register_nav_menus(array(
//        'primary'	=> __('Primary Menu')
//    ));
}

function granit_create_custom_posts()
{
    register_post_type('Slider',
        array(
            'labels' => array(
                'name' => __('Slider', 'granit'),
            ),
            'public'       => true,
            'hierarchical' => false,
            'supports'     => [
                'title',
                'editor',
            ],
            'has_archive'  => false,
            'rewrite'      => true,
        )
    );

    register_post_type('Portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio', 'granit'),
            ),
            'public'       => true,
            'hierarchical' => false,
            'supports'     => [
                'title',
                'editor',
                'thumbnail',
            ],
            'has_archive'  => false,
            'rewrite'      => true,
        )
    );

    register_post_type('News',
        array(
            'labels' => array(
                'name' => __('News', 'granit'),
            ),
            'public'       => true,
            'hierarchical' => false,
            'supports'     => [
                'title',
                'editor',
                'thumbnail',
                /**
                 * date ?
                 */
            ],
            'has_archive'  => false,
            'rewrite'      => true,
        )
    );

    /**
     * taxonomy можно использовать как характеристики для объектов
     */
    register_taxonomy(
        'Category_rocks',
        'Rocks',
        [
            'label'   => 'Category rocks',
            'rewrite' => ['slug' => 'Category-rocks'],
            'hierarchical' => true,
        ]
    );

    register_post_type('Rocks',
        array(
            'labels' => array(
                'name'          => __('Rocks', 'granit'),
                'singular_name' => __('Rock', 'granit'),
            ),
            'public'       => true,
            'hierarchical' => true,
            'supports'     => [
                'title',
                'editor',
                'thumbnail',

                /**
                 * characteristics
                 */
                'custom-fields',
                /**
                 * price
                 */
            ],
            'has_archive'  => false,
            'rewrite'      => true,
            'taxonomies'   => array(
                'Category_rocks',
            )
        )
    );
}

/**
 * Удалить дефолтные посты!
 */
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}

add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}

add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

function remove_draft_widget(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
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
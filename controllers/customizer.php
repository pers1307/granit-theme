<?php

add_action('customize_register', 'granit_customize_register');

function granit_customize_register($wp_customize) {

    $wp_customize->add_section('popular', array(
        'title'	=> __('Popular on home', 'popular'),
        'description'	=> sprintf(__('Options for popular product on home', 'popular')),
        'priority'	=> 130
    ));
    $wp_customize->add_setting('popular_title', array(
        'default'		=> _x('Popular stone', 'popular'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('popular_title', array(
        'label'			=> __('Title for popular section', 'popular'),
        'section'		=> 'popular',
        'priority'		=> 20
    ));
    $wp_customize->add_setting('popular_subtitle', array(
        'default'		=> _x('Products', 'popular'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('popular_subtitle', array(
        'label'			=> __('Subtitle for popular section', 'popular'),
        'section'		=> 'popular',
        'priority'		=> 20
    ));

    /**
     * todo: Нужно чтобы было что то типо визивика
     */
    $wp_customize->add_setting('popular_text', array(
        'default'		=> _x('Text', 'popular'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('popular_text', array(
        'label'			=> __('Text for popular section', 'popular'),
        'section'		=> 'popular',
        'priority'		=> 20
    ));
    /**
     * todo: добавить отображение блока в целом
     */

    $wp_customize->add_section('advantages', array(
        'title'	=> __('Advantages on home', 'popular'),
        'description'	=> sprintf(__('Options for advantages on home', 'advantages')),
        'priority'	=> 130
    ));
    $wp_customize->add_setting('popular_title', array(
        'default'		=> _x('Advantages', 'advantages'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('popular_title', array(
        'label'			=> __('Title for advantages section', 'advantages'),
        'section'		=> 'advantages',
        'priority'		=> 20
    ));

    /**
     * Header section
     */
    $wp_customize->add_section('header', array(
        'title'	=> __('Settings', 'header'),
        'description'	=> sprintf(__('Settings for site', 'advantages')),
        'priority'	=> 130
    ));
    $wp_customize->add_setting('header_email', array(
        'default'		=> _x('granit@mail.ru', 'header'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('header_email', array(
        'label'			=> __('Email', 'header'),
        'section'		=> 'header',
        'priority'		=> 20
    ));

    $wp_customize->add_setting('header_phone_one', array(
        'default'		=> _x('8 343', 'header'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('header_phone_one', array(
        'label'			=> __('First part of phone', 'header'),
        'section'		=> 'header',
        'priority'		=> 20
    ));

    $wp_customize->add_setting('header_phone_two', array(
        'default'		=> _x('200 60 40', 'header'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('header_phone_two', array(
        'label'			=> __('Second part of phone', 'header'),
        'section'		=> 'header',
        'priority'		=> 20
    ));

    $wp_customize->add_setting('time_work', array(
        'default'		=> _x('Mn-Fr: from 9:00 to 20:00', 'header'),
        'type'			=> 'theme_mod'
    ));
    $wp_customize->add_control('time_work', array(
        'label'			=> __('Time to work', 'header'),
        'section'		=> 'header',
        'priority'		=> 20
    ));





//    // Text Setting
//    $wp_customize->add_setting('banner_text', array(
//        'default'		=> _x('Welcome to the Wordpress Business Theme. This theme uses the Twitter Bootstrap 3 framework and can be customized to your liking', 'business'),
//        'type'			=> 'theme_mod'
//    ));
//    // Text Control
//    $wp_customize->add_control('banner_text', array(
//        'label'			=> __('Text', 'business'),
//        'section'		=> 'banner',
//        'priority'		=> 20
//    ));
//    // Button Text Setting
//    $wp_customize->add_setting('banner_btn_text', array(
//        'default'		=> _x('Sign Up', 'business'),
//        'type'			=> 'theme_mod'
//    ));
//    // Button Text Control
//    $wp_customize->add_control('banner_btn_text', array(
//        'label'			=> __('Button Text', 'business'),
//        'section'		=> 'banner',
//        'priority'		=> 20
//    ));
//    // Button URL Setting
//    $wp_customize->add_setting('banner_btn_url', array(
//        'default'		=> _x('http://test.com', 'business'),
//        'type'			=> 'theme_mod'
//    ));
//    // Button URL Control
//    $wp_customize->add_control('banner_btn_url', array(
//        'label'			=> __('Button URL', 'business'),
//        'section'		=> 'banner',
//        'priority'		=> 20
//    ));
//    // Background Image Setting
//    $wp_customize->add_setting('banner_image', array(
//        'default'		=> get_bloginfo('template_directory').'/img/banner.jpg',
//        'type'			=> 'theme_mod'
//    ));
//    // Background Image Control
//    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
//        'label'	=> __('Background Image', 'business'),
//        'section'	=> 'banner',
//        'settings'	=> 'banner_image'
//    )));
//    // Boxes Section
//    $wp_customize->add_section('boxes', array(
//        'title'          => __('Boxes', 'business'),
//        'description'    => sprintf( __('Options for homepage boxes', 'business')
//        ),
//        'priority'       => 130,
//    ));
//    // BOX 1
//    // Box 1 Heading Setting
//    $wp_customize->add_setting( 'box1_heading', array(
//        'default'   => _x('Box 1 Heading', 'business'),
//        'type'      => 'theme_mod'
//    ));
//    // Box 1 Heading Control
//    $wp_customize->add_control( 'box1_heading', array(
//        'label'    => __('Box 1 Heading', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // Box 1 Text Setting
//    $wp_customize->add_setting( 'box1_text', array(
//        'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 1 Text Control
//    $wp_customize->add_control( 'box1_text', array(
//        'label'    => __('Box 1 Text', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // Box 1 Icon Setting
//    $wp_customize->add_setting( 'box1_icon', array(
//        'default'              => _x('bar-chart', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 1 Icon Control
//    $wp_customize->add_control( 'box1_icon', array(
//        'label'    => __('Box 1 Icon', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // BOX 2
//    // Box 2 Heading Setting
//    $wp_customize->add_setting( 'box2_heading', array(
//        'default'              => _x('Box 2 Heading', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 2 Heading Control
//    $wp_customize->add_control( 'box2_heading', array(
//        'label'    => __('Box 2 Heading', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // Box 2 Text Setting
//    $wp_customize->add_setting( 'box2_text', array(
//        'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 2 Text Control
//    $wp_customize->add_control( 'box2_text', array(
//        'label'    => __('Box 2 Text', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // Box 2 Icon Setting
//    $wp_customize->add_setting( 'box2_icon', array(
//        'default'              => _x('code', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 2 Icon Control
//    $wp_customize->add_control( 'box2_icon', array(
//        'label'    => __('Box 2 Icon', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // BOX 3
//    // Box 3 Heading Setting
//    $wp_customize->add_setting( 'box3_heading', array(
//        'default'              => _x('Box 3 Heading', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 3 Heading Control
//    $wp_customize->add_control( 'box3_heading', array(
//        'label'    => __('Box 3 Heading', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // Box 3 Text Setting
//    $wp_customize->add_setting( 'box3_text', array(
//        'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 3 Text Control
//    $wp_customize->add_control( 'box3_text', array(
//        'label'    => __('Box 3 Text', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
//    // Box 3 Icon Setting
//    $wp_customize->add_setting( 'box3_icon', array(
//        'default'              => _x('desktop', 'business'),
//        'type'                 => 'theme_mod'
//    ));
//    // Box 3 Icon Control
//    $wp_customize->add_control( 'box3_icon', array(
//        'label'    => __('Box 3 Icon', 'business'),
//        'section'  => 'boxes',
//        'priority' => 20,
//    ));
}
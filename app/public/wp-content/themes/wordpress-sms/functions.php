<?php

// Load the scripts and styles
function sms_resources()
{
    wp_enqueue_style('sms_main_style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('sms_extra_style', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_script('sms_main_script', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sms_resources');

// Add features to theme
function sms_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sms_features');

// Add a posts type in admin side bar
function sms_posts_types()
{
    // register a posts type named Event and set to public => true so
    // any users can see it in dashboard
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'sms_posts_types');

<?php
function sms_resources()
{
    wp_enqueue_style('sms_main_style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('sms_extra_style', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}
add_action('wp_enqueue_scripts', 'sms_resources');

?>
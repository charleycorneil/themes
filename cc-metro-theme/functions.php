<?php

function cc_metro_enqueue_styles() {
    wp_enqueue_style('cc-metro-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'cc_metro_enqueue_styles');

function cc_metro_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'cc-metro-theme'),
    ));
}
add_action('after_setup_theme', 'cc_metro_theme_setup');

?>
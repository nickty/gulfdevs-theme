<?php
function gulfdevs_enqueue_styles() {
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'gulfdevs_enqueue_styles');

function gulfdevs_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gulfdevs_theme_setup');

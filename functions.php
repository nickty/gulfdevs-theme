<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly

// Theme Setup
function gulfdevs_setup() {
    load_theme_textdomain('gulfdevs', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'gulfdevs'),
    ));
}
add_action('after_setup_theme', 'gulfdevs_setup');

// Enqueue Scripts and Styles
function gulfdevs_enqueue_assets() {
    // Enqueue main theme stylesheet
    wp_enqueue_style('gulfdevs-style', get_stylesheet_uri(), array(), '1.0.1');

    // Enqueue Tailwind CSS
    wp_enqueue_style('gulfdevs-tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '1.0.1');
    
    // Enqueue main CSS with cache busting
    $css_file = get_stylesheet_directory() . '/assets/css/style.css';
    if (file_exists($css_file)) {
        $css_version = filemtime($css_file);
        wp_enqueue_style('gulfdevs-new-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), $css_version);
    }

    // Enqueue main JavaScript file
    wp_enqueue_script('gulfdevs-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gulfdevs_enqueue_assets');

// Customizer Settings
function gulfdevs_customize_register($wp_customize) {
    $wp_customize->add_section('gulfdevs_hero_section', array(
        'title' => __('Hero Section', 'gulfdevs'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'Innovative Web Solutions for the Gulf Region',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'gulfdevs'),
        'section' => 'gulfdevs_hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'Your trusted partner in creating exceptional digital experiences',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'gulfdevs'),
        'section' => 'gulfdevs_hero_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'gulfdevs_customize_register');

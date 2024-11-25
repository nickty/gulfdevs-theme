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


function gulfdevs_enqueue_rtl_styles() {
    if (is_rtl()) {
        wp_enqueue_style('gulfdevs-rtl', get_template_directory_uri() . '/rtl.css', array(), '1.0');
    }
}
add_action('wp_enqueue_scripts', 'gulfdevs_enqueue_rtl_styles');

function gulfdevs_register_strings() {
    if (function_exists('pll_register_string')) {
        pll_register_string('hero_title', 'Innovative Web Solutions for the Gulf', 'GulfDevs Theme');
        pll_register_string('hero_subtitle', 'Empowering businesses with cutting-edge technology', 'GulfDevs Theme');
        pll_register_string('explore_services', 'Explore Our Services', 'GulfDevs Theme');
        pll_register_string('contact_us', 'Contact Us', 'GulfDevs Theme');
        pll_register_string('our_services', 'Our Services', 'GulfDevs Theme');
        pll_register_string('custom_web_development', 'Custom Web Development', 'GulfDevs Theme');
        pll_register_string('ecommerce_solutions', 'E-commerce Solutions', 'GulfDevs Theme');
        pll_register_string('uiux_design', 'UI/UX Design', 'GulfDevs Theme');
        pll_register_string('database_solutions', 'Database Solutions', 'GulfDevs Theme');
        pll_register_string('custom_web_development_desc', 'Tailored websites built with cutting-edge technology', 'GulfDevs Theme');
        pll_register_string('ecommerce_solutions_desc', 'Secure and scalable online stores', 'GulfDevs Theme');
        pll_register_string('uiux_design_desc', 'Beautiful, user-friendly interfaces', 'GulfDevs Theme');
        pll_register_string('database_solutions_desc', 'Robust data management systems', 'GulfDevs Theme');
        pll_register_string('testimonial_quote', 'GulfDevs transformed our online presence. Their understanding of local markets is unparalleled.', 'GulfDevs Theme');
        pll_register_string('testimonial_author', 'Ahmed Al-Mansour, CEO of Gulf Innovations', 'GulfDevs Theme');
    }
}
add_action('after_setup_theme', 'gulfdevs_register_strings');

function gulfdevs_register_footer_strings() {
    if (function_exists('pll_register_string')) {
        pll_register_string('GulfDevs', 'GulfDevs', 'Footer');
        pll_register_string('All rights reserved', 'All rights reserved.', 'Footer');
        pll_register_string('Privacy Policy', 'Privacy Policy', 'Footer');
        pll_register_string('Terms of Service', 'Terms of Service', 'Footer');
    }
}
add_action('after_setup_theme', 'gulfdevs_register_footer_strings');

function gulfdevs_register_services_strings() {
    if (function_exists('pll_register_string')) {
        pll_register_string('Custom Web Development', 'Custom Web Development', 'Services');
        pll_register_string('Custom Web Development Description', 'We create bespoke websites tailored to your unique business needs, using cutting-edge technologies to ensure optimal performance and user experience.', 'Services');
        pll_register_string('E-commerce Solutions', 'E-commerce Solutions', 'Services');
        pll_register_string('E-commerce Solutions Description', 'Our e-commerce platforms are secure, scalable, and optimized for the Gulf market, helping you reach more customers and grow your online business.', 'Services');
        pll_register_string('Mobile App', 'Mobile App', 'Services');
        pll_register_string('Mobile App Description', 'We design beautiful, intuitive interfaces that engage your audience and reflect the cultural nuances of the Gulf region.', 'Services');
        pll_register_string('Database Solutions', 'Database Solutions', 'Services');
        pll_register_string('Database Solutions Description', 'Our robust data management systems ensure your business data is secure, accessible, and efficiently organized.', 'Services');
        pll_register_string('Learn More', 'Learn More', 'Services');
    }
}
add_action('after_setup_theme', 'gulfdevs_register_services_strings');

function gulfdevs_register_about_strings() {
    if (function_exists('pll_register_string')) {
        pll_register_string('About Us Description', 'GulfDevs is a leading web development company specializing in creating innovative digital solutions for businesses across the Gulf region.', 'About Us');
        pll_register_string('Our Mission', 'Our Mission', 'About Us');
        pll_register_string('Mission Description', 'To empower Gulf businesses with cutting-edge web technologies, bridging the gap between traditional values and digital innovation.', 'About Us');
        pll_register_string('Our Values', 'Our Values', 'About Us');
        pll_register_string('Innovation in technology', 'Innovation in technology', 'About Us');
        pll_register_string('Cultural sensitivity and understanding', 'Cultural sensitivity and understanding', 'About Us');
        pll_register_string('Commitment to quality', 'Commitment to quality', 'About Us');
        pll_register_string('Customer-centric approach', 'Customer-centric approach', 'About Us');
    }
}
add_action('after_setup_theme', 'gulfdevs_register_about_strings');

function gulfdevs_register_contact_strings() {
    if (function_exists('pll_register_string')) {
        pll_register_string('Contact Description', 'Get in touch with us for any inquiries or to discuss your project.', 'Contact');
        pll_register_string('Our Office', 'Our Office', 'Contact');
        pll_register_string('Office Address 1', '123 Gulf Tower, Dubai Internet City', 'Contact');
        pll_register_string('Office Address 2', 'Dubai, United Arab Emirates', 'Contact');
        pll_register_string('Office Phone', 'Phone: +971 4 123 4567', 'Contact');
        pll_register_string('Office Email', 'Email: info@gulfdevs.com', 'Contact');
    }
}
add_action('after_setup_theme', 'gulfdevs_register_contact_strings');


function gulfdevs_register_portfolio_strings() {
    if (function_exists('pll_register_string')) {
        pll_register_string('Gulf E-commerce Platform', 'Gulf E-commerce Platform', 'Portfolio');
        pll_register_string('Gulf E-commerce Platform Description', 'A scalable e-commerce solution for a leading retailer in the UAE.', 'Portfolio');
        pll_register_string('Saudi Tourism Portal', 'Saudi Tourism Portal', 'Portfolio');
        pll_register_string('Saudi Tourism Portal Description', 'An interactive website showcasing Saudi Arabia\'s tourist attractions.', 'Portfolio');
        pll_register_string('Qatari Financial Dashboard', 'Qatari Financial Dashboard', 'Portfolio');
        pll_register_string('Qatari Financial Dashboard Description', 'A secure, real-time financial data visualization tool for a Qatari bank.', 'Portfolio');
        pll_register_string('View Case Study', 'View Case Study', 'Portfolio');
    }
}
add_action('after_setup_theme', 'gulfdevs_register_portfolio_strings');

function load_service_popup() {
    $service = isset($_POST['service']) ? sanitize_text_field($_POST['service']) : '';
    include(get_template_directory() . '/service-popup.php');
    wp_die();
}
add_action('wp_ajax_load_service_popup', 'load_service_popup');
add_action('wp_ajax_nopriv_load_service_popup', 'load_service_popup');


function enqueue_cf7_scripts() {
    if (function_exists('wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts();
    }
    if (function_exists('wpcf7_enqueue_styles')) {
        wpcf7_enqueue_styles();
    }
}
add_action('wp_enqueue_scripts', 'enqueue_cf7_scripts');


function enqueue_custom_cf7_script() {
    if (function_exists('wpcf7_enqueue_scripts')) {
        wp_enqueue_script('custom-cf7', get_template_directory_uri() . '/js/contact-form.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_custom_cf7_script');

function include_service_popup() {
    include(get_template_directory() . '/service-popup.php');
}
add_action('wp_footer', 'include_service_popup');

function gulfdevs_register_strings_more() {
    if (function_exists('pll_register_string')) {
        // ... existing strings ...
        pll_register_string('Our Blog', 'Our Blog', 'Blog');
        pll_register_string('Read More', 'Read More', 'Blog');
        pll_register_string('Previous', 'Previous', 'Blog');
        pll_register_string('Next', 'Next', 'Blog');
    }
}
add_action('after_setup_theme', 'gulfdevs_register_strings_more');
<?php
if (!defined('ABSPATH')) exit;

function doorillio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 32,
        'width'       => 32,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'doorillio'),
        'footer-1' => __('Footer Menu 1', 'doorillio'),
        'footer-2' => __('Footer Menu 2', 'doorillio'),
        'footer-3' => __('Footer Menu 3', 'doorillio')
    ));
}
add_action('after_setup_theme', 'doorillio_setup');

function doorillio_scripts() {
    $base_uri = get_template_directory_uri();
    
    wp_enqueue_style('doorillio-style', $base_uri . '/style.css', array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('doorillio-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);
    
    // Enqueue styles from the 'src/styles' directory
    $styles_dir = new DirectoryIterator(get_template_directory() . '/src/styles');
    foreach ($styles_dir as $fileinfo) {
        if (!$fileinfo->isDot() && $fileinfo->getExtension() === 'css') {
            $style_name = 'doorillio-' . $fileinfo->getBasename('.css');
            wp_enqueue_style($style_name, $base_uri . '/src/styles/' . $fileinfo->getFilename(), array(), '1.0');
        }
    }
    
    // Enqueue JavaScript files from the 'src/components' directory
    $components_dir = new DirectoryIterator(get_template_directory() . '/src/components');
    foreach ($components_dir as $fileinfo) {
        if (!$fileinfo->isDot() && $fileinfo->getExtension() === 'js') {
            $script_name = 'doorillio-' . $fileinfo->getBasename('.js');
            wp_enqueue_script($script_name, $base_uri . '/src/components/' . $fileinfo->getFilename(), array(), '1.0', true);
        }
    }
    
    // Enqueue the main JavaScript file
    wp_enqueue_script('doorillio-main', $base_uri . '/src/main.js', array(), '1.0', true);
    
    // Enqueue animations.js
    wp_enqueue_script('doorillio-animations', $base_uri . '/assets/js/animations.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'doorillio_scripts');

// Register widget areas
function doorillio_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'doorillio'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'doorillio'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'doorillio_widgets_init');

// Customize excerpt length
function doorillio_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'doorillio_excerpt_length');

// Customize excerpt more
function doorillio_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'doorillio_excerpt_more');

// Add theme customizer options
function doorillio_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('doorillio_hero', array(
        'title'    => __('Hero Section', 'doorillio'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'           => __('Your Guide to a Healthier Life', 'doorillio'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'    => __('Hero Title', 'doorillio'),
        'section'  => 'doorillio_hero',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default'           => __('Discover science-backed health tips, nutrition advice, and wellness strategies for a better you.', 'doorillio'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label'    => __('Hero Description', 'doorillio'),
        'section'  => 'doorillio_hero',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'doorillio_customize_register');

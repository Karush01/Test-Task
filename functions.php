<?php
add_theme_support('post-thumbnails');
/**
 * Enqueue scripts and styles.
 */
function dev_test_website_scripts()
{
    wp_enqueue_style('dev_test-website-style', get_stylesheet_uri());
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), ' ');
    wp_enqueue_style('style-slider', get_template_directory_uri() . '/assets/css/style_slider.css', array(), ' ');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), ' ');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), ' ');
}

add_action('wp_enqueue_scripts', 'dev_test_website_scripts');


add_action('wp_enqueue_scripts', 'dev_test_website_theme_scripts');
function dev_test_website_theme_scripts()
{
    wp_enqueue_script('jquery', false, array(), false, false);
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array('jquery'), '1.0.0', false);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '', true);
    wp_enqueue_script('main-slider', get_template_directory_uri() . '/assets/js/main_slider.js', array(), '', true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '', true);
}

function my_enqueue()
{
    wp_enqueue_script('ajax-script', get_template_directory_uri() . '/assets/js/my-ajax-script.js', array('jquery'));
    wp_localize_script('ajax-script', 'my_ajax_objectmy_ajax_object',
        array('ajax_url' => admin_url('admin-ajax.php')));
}

add_action('wp_enqueue_scripts', 'my_enqueue');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function wpb_custom_new_menu() {
    register_nav_menu('primary',__( 'Primary menu' ));
    register_nav_menu('top-destinations',__( 'Top destinations' ));
    register_nav_menu('travel-information',__( 'Travel information' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

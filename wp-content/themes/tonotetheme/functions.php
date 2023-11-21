<?php

get_template_directory() . '/inc/block-patterns.php';
function load_stylesheet()
{

    wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', 'all');
    wp_enqueue_style('animate');

    wp_register_style('favicon', get_template_directory_uri() . '/assets/images/favicon.ico', array(), 1, 'all');
    wp_enqueue_style('favicon');

    wp_register_style('tinySlide', get_template_directory_uri() . '/assets/libs/tiny-slider/tiny-slider.css', array(), 1, 'all');
    wp_enqueue_style('tinySlide');

    wp_register_style('Bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('Bootstrap');

    wp_register_style('materialdesignicons', get_template_directory_uri() . '/assets/libs/%40mdi/font/css/materialdesignicons.min.css', array(), 1, 'all');
    wp_enqueue_style('materialdesignicons');

    wp_register_style('lineIcon', get_template_directory_uri() . '/assets/libs/%40iconscout/unicons/css/line.css', array(), 1, 'all');
    wp_enqueue_style('lineIcon');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.min.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('sub-style', get_template_directory_uri() . '/assets/css/sub-style.css', array(), 1, 'all');
    wp_enqueue_style('sub-style');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');

function load_JScript()
{

    wp_register_script('bootstrapJs', get_template_directory_uri() . '/assets/libs/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1);
    wp_enqueue_script('bootstrapJs');

    wp_register_script('tinySliderJs', get_template_directory_uri() . '/assets/libs/tiny-slider/min/tiny-slider.js', array(), 1, 1);
    wp_enqueue_script('tinySliderJs');

    wp_register_script('feather', get_template_directory_uri() . '/assets/libs/feather-icons/feather.min.js', array(), 1, 1);
    wp_enqueue_script('feather');

    wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.init.js', array(), 1, 1);
    wp_enqueue_script('plugins');

    wp_register_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), 1, 1);
    wp_enqueue_script('app');

    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1);
    wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts', 'load_JScript');


// Custom image size
add_image_size('product_image_small', 300, 200, true);
add_image_size('product_image_large', 700, 700, false);


// Menus Support
function gt_init()
{
    // Register menus
    add_theme_support('menus');
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu Location', 'theme'),
            'mobile-menu' => __('Mobile Menu Location', 'theme'),
        )
    );
    // add_theme_support('post-thumbnails');

    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array('comment-list', 'comment-form', 'search-form')
    );


}
add_action('after_setup_theme', 'gt_init');
add_theme_support('post-thumbnails');
// Project Post Type
function gt_custom_post_type()
{
    register_post_type(
        'project',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Projects',
                'add_new_item' => 'Add new Project',
                'edit_item' => 'Edit Project',
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'comments'
            )
        )
    );
}
add_action('init', 'gt_custom_post_type');


function get_first_category_slug()
{
    $categories = get_the_category();
    if (!empty($categories)) {
        return esc_attr($categories[0]->slug);
    }
    return '';
}


?>
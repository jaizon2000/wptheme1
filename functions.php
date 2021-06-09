<?php

// load stylesheets
function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 5.0, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1.0, 'all');
    wp_enqueue_style('main');
    
    // wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1.0, 'all');
    // wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css');

// load javascript
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 5.0, true);
    wp_enqueue_script('bootstrapjs');
}

add_action('wp_enqueue_scripts', 'load_js');



// Theme Options
add_theme_support('menus');



// Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',

    )

);

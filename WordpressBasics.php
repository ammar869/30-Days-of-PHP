<?php
// Two type of functions in php
// wordpress is the funcction heavy

// Basic syntax 

//1
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');


//------------------------------------------------------------------------------------
//<?php
/**
 * Theme setup function
 * 
 * This function only DEFINES what features the theme should support.
 * It does NOT run automatically.
 */
function mytheme_setup() {

    // Enable featured images (post thumbnails) for posts and pages
    add_theme_support('post-thumbnails');

    // Enable dynamic <title> tag support
    add_theme_support('title-tag');

    // Register a navigation menu location
    register_nav_menus([
        'primary_menu' => 'Primary Menu'
    ]);
}

/**
 * Hook the setup function to WordPress
 * 
 * after_setup_theme is fired when WordPress is ready
 * to register theme features safely.
 * 
 * Now WordPress controls WHEN this function runs.
 */
add_action('after_setup_theme', 'mytheme_setup');


/**
 * Enqueue theme styles and scripts
 * 
 * This function tells WordPress which CSS/JS files
 * the theme needs.
 */
function mytheme_enqueue_assets() {

    // Load main stylesheet (style.css)
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
}

/**
 * Hook into wp_enqueue_scripts
 * 
 * WordPress calls this hook when it is loading
 * frontend CSS and JS files.
 */
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');


/**
 * Modify excerpt length using a FILTER
 * 
 * Filters RECEIVE data, MODIFY it,
 * and MUST RETURN it.
 *
 * @param int $length Default excerpt length
 * @return int Modified excerpt length
 */
function mytheme_excerpt_length($length) {
    return 20;
}

/**
 * Hook the filter into WordPress
 * 
 * Before WordPress outputs an excerpt,
 * it passes the value through this filter.
 */
add_filter('excerpt_length', 'mytheme_excerpt_length');


/**
 * Modify excerpt "read more" text
 * 
 * Another FILTER example
 */
function mytheme_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'mytheme_excerpt_more');



//---------------practice

<?php

function mytheme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mytheme_setup');


function mytheme_load_assets() {
    wp_enqueue_style(
        'mytheme-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'mytheme_load_assets');


function mytheme_register_menu() {
    register_nav_menus([
        'main-menu' => 'Main Menu'
    ]);
}
add_action('after_setup_theme', 'mytheme_register_menu');


function mytheme_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'mytheme_excerpt_length');


function mytheme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'mytheme_excerpt_more');


function mytheme_footer_text() {
    echo "<p>Powered by My Custom Theme</p>";
}
add_action('wp_footer', 'mytheme_footer_text');


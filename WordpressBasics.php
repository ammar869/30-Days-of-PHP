<?php
// Two type of functions in php
// wordpress is the funcction heavy

// Basic syntax 

//1
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

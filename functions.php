<?php

/**
 * Theme Functions
 * 
 * @package LearnTheme
 */

function learntheme()
{
    wp_register_style('main-style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', array(), false, true);

    wp_enqueue_style('main-style');
    wp_enqueue_script('main-js');
}
add_action('wp_enqueue_scripts', 'learntheme');

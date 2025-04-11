<?php

/**
 * Theme Functions
 * 
 * @package LearnTheme
 */

function learntheme()
{
    //Register Style
    wp_register_style('main-style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', array(), false, 'all');

    //Register Script
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', array(), false, true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js', ['jquery'], false, true);

    //Enqueue Style
    wp_enqueue_style('main-style');
    wp_enqueue_style('bootstrap-css');

    //Enqueue Script
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'learntheme');

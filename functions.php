<?php

/**
 * Theme Functions
 * 
 * @package LearnTheme
 */

function theme_setup()
{
    add_theme_support('title-tag');

    add_theme_support('custom-logo', [
        'header-text'          => ['site-title', 'site-description'],
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'unlink-homepage-logo' => true,
    ]);

    add_theme_support('post-thumbnails');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('automatic-feed-links');

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ]);

    add_editor_style();
    add_theme_support('wp_block_styles');
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'theme_setup');


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

function Nav()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'Nav');

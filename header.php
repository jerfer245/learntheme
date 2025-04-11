<?php

/**
 * Header File
 * 
 * @package LearnTheme
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Learning Wordpress Theme</title> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header id="masthead" class="site-header" role="banner">
            <?php get_template_part('template-parts/header/nav') ?>
        </header>
        <div id="content" class="site-content">
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="upper-nav">
    <!-- Wczytanie menu stworzonego w pliku function pod nazwa 'header-menu' -->
    <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu'
        ));
    ?>
</nav>




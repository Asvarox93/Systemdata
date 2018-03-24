<?php


// Ładowanie dodatkowych plików do szablonu
function load_files(){
    wp_enqueue_script('systemdata-js', get_theme_file_uri('bundlejs.js'), NULL, '1.0.0', true);
   
    wp_enqueue_style('style', get_stylesheet_uri());
}

function load_features(){
    add_theme_support( 'title-tag' );
    register_nav_menu('header-menu', 'Górne Menu');
    register_nav_menu('footer-menu', 'Stopka Menu');
}

// Funkcja tworząca nowe sekcje
function load_post_types(){
    // Funkcja rejestrująca nową sekcje pod nazwą o firmie
    register_post_type('O firmie', array(
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-aside',
        'labels' => array(
            'name' => 'O firmie',
            'add_new' => 'Nowy Element',
            'add_new_item' => 'Dodaj Nowy Element',
            'edit_item' => 'Edytuj Element',
            'all_items' => 'Wszystkie Elementy',
            'singular_name' => 'Element',
        ),
    ));

    register_post_type('Slider', array(
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-video',
        'labels' => array(
            'name' => 'Slajder',
            'add_new' => 'Nowy Slajd',
            'add_new_item' => 'Dodaj Nowy Slajd',
            'edit_item' => 'Edytuj Slajd',
            'all_items' => 'Wszystkie Slajdy',
            'singular_name' => 'Slajd',
        ),
    ));

    //Usuwanie subtitle z post i page
    remove_post_type_support( 'post', 'subtitles' );
    remove_post_type_support( 'page', 'subtitles' );
    //Dodawanie subtitle do slidera
    add_post_type_support( 'slider', 'subtitles' );
}

// Wywoływanie funkcji
add_theme_support( 'post-thumbnails' ); 
add_action( 'wp_enqueue_scripts', 'load_files');
add_action( 'after_setup_theme','load_features');
add_action( 'init', 'load_post_types');

?>


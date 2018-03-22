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


// Wywoływanie funkcji
add_action( 'wp_enqueue_scripts', 'load_files');
add_action( 'after_setup_theme','load_features');

?>


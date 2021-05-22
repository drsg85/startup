<?php

add_action( 'wp_enqueue_scripts', 'adding_styles');
add_action( 'wp_footer', 'adding_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
    register_nav_menu( 'top', 'Меню в шапке' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );
    add_filter( 'excerpt_more', 'new_excerpt_more' );
    function new_excerpt_more($more) {
        global $post;
        return '<a href="'. get_permalink($post->ID) . '"Читать дальше...</a>';
    }
}

function adding_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'styles', get_template_directory_uri() . 'http://drsg85.beget.tech/wp-content/themes/startup/assets/styles.css' );
}

function adding_scripts() {
    wp_enqueue_script( 'scripts', get_template_directory_uri() . './assets/scripts.js' );
}
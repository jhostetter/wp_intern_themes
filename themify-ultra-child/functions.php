<?php

//Enqueues child theme stylesheet, loading first the parent theme stylesheet.
function themify_child_styles() {
wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'themify_child_styles' );


//Custom js script function
function flow_child_scripts() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/intern-custom.js' );
}
add_action( 'wp_enqueue_scripts', 'flow_child_scripts' );
<?php

//wp_enqueue_style( 'style', get_stylesheet_uri() );

//wp_enqueue_script( 'script', get_template_directory_uri() . '/js/foundation.min.js', array ( 'jquery' ), 2.2, true);

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
<?php

function boot5blank_bootstrap_scripts() {
    wp_enqueue_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', 'all');


    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'v5.0.0', 'all' );

    wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'thema-style', get_template_directory_uri() . '/assets/css/thema-style.css', array(), '1.0.0', 'all' );


wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), 'v5.0.0',true );

}
add_action( 'wp_enqueue_scripts', 'boot5blank_bootstrap_scripts' );
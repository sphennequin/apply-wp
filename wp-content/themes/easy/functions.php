<?php

function easy_supports() {
    # Add document title tag to html head
    add_theme_support( 'title-tag' );
}

function easy_register_assets() {
    #Add Bootstrap files
    wp_register_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap' );
}

add_action( 'after_setup_theme', 'easy_supports' );
add_action( 'wp_enqueue_scripts', 'easy_register_assets' );
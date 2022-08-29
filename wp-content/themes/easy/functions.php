<?php

function easy_supports() {
	# Add document title tag to html head
	add_theme_support( 'title-tag' );
}

function easy_register_assets() {
	# fonts 
	wp_register_style( 'Montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_register_style( 'Raleway', 'https://fonts.googleapis.com/css?family=Raleway:900' );
	wp_register_style( 'Monoton', 'https://fonts.googleapis.com/css?family=Monoton' );

	wp_enqueue_style( 'Montserrat' );
	wp_enqueue_style( 'Raleway' );
	wp_enqueue_style( 'Monoton' );

	# Styles
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_register_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.min.css' );
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	
	# Scripts
	//wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js', [], false, false );
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', [], false, false );
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', [], false, false );

	wp_register_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', [], false, true );
	wp_register_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', [], false, true );
	wp_register_script( 'countTo', get_template_directory_uri() . '/js/jquery.countTo.js', [], false, true );
	wp_register_script( 'particles', get_template_directory_uri() . '/js/particles.min.js', [], false, true );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', [], false, true );

	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'magnific-popup' );
	wp_enqueue_style( 'font-awesome' );
	wp_enqueue_style( 'style' );
	
	//wp_enqueue_script( 'bootstrap' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'plugins' );
	wp_enqueue_script( 'smooth-scroll' );
	wp_enqueue_script( 'countTo' );
	wp_enqueue_script( 'particles' );
	wp_enqueue_script( 'main' );
}

add_action( 'after_setup_theme', 'easy_supports' );
add_action( 'wp_enqueue_scripts', 'easy_register_assets' );
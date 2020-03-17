<?php
add_action( 'wp_enqueue_scripts', 'lilage_style' );
add_action( 'wp_enqueue_scripts', 'lilage_scripts' );


function lilage_style() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
}


function lilage_scripts() {

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ));
    wp_enqueue_script( 'alljs-script', get_template_directory_uri() . '/assets/js/all.js', array( 'jquery' ));
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ));
     wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'lilage_scripts');

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu'
	] );
} );

require_once('bs4navwalker.php');
<?php


add_action( 'wp_enqueue_scripts', 'timber_style' );
function timber_style() {
//     wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
// 	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
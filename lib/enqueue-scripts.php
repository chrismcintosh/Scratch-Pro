<?php
//* Enqueue Scripts and Styles
add_action( 'wp_enqueue_scripts', 'scratch_pro_enqueue_scripts_styles' );
function scratch_pro_enqueue_scripts_styles() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_script( 'scratch-bundle', get_stylesheet_directory_uri() . 'bundle.js', true );
}
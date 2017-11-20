<?php
//* Enqueue Scripts and Styles
add_action( 'wp_enqueue_scripts', 'scratch_pro_enqueue_scripts_styles' );
function scratch_pro_enqueue_scripts_styles() {
		wp_enqueue_style(  'font-awesome',   '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
		wp_enqueue_script( 'scratch-bundle', get_stylesheet_directory_uri() . '/bundle.js');

		// Disabled styles
		// wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION, true );
		// wp_enqueue_style( 'dashicons' );
}

// Custom scripting to move JavaScript from the head to the footer
function remove_head_scripts()
{
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action('wp_enqueue_scripts', 'remove_head_scripts');

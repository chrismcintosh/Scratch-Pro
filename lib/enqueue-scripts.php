<?php
//* Enqueue Scripts and Styles
add_action( 'wp_enqueue_scripts', 'scratch_pro_enqueue_scripts_styles' );
function scratch_pro_enqueue_scripts_styles() {
		wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');
		wp_enqueue_script('scratch-bundle', get_stylesheet_directory_uri() . '/bundle.js');
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

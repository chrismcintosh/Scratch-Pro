
<?php
/**
 * Front page for the Scratch Pro theme
 *
 * @package Scratch_Pro
 * @author  Chris Mcintosh
 * @license GPL-2.0+
 */

add_action( 'genesis_meta', 'scratch_pro_homepage_setup' );
function scratch_pro_homepage_setup() {
	// Full width layout.
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
	// Remove standard loop and replace with loop showing Posts, not Page content.
	remove_action( 'genesis_loop', 'genesis_do_loop' );
}

// Display Flexible Content
add_action( 'genesis_before_loop', 'scratch_pro_display_flexible_content' );

genesis();

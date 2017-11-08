<?php
// Define ACF component markup
function scratch_pro_display_flexible_content() {
		// loop through the rows of data
		while ( have_rows('flexible_content') ) : the_row();
				// List Components for ACF Page Builder
				if( get_row_layout() == 'hero' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/hero.php';
				} elseif( get_row_layout() == 'features' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/features.php';
				} elseif( get_row_layout() == 'portfolio' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/portfolio.php';
				} elseif( get_row_layout() == 'call_to_action' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/calltoaction.php';
				} elseif( get_row_layout() == 'plan' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/plan.php';
				} elseif( get_row_layout() == 'social_proof' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/social-proof.php';
				} elseif( get_row_layout() == 'testimonial' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/testimonial.php';
				} elseif( get_row_layout() == 'services' ) {
						include get_stylesheet_directory() . '/lib/acf/flexible-components/services.php';
				}
		endwhile;
}

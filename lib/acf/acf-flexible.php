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
				} elseif( get_row_layout() == 'events_list' ) {
					include get_stylesheet_directory() . '/lib/acf/flexible-components/event-list.php';
				} elseif( get_row_layout() == 'blog_posts' ) {
					include get_stylesheet_directory() . '/lib/acf/flexible-components/blog-posts.php';
				}
		endwhile;
}

// Is The Event Calendar installed?
include_once(ABSPATH . 'wp-admin/includes/plugin.php');
if (is_plugin_active('plugins/the-events-calendar/the-events-calendar.php')) {
		// Load event categories into select feild
		add_filter('acf/load_field/key=field_5a032f89c7a99', 'scratch_category_acf_select');
		function scratch_category_acf_select($field)
		{
		    $event_categories = get_terms(
		        array(
		            'taxonomy' => Tribe__Events__Main::TAXONOMY,
		            'hide_empty' => 1,
		        )
		    );

		    $field['choices'][''] = 'All Events';
		    foreach ($event_categories as $event_category) {
		        // Grab parent category and check if it exists
		        $event_category_parent = get_term($event_category->parent, Tribe__Events__Main::TAXONOMY);
		        if (empty($event_category_parent->name)) {
		            $event_category_name = $event_category->name;
		        } else {
		            $event_category_name = $event_category_parent->name.'/'.$event_category->name;
		        }
		        // Pass slug and name to ACF choices
		        $field['choices'][$event_category->slug] = $event_category_name;
		    }

		    return $field;
		}
}

// Load event categories into select feild
add_filter('acf/load_field/key=field_5a033cbdad7b5', 'blog_post_category_acf_select');
function blog_post_category_acf_select($field)
{
    $categories = get_terms(
        array(
            'taxonomy' => 'category',
            'hide_empty' => 1,
        )
    );

    $field['choices'][''] = 'All Posts';
    foreach ($categories as $category) {
        // Grab parent category and check if it exists
        $category_parent = get_term($category->parent, 'category');
        if (empty($category_parent->name)) {
            $category_slug = $category->slug;
            $category_name = $category->name;
        } else {
            $category_slug = $category_parent->slug.'/'.$category->slug;
            $category_name = $category_parent->name.'/'.$category->name;
        }
        // Pass slug and name to ACF choices
        $field['choices'][$category_slug] = $category_name;
    }

    return $field;
}

<?php

/**
* Template Name: Flexible Content Page
* Description: Used to display content from the Advanced Custom Fields Flexible
* Content field group.
*/

// Hook into the header and display Flexible Content
add_action( 'get_header', 'scratch_flexible_content_check' );

function scratch_flexible_content_check() {
}

genesis();

<?php

/**
* Template Name: Flexible Content Page
* Description: Used to display content from the Advanced Custom Fields Flexible
* Content field group.
*/

add_action( 'genesis_before_loop', 'scratch_pro_display_flexible_content' );

genesis();

<?php

// remove_action( 'genesis_entry_header', 'genesis_do_post_format_image', 4 );
// remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
// remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
// remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
// remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );

remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );
remove_action( 'genesis_entry_content', 'genesis_do_post_permalink', 14 );

remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

genesis();

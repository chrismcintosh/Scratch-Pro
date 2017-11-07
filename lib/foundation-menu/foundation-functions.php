<?php

remove_action( 'genesis_header', 'genesis_do_header' );
//* Remove the site title
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
//* Add site title to foundation header and nav
add_action('foundation_site_title', 'genesis_seo_site_title' );
//* Remove the site description
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );


/**
 * Rebuild Navigation Menus
 */
// Remove Genesis Nav Support
remove_theme_support( 'genesis-menus' );

// Register Foundation Navigation
add_action( 'init', 'register_foundation_menu' );
function register_foundation_menu() {
  register_nav_menu('primary-navigation',__( 'Primary Navigation' ));
}

/*********************
ADD FOUNDATION FEATURES TO WORDPRESS
*********************/
add_action('genesis_header', 'bolt_pro_do_primary_nav');
function bolt_pro_do_primary_nav() { ?>

     
          <div class="header__wrap">
               <div class="header-left">
                <?php do_action('foundation_site_title'); ?>
               </div>
               <div class="header-right">
                    <?php
                    wp_nav_menu(array(
                         'container'	=> false,
                         'menu' => 'Primary Navigation',
                         'menu_class'	=> 'primary-menu',
                         'theme_location' => 'primary-navigation',
                         'before' => '',
                         'after' => '',
                         'link_before' => '',
                         'link_after' => '',
                         'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                         'walker'  => new Foundation_Walker()
                    ));
                    ?>
                    <button type="button" class="canvas-toggle" data-toggle><i class="fa fa-bars" aria-hidden="true"></i> MENU</button>
               </div>
          </div>

<?php }


add_action('genesis_before', 'scratch_pro_off_canvas_open');
function scratch_pro_off_canvas_open() {
?>

	<div class="off-canvas">
		<div class="off-canvas-content">
    <?php
      wp_nav_menu(array(
            'container'	=> false,
            'menu' => 'Primary Navigation',
            'menu_class'	=> 'primary-menu',
            'theme_location' => 'primary-navigation',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker'  => new Foundation_Walker()
      ));
      ?>
      <button class="close-canvas"><i class="fa fa-times" aria-hidden="true"></i></button>
		</div>
	</div>

<?php
}

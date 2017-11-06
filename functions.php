<?php
/**
 * Scratch Pro
 *
 * This file adds functions to the Scratch Pro Theme.
 *
 * @package Scratch Pro
 * @author  Chris Mcintosh
 * @license GPL-2.0+
 * @link    http://www.mcintosh.io
 */
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );
//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Scratch Pro' );
define( 'CHILD_THEME_URL', 'http://www.mcintosh.io' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

//* Include Default Plugins Scripts and Styles
include get_stylesheet_directory() . '/lib/enqueue-scripts.php';
include get_stylesheet_directory() . '/lib/suggested-plugins/suggested-plugins.php';

//* Include Genesis Specific Modifications
include get_stylesheet_directory() . '/lib/genesis/theme-support.php';
include get_stylesheet_directory() . '/lib/genesis/inline-title-logo.php';
include get_stylesheet_directory() . '/lib/genesis/breadcrumbs.php';
include get_stylesheet_directory() . '/lib/genesis/blog-featured-image.php';
include get_stylesheet_directory() . '/lib/genesis/move-pagination.php';
include get_stylesheet_directory() . '/lib/genesis/move-primary-nav.php';

include get_stylesheet_directory() . '/lib/foundation-menu/index.php';
//* Include Advanced Custom Fields
include get_stylesheet_directory() . '/lib/acf/acf-options.php';

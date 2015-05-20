<?php
/*
Plugin Name:        Sagextras
Plugin URI:         http://dimensionsixdesign.com/se
Description:        Reenables some Bootstrap specific functions in the Sage theme.
Version:            1.0.0
Author:             Michael Romero
Author URI:         http://dimensionsixdesign.com/

License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/

function load_modules() {
  	if (current_theme_supports('se-navwalker')) {
  		require_once __DIR__ . '/modules/navwalker.php';
  	}

  	if (current_theme_supports('se-gallery')) {
  		require_once __DIR__ . '/modules/gallery.php';
  	}
}
add_action('after_setup_theme', 'load_modules');
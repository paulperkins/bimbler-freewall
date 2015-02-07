<?php 
    /*
    Plugin Name: Bimbler Freewall
    Plugin URI: http://www.bimblers.com
    Description: Plugin to enqueue the JavaScript and CSS scripts for Freewall.
    Author: Paul Perkins
    Version: 0.1
    Author URI: http://www.bimblers.com
    */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        die;
} // end if

require_once( plugin_dir_path( __FILE__ ) . 'class-bimbler-freewall.php' );

Bimbler_Freewall::get_instance();

<?php
/**
 * Bimbler Freewall
 *
 * @package   Bimbler_Freewall
 * @author    Paul Perkins <paul@paulperkins.net>
 * @license   GPL-2.0+
 * @link      http://www.paulperkins.net
 * @copyright 2014 Paul Perkins
 */


/**
 * Include dependencies necessary... (none at present)
 *
 */

/**
 * Bimbler Freewall
 *
 * @package Bimbler_Freewall
 * @author  Paul Perkins <paul@paulperkins.net>
 */
class Bimbler_Freewall {

        /*--------------------------------------------*
         * Constructor
         *--------------------------------------------*/

        /**
         * Instance of this class.
         *
         * @since    1.0.0
         *
         * @var      object
         */
        protected static $instance = null;

        /**
         * Return an instance of this class.
         *
         * @since     1.0.0
         *
         * @return    object    A single instance of this class.
         */
        public static function get_instance() {

                // If the single instance hasn't been set, set it now.
                if ( null == self::$instance ) {
                        self::$instance = new self;
                } // end if

                return self::$instance;

        } // end get_instance

        /**
         * Initializes the plugin by setting localization, admin styles, and content filters.
         */
        private function __construct() {

        	// Set up the AJAX enqueing.
        	add_action ('wp_enqueue_scripts', array ($this, 'enqueue_freewall_scripts'));
        	        	         	
		} // End constructor.
	
	/**
	 * Loads the required JavaScript files for Freewall.
	 * 
	 * Note: we don't load the CSS, as this causes collisions with the existing stylesheets.
	 *
	 */
	function enqueue_freewall_scripts() {

		// Load the freewall JS files.
		wp_register_script ('bimbler-freewall-script', plugin_dir_url( __FILE__ ) . 'js/freewall.js', array( 'jquery' ) );
		wp_register_script ('bimbler-freewall-index-script', plugin_dir_url( __FILE__ ) . 'js/freewall-index.js', array( 'jquery' ) );
		
		// Just in case.
		wp_enqueue_script ('jquery');

		wp_enqueue_script( 'bimbler-freewall-script');
		wp_enqueue_script( 'bimbler-freewall-index-script');
	}
	
		
} // End class

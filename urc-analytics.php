<?php
/**
 * Plugin Name: URC Analytics
 * Description: Contains Google Analytics, Google Tag Manager, Twitter Tag Code and Amazon Market Place
 * Version: 4.0
 * Author: Jake Almeda
 * Author URI: http://smarterwebpackages.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// HEADER
add_shortcode( 'setup-header-scripts', 'setup_header_scripts_function' );
function setup_header_scripts_function() {

	require_once( 'live_header_scripts.php' );

}

// FOOTER
add_shortcode( 'setup-footer-scripts', 'setup_footer_scripts_function' );
function setup_footer_scripts_function() {

	require_once( 'live_footer_scripts.php' );

}
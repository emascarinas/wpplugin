<?php
/*
Plugin Name: Wag Header
Plugin URI: http://wordpress.org/
Description: Wag plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function wag_shortcodes_header()
{
	function wag_shortcode_header($atts = [], $content = null)
	{
		ob_start();
		require_once ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('wag-header', 'wag_shortcode_header');
}

function load_scripts_header() {
	wp_enqueue_style( 'style-name-header', plugins_url( 'main.css',    __FILE__ ) );
	// wp_enqueue_script( 'script-name', plugins_url( 'main.js', __FILE__ ), null, false, true);
}

add_action('init', 'wag_shortcodes_header');
add_action('wp_enqueue_scripts', 'load_scripts_header');

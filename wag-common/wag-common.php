<?php
/*
Plugin Name: Wag Common
Plugin URI: http://wordpress.org/
Description: Wag plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function wag_shortcodes_wcommon()
{
	function wag_shortcode_wcommon($atts = [], $content = null)
	{
		ob_start();
		require_once ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('wag-wcommon', 'wag_shortcode_wcommon');
}

function load_scripts_wcommon() {
	// wp_enqueue_style( 'style-name-wcommon', plugins_url( 'main.css',    __FILE__ ) );
	// wp_enqueue_script( 'script-name', plugins_url( 'main.js', __FILE__ ), null, false, true);

	wp_register_script( 'font-awesome-script', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js', null, false, true );
	wp_enqueue_script('font-awesome-script');
	wp_enqueue_style( 'font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
}

add_action('init', 'wag_shortcodes_wcommon');
add_action('wp_enqueue_scripts', 'load_scripts_wcommon');

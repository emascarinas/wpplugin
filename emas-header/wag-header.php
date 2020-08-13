<?php
/*
Plugin Name: Emas Header
Plugin URI: http://wordpress.org/
Description: Emas plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function emas_shortcodes_header()
{
	function emas_shortcode_header($atts = [], $content = null)
	{
		ob_start();
		require_once ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('emas-header', 'emas_shortcode_header');
}

function load_scripts_header() {
	wp_enqueue_style( 'style-header', plugins_url( 'main.css',    __FILE__ ) );
	// wp_enqueue_script( 'script', plugins_url( 'main.js', __FILE__ ), null, false, true);
}

add_action('init', 'emas_shortcodes_header');
add_action('wp_enqueue_scripts', 'load_scripts_header');

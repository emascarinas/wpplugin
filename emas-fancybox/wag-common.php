<?php
/*
Plugin Name: Emas FancyBox
Plugin URI: http://wordpress.org/
Description: Emas plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function emas_shortcodes_wfancybox()
{
	function emas_shortcode_wfancybox($atts = [], $content = null)
	{
		ob_start();
		require_once ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('emas-wfancybox', 'emas_shortcode_wfancybox');
}

function load_scripts_wfancybox() {
	// wp_enqueue_style( 'style-wfancybox', plugins_url( 'main.css',    __FILE__ ) );
	// wp_enqueue_script( 'script', plugins_url( 'main.js', __FILE__ ), null, false, true);

	wp_register_script( 'fancybox-script', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', null, false, true );
	wp_enqueue_script('fancybox-script');
	wp_enqueue_style( 'fancybox-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');
}

// add_action('init', 'emas_shortcodes_wfancybox');
add_action('wp_enqueue_scripts', 'load_scripts_wfancybox');
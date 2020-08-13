<?php
/*
Plugin Name: Emas Gallery
Plugin URI: http://wordpress.org/
Description: Emas plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function emas_shortcodes_wgallery()
{
	function emas_shortcode_wgallery($atts = [], $content = null)
	{
		$atts = shortcode_atts( array( 'repeater' => 'gallery_items' ), $atts );
		ob_start();
		require ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('emas-gallery-2', 'emas_shortcode_wgallery');
}

function load_scripts_wgallery() {

	wp_register_script( 'fancy-script', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', null, false, true );
	wp_enqueue_script('fancy-script');
	wp_enqueue_style( 'fancy-css', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');


	wp_enqueue_style( 'style-min-framework', plugins_url( 'min-framework.min.css',    __FILE__ ) );
	wp_enqueue_style( 'style-wgallery', plugins_url( 'main.css',    __FILE__ ) );
	wp_enqueue_script( 'script-wgallery', plugins_url( 'main.js', __FILE__ ), null, false, true);
	wp_enqueue_script( 'script-dynamic-ratio', plugins_url( 'DynamicImagesByRatio.js', __FILE__ ), null, false, true);
}

add_action('init', 'emas_shortcodes_wgallery');
add_action('wp_enqueue_scripts', 'load_scripts_wgallery');

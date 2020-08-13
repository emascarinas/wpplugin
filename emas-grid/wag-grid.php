<?php
/*
Plugin Name: Emas Grid
Plugin URI: http://wordpress.org/
Description: Emas plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function emas_shortcodes_wgrid()
{
	function emas_shortcode_wgrid($atts = [], $content = null)
	{
		$atts = shortcode_atts( array( 'repeater' => 'grid_items' ), $atts );
		ob_start();
		require ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('emas-grid-2', 'emas_shortcode_wgrid');
}

function load_scripts_wgrid() {
	// wp_register_script( 'Scroll_Magic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), false, true );
	// wp_enqueue_script('Scroll_Magic');
	wp_enqueue_style( 'style-wgrid', plugins_url( 'main.css',    __FILE__ ) );
	wp_enqueue_script( 'script-wgrid', plugins_url( 'main.js', __FILE__ ), null, false, true);
}

add_action('init', 'emas_shortcodes_wgrid');
add_action('wp_enqueue_scripts', 'load_scripts_wgrid');

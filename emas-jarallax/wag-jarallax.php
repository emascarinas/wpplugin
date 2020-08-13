<?php
/*
Plugin Name: Emas Jarallax
Plugin URI: http://wordpress.org/
Description: Emas plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function emas_shortcodes_wjarallax()
{
	function emas_shortcode_wjarallax($atts = [], $content = null)
	{
		$atts = shortcode_atts( array( 'image' => 'image' ), $atts );
		ob_start();
		require ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('emas-jarallax', 'emas_shortcode_wjarallax');
}

function load_scripts_wjarallax() {
	wp_register_script( 'Jarallax', 'https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.11.1/jarallax.min.js', array('jquery'), false, true );
	wp_enqueue_script('Jarallax');
	wp_enqueue_style( 'style-wjarallax', plugins_url( 'main.css',    __FILE__ ) );
	wp_enqueue_script( 'script-wjarallax', plugins_url( 'main.js', __FILE__ ), null, false, true);
}

add_action('init', 'emas_shortcodes_wjarallax');
add_action('wp_enqueue_scripts', 'load_scripts_wjarallax');

<?php
/*
Plugin Name: Emas Slick
Plugin URI: http://wordpress.org/
Description: Emas plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function emas_shortcodes_wslick()
{
	function emas_shortcode_wslick($atts = [], $content = null)
	{
		$atts = shortcode_atts( array( 'repeater' => 'slideRepeater' ), $atts );
		ob_start();
		require ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('emas-slick', 'emas_shortcode_wslick');
}

function load_scripts_wslick() {
	// wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-1.12.4.min.js', null, null, false );
	// wp_enqueue_script('jQuery');
	wp_register_script( 'Slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true );
	wp_enqueue_script('Slick');
	wp_enqueue_style( 'style-wslick', plugins_url( 'main.css',    __FILE__ ) );
	wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

	wp_enqueue_script( 'script-wslick', plugins_url( 'main.js', __FILE__ ), null, false, true);



}

add_action('init', 'emas_shortcodes_wslick');
add_action('wp_enqueue_scripts', 'load_scripts_wslick');




// function createACF(){

// 	if( function_exists('acf_add_local_field_group') ):
// 		acf_add_local_field_group(array(
// 			'key' => 'group_1',
// 			'title' => 'My Group',
// 			'fields' => array (
// 				array (
// 					'key' => 'field_1',
// 					'label' => 'Sub Title',
// 					'name' => 'sub_title',
// 					'type' => 'text',
// 				)
// 			),
// 			'location' => array (
// 				array (
// 					array (
// 						'param' => 'post_type',
// 						'operator' => '==',
// 						'value' => 'post',
// 					),
// 				),
// 			),
// 		));

// 	endif;	
// }
// add_action('acf/init', 'createACF');
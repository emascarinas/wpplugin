<?php
/*
Plugin Name: Wag Slick
Plugin URI: http://wordpress.org/
Description: Wag plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function wag_shortcodes_init()
{
	function wag_shortcode($atts = [], $content = null)
	{
		ob_start();
		require_once ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('wag-slick', 'wag_shortcode');
}

function my_load_scripts() {
	// wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-1.12.4.min.js', null, null, false );
	// wp_enqueue_script('jQuery');
	wp_register_script( 'Slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true );
	wp_enqueue_script('Slick');
	wp_enqueue_style( 'style-name', plugins_url( 'main.css',    __FILE__ ) );
	wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

	wp_enqueue_script( 'script-name', plugins_url( 'main.js', __FILE__ ), null, false, true);



}

add_action('init', 'wag_shortcodes_init');
add_action('wp_enqueue_scripts', 'my_load_scripts');




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
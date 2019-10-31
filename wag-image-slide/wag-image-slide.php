<?php
/*
Plugin Name: Wag Image Slide
Plugin URI: http://wordpress.org/
Description: Wag plugins.
Author: Emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function wag_shortcodes_init()
{
	function wag_shortcode($atts = [], $content = null)
	{
        // do something to $content
		echo "<div>emas</div>";

        // always return
		return $content;
	}
	add_shortcode('wag-image-slide', 'wag_shortcode');
}

function my_load_scripts($hook) {
	wp_enqueue_style( 'style-name', plugins_url( 'main.css',    __FILE__ ) );
    wp_enqueue_script( 'script-name', plugins_url( 'main.js', __FILE__ ) );
 
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
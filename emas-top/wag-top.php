<?php
/*
Plugin Name: Emas Top
Plugin URI: http://wordpress.org/
Description: Emas plugins
Author: emas
Version: 1.0
Author URI: http://wordpress.org/
*/



function emas_shortcodes_wtop()
{
	function emas_shortcode_wtop($atts = [], $content = null)
	{
		ob_start();
		require_once ( plugin_dir_path(__FILE__) . '/view.php');
		$content = ob_get_clean();
		return $content;	
	}

	add_shortcode('emas-wtop', 'emas_shortcode_wtop');
}

function load_scripts_wtop() {
	// wp_register_script( 'Scroll_Magic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), false, true );
	// wp_enqueue_script('Scroll_Magic');
	wp_enqueue_style( 'style-wtop', plugins_url( 'main.css',    __FILE__ ) );
	wp_enqueue_script( 'script-wtop', plugins_url( 'main.js', __FILE__ ), null, false, true);
}
function footer_function() {
    echo '<a href="#top" id="toTop" class="smooth-transition"><i class="fas fa-angle-up absolute-center"></i></a>';
}
add_action( 'wp_footer', 'footer_function' );

function head_function() {
    echo '<span id="top"></span>';
}
add_action( 'wp_head', 'head_function' );

add_action('init', 'emas_shortcodes_wtop');
add_action('wp_enqueue_scripts', 'load_scripts_wtop');

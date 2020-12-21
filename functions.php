<?php

require_once(__DIR__ .'/functions-shared.php');

add_action( 'wp_enqueue_scripts', 'telegram_scripts' );

if ( ! isset( $content_width ) ) {
	$content_width = 710;
}

function telegram_scripts() {

    wp_register_script('sticky-kit', get_template_directory_uri() . '/assets/js/sticky_kit.min.js', array('jquery'), null, true);
    wp_register_script('colour-brightness', get_template_directory_uri() . '/assets/js/jquery.colourbrightness.min.js', array('jquery'), null, true);

    wp_register_script('telegram-script', get_template_directory_uri() . '/assets/js/functions.js', array('jquery', 'slick', 'colour-brightness', 'sticky-kit'), '95138.98', true);
	wp_register_style('telegram-style', get_stylesheet_uri(), array('slick', 'slick-theme'), '95070.24');
	if ( 'native' === get_post_type() ) {
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'slick');
		wp_enqueue_script( 'wow');
		wp_enqueue_style('native-animate');
		if (get_post_meta( get_the_ID(), 'include_styles', true ) ) {
			wp_enqueue_style( 'telegram-style' );
			wp_enqueue_script( 'telegram-script' );
		}
	} else {
		wp_enqueue_style( 'telegram-style' );
		wp_enqueue_script( 'telegram-script' );
	}

}




<?php
add_action( 'wp_enqueue_scripts', 'setSources' );
function setSources(){
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', '');
    wp_enqueue_style('slick', TEMPLATE_DIR_URI.'/assets/css/slick.css', '', VERSION);
    wp_enqueue_style('slick-theme', TEMPLATE_DIR_URI.'/assets/css/slick-theme.css', '', VERSION);
	wp_enqueue_style('main', TEMPLATE_DIR_URI.'/assets/css/main.css', '', VERSION);
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', TEMPLATE_DIR_URI.'/assets/js/jQuery360.js', false, VERSION, true );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script('slick', TEMPLATE_DIR_URI.'/assets/js/slick.js',['jquery'], VERSION, true);
	wp_enqueue_script('main', TEMPLATE_DIR_URI.'/assets/js/main.js',['jquery', 'slick'], VERSION, true);
}
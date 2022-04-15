<?php
define('TEMPLATE_DIR', get_template_directory());
define('TEMPLATE_DIR_URI', get_template_directory_uri());
define('CURRENT_PAGE', home_url() . $_SERVER['REQUEST_URI']);
define('FRONT_PAGE_ID', get_option('page_on_front'));
define('BLOG_PAGE_ID', get_option('page_for_posts'));

define( 'DISALLOW_FILE_EDIT', true );
//define('COOKIES_LIFE', 3600);

if ( ! defined( 'VERSION' ) ) {
    define( 'VERSION', time() );
}

if(is_user_logged_in()){
	function removeAdminBarTopped() {
		$css = "html {margin-top: 0!important;}";
		wp_add_inline_style( 'custom-style', $css );
	}
	add_action( 'wp_enqueue_scripts', 'removeAdminBarTopped' );
}
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Меню в хедері',
		'footer_menu' => 'Меню в футері'
	] );
} );
require TEMPLATE_DIR.'/backend/disableds/ss.php';
require TEMPLATE_DIR.'/backend/cpt.php';

require TEMPLATE_DIR.'/backend/assets.php';

require TEMPLATE_DIR.'/backend/acf-options.php';

require TEMPLATE_DIR.'/backend/disableds/downGutenberg.php';
require TEMPLATE_DIR.'/backend/disableds/downComments.php';

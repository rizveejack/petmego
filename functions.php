<?php
require_once "inc/tmg/tmg-active.php";
require_once "inc/filter_block.php";
// filter sub block
function my_theme_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'fun',
        get_template_directory_uri() . '/js/fun.js', // Adjust the path to where your JS file is located
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( get_template_directory() . '/js/fun.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'my_theme_enqueue_block_editor_assets' );
// end filter sub block
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'caption', 'style', 'script' ) );


function custom_theme_assets() {
    
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'ajaxcalls', get_template_directory_uri() . '/js/ajax-calls.js', array('jquery'), '1.0', true);
    wp_localize_script( 'ajaxcalls', 'ajax_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'ajaxnonce' => wp_create_nonce( 'ajax_post_validation' )
    ) );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );





function handle_request() {
	if ( !isset($_POST['ajaxnonce']) || !wp_verify_nonce( $_POST['ajaxnonce'], 'ajax_post_validation' ) ) {
        wp_send_json_error( 'Nonce verification failed', 403 );
    }
	$post_id = (int)$_POST['post_id'];
	$clap = (int)get_post_meta( $post_id, '_clap', true );
	$clap++;
	update_post_meta( $post_id, '_clap', $clap );
	wp_send_json_success( $clap );
	wp_die();
}


add_action( 'wp_ajax_handle_request', 'handle_request' );
add_action( 'wp_ajax_nopriv_handle_request', 'handle_request' ); 


register_post_meta( 'my_custom_post_type', '_clap', array(
    'type' => 'integer',
    'single' => true,
    'show_in_rest' => true,
));


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary' => __( 'Primary Menu', 'text_domain' ),
	    	'footer'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
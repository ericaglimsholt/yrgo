<?php

// Register education custom post type.
require get_template_directory().'/post-types/educations.php';

// Register yrgo custom post type.
require get_template_directory().'/post-types/yrgo.php';

// Register studentwebben custom post type.
require get_template_directory().'/post-types/studentWebben.php';

// Register news custom post type.
require get_template_directory().'/post-types/news.php';


	require_once('inc/acf/setup.php');
	function addMyStyle() {
    wp_enqueue_style( 'yrgo', get_template_directory_uri() . 'yrgo.css', '1', false, 'all' );
		wp_enqueue_style( 'yrgo', get_stylesheet_uri() );
}
add_action('wp_head', 'addMyStyle');

function custom_style_sheet() {
wp_enqueue_style( 'custom-styling', get_stylesheet_directory_uri() . '/yrgo.css' );
wp_enqueue_style( 'studentWeb-styling', get_stylesheet_directory_uri() . '/studentWeb.css' );

}
add_action('wp_enqueue_scripts', 'custom_style_sheet');


// hide menue
function remove_menus(){
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_menu_page( 'edit.php' );    //Posts
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

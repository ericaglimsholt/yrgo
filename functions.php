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
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/sass/style.css', '1', false, 'all' );
}
add_action('wp_head', 'addMyStyle');


// hide menue
function remove_menus(){
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_menu_page( 'edit.php' );    //Posts
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

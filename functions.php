<?php

// Register education custom post type.
require get_template_directory().'/post-types/educations.php';

// Register yrgo custom post type.
require get_template_directory().'/post-types/yrgo.php';

// Register studentwebben custom post type.
require get_template_directory().'/post-types/studentWebben.php';

// Register news custom post type.
require get_template_directory().'/post-types/news.php';

// Register Activities custom post type.
require get_template_directory().'/post-types/activities.php';


	require_once('inc/acf/setup.php');
	function addMyStyle() {
    wp_enqueue_style( 'yrgo', get_template_directory_uri() . 'yrgo.css', '1', false, 'all' );
		wp_enqueue_style( 'yrgo', get_stylesheet_uri() );
}
add_action('wp_head', 'addMyStyle');

function custom_style_sheet() {
wp_enqueue_style( 'custom-styling', get_stylesheet_directory_uri() . '/yrgo.css' );
wp_enqueue_style( 'studentWeb-styling', get_stylesheet_directory_uri() . '/studentWeb.css' );
wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'custom_style_sheet');


// hide menue
function remove_menus(){
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_menu_page( 'edit.php' );    //Posts
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );

// add meny in apperance
function register_my_menus() {
  register_nav_menus(
    array(
      'yrgo' => __( 'yrgo' ),
      'studentWeb' => __( 'studentWebben' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


add_filter( 'get_pages',  'add_my_cpt' );

function add_my_cpt( $pages )
{
     $my_cpt_pages = new WP_Query( array( 'post_type' => 'yrgo' ) );
     if ( $my_cpt_pages->post_count > 0 )
     {
         $pages = array_merge( $pages, $my_cpt_pages->posts );
     }
     return $pages;
}

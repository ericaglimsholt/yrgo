<?php

// Register education custom post type.
require get_template_directory().'/post-types/educations.php';

//Only admin can see this menues
// global $current_user;
//   if ($current_user->user_login=='admin'){
// 		// Register yrgo custom post type.
// 		require get_template_directory().'/post-types/yrgo.php';
// 		// Register studentwebben custom post type.
// 		require get_template_directory().'/post-types/studentWebben.php';
//
//   }
  // Register yrgo custom post type.
  require get_template_directory().'/post-types/yrgo.php';
  // Register studentwebben custom post type.
  require get_template_directory().'/post-types/studentWebben.php';


// Register news custom post type.
require get_template_directory().'/post-types/news.php';

// Register Activities custom post type.
require get_template_directory().'/post-types/activities.php';

// Register Employee custom post type.
require get_template_directory().'/post-types/employee.php';

// Register FAQ custom post type.
require get_template_directory().'/post-types/faq.php';

require_once('inc/acf/setup.php');

// function addMyStyle() {
//     wp_enqueue_style( 'yrgo', get_template_directory_uri() . 'yrgo.css', '1', false, 'all' );
// 		wp_enqueue_style( 'yrgo', get_stylesheet_uri() );
// }
// add_action('wp_head', 'addMyStyle');

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
      'studentwebben' => __( 'studentwebben' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Get to add static page to post type
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

 // removes classes from li in wp_nav_menu
add_filter( 'nav_menu_css_class', 'menu_item_classes', 10, 4 );
function menu_item_classes( $classes, $item, $args, $depth ) {
    unset($classes);
    $classes[] = 'nav-item';
    return $classes;
}

// adds class to a tag in wp_nav_menu
add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "nav-item";
        return $atts;
}, 100, 1 );


add_action('admin_init', 'reg_tax');

function reg_tax() {
		register_taxonomy_for_object_type('category', 'page');
		add_post_type_support('page', 'category');
}

// Sets features image to employee post type
add_theme_support( 'post-thumbnails', array( 'post','employee' ) );

/**
 * enqueue scripts and styles
 *
 */

function nr_load_scripts() {

	wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCBKni9WfIvXyMwDe_a-KT6GBVQsHHnr28',null,null,true);  
	wp_enqueue_script('googlemaps');

}
add_action( 'wp_enqueue_scripts', 'nr_load_scripts' );

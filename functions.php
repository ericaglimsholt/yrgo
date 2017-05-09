<?php
	require_once('inc/acf/setup.php');
	function addMyStyle() {
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/sass/style.css', '1', false, 'all' );
}
add_action('wp_head', 'addMyStyle');

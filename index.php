<?php
/**
 * The main template file
 */

get_header();


/*
 * 'flex_example' refer to the *ID* of the Flexible Content field.
 * All layouts in the given field will have their init.php file included.
 */


ACFListener::fields('yrgo');
ACFListener::fields('studentweb');
ACFListener::fields('n-news');
ACFListener::fields('education');
ACFListener::fields('faq');





/*

	TODO

*/
get_footer(); ?>

<?php
require_once('Startpage.php');

$startpage = new Startpage;
$startpage->start = get_sub_field('image');
$startpage->title = get_sub_field('title');
$startpage->title = get_sub_field('fields');
$startpage->title = get_sub_field('name');
$startpage->printHTMl();

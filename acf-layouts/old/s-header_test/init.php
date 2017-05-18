<?php
require_once('Header.php');

$header = new Header;
$header->title = get_sub_field('title');
$header->semesterPeriod = get_sub_field('title_semester');
$header->image = get_sub_field('image');
$header->printHTMl();

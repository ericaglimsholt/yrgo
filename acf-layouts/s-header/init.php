<?php
require_once('Header.php');

$header = new Header;
$header->logo = get_sub_field('logo');
$header->subTitle = get_sub_field('sub-title');
$header->backgroundImg = get_sub_field('background-img');
$header->printHTMl();

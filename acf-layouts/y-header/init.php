<?php
require_once('YHeader.php');

$header = new YHeader;
$header->image = get_sub_field('header_img');
$header->title = get_sub_field('header_title');
$header->start = get_sub_field('header_start');
$header->area = get_sub_field('area');
$header->printHTML();

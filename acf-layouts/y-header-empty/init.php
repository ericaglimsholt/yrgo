<?php
require_once('Headerempty.php');

$header = new Headerempty;
$header->image = get_sub_field('header_img_empty');
$header->title = get_sub_field('header_title_empty');
$header->description = get_sub_field('header_description_empty');

$header->printHTML();

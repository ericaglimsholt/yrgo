<?php
require_once('Links.php');

$links = new Links;
$links->background = get_sub_field('background');
$links->headline = get_sub_field('headline');
$links->opacityColor = get_sub_field('opacity-color');
$links->printHTMl();

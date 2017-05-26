<?php
require_once('YLinks.php');

$links = new YLinks;
$links->image = get_sub_field('image_single');
$links->education = get_sub_field('choose_education_single');
$links->link = get_sub_field('link_education_single');

$links->printHTML();

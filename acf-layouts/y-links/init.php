<?php
require_once('YLinks.php');

$links = new YLinks;
$links->image = get_sub_field('image');
$links->education = get_sub_field('choose_education');

$links->printHTML();

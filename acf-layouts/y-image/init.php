<?php
require_once('YImage.php');

$image = new YImage;
$image->image = get_sub_field('image');
$image->logotype = get_sub_field('logotype');

$image->printHTML();

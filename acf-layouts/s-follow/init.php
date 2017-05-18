<?php
require_once('Follow.php');

$follow = new Follow;
$follow->backgroundImg = get_sub_field('background');
$follow->printHTMl();

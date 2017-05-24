<?php
require_once('Reserve.php');

$reserve = new Reserve;
$reserve->title = get_sub_field('title');
$reserve->content = get_sub_field('content');
$reserve->printHTMl();

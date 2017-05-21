<?php
require_once('Activities.php');

$activities = new Activities;
$activities->headline = get_sub_field('headline');
$activities->img = get_sub_field('img');
$activities->content = get_sub_field('content');
$activities->printHTMl();

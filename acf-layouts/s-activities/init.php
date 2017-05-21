<?php
require_once('Activities.php');

$activities = new Activities;
$activities->activitiesHeadlines = get_sub_field('activitiesHeadlines');
$activities->backgroundImg = get_sub_field('background');
$activities->printHTMl();

<?php
require_once('News.php');

$news = new News;
$news->backgroundImg = get_sub_field('background');
$news->printHTMl();

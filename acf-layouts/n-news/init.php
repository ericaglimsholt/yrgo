<?php
require_once('News.php');

$news = new News;
$news->headline = get_sub_field('headline');
$news->content = get_sub_field('content');
$news->printHTMl();

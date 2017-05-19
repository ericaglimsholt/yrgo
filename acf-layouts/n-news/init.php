<?php
require_once('News.php');

$news = new News;
$news->headline = get_sub_field('headline');
$news->img = get_sub_field('img');
$news->content = get_sub_field('content');
$news->printHTMl();

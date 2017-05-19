<?php
require_once('News.php');

$news = new News;
$news->newsHeadlines = get_sub_field('newsHeadlines');
$news->backgroundImg = get_sub_field('background');
$news->printHTMl();

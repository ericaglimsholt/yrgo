<?php
require_once('News.php');

$news = new News;
$news->title_focus = get_sub_field('title_news_focus');
$news->title = get_sub_field('title_news');

$news->printHTML();

<?php
require_once('DynamicHeader.php');

$dynamicHeader = new DynamicHeader;
$dynamicHeader->title = get_sub_field('title');
$dynamicHeader->colorTitle = get_sub_field('colorTitle');
$dynamicHeader->newsHeadlines = get_sub_field('newsHeadlines');
$dynamicHeader->backgroundImg = get_sub_field('background');
$dynamicHeader->category = get_sub_field('category');
$dynamicHeader->printHTMl();

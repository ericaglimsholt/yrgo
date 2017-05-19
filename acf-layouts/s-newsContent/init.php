<?php
require_once('NewsContent.php');

$newsContent = new NewsContent;
$newsContent->newsContent = get_sub_field('newsContent');
$newsContent->printHTMl();

<?php
require_once('StudentTitle.php');

$studenttitle = new StudentTitle;
$studenttitle->studenttitle = get_sub_field('title');
$startpage->printHTMl();

<?php
require_once('Exams.php');

$exams = new Exams;
$exams->title = get_sub_field('title');
$exams->content = get_sub_field('content');

$exams->printHTMl();

<?php
require_once('ActivitiesContent.php');

$activitiesContent = new ActivitiesContent;
$activitiesContent->activitiesContent = get_sub_field('activitiesContent');
$activitiesContent->printHTMl();

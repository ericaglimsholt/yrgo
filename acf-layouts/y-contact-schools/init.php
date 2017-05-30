<?php
require_once('Contactschools.php');

$contactschools = new Contactschools;
$contactschools->image = get_sub_field('schools_image');
$contactschools->areas = get_sub_field('schools_areas');
$contactschools->logotype = get_sub_field('schools_logotype');
$contactschools->address = get_sub_field('schools_address');
$contactschools->reception = get_sub_field('schools_reception');
$contactschools->maps = get_sub_field('schools_googlemaps');
$contactschools->printHTML();

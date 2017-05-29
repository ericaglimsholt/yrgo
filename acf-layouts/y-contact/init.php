<?php
require_once('Contact.php');

$contact = new Contact;
$contact->title = get_sub_field('title_contact');
$contact->contactform = get_sub_field('contact_form');
$contact->logotype = get_sub_field('logotype_contact');
$contact->contact = get_sub_field('contact_info');
$contact->printHTML();

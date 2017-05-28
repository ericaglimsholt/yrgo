<?php

require_once('Faq.php');

$faq = new Faq;
$faq->question = get_sub_field('questions_relationship');

$faq->printHTML();

 ?>

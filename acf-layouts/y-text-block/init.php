<?php
require_once('Textblock.php');

$textblock = new Textblock;
$textblock->title = get_sub_field('title_text');
$textblock->preamble = get_sub_field('preamble_text');
$textblock->description = get_sub_field('description_text');

$textblock->printHTML();

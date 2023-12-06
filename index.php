<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');
$abonements = get_abonements($con);
$trainers = get_trainers($con);
$trains = get_trains($con);



$page_content = include_template('main.php',['abonements' => $abonements, 'trainers' => $trainers,'trains' => $trains]);
$layout = include_template('layout.php', ['title' => 'OLIMPIA','content' => $page_content]);
print $layout;
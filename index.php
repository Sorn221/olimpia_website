<?php
require_once('helpers.php');
require_once('init.php');

$page_content = include_template('main.php');
$layout = include_template('layout.php', ['title' => 'OLIMPIA', 'content' => $page_content]);
print $layout;
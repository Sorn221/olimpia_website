<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

$page_content = include_template('login.php');
$layout = include_template('layout.php', ['title' => 'Авторизация', 'content' => $page_content]);
print $layout;
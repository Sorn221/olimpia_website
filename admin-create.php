<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

$page_content = include_template('admin-create-form.php');
$layout = include_template('layout.php', ['title' => 'Создание админа', 'content' => $page_content]);
print $layout;
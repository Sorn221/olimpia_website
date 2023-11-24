<?php
require_once('helpers.php');
require_once('functions.php');

$page_content = include_template('user-profile.php');
$layout = include_template('layout.php', ['title' => 'Профиль', 'content' => $page_content]);
print $layout;
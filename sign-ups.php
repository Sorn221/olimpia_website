<?php
require_once('helpers.php');
require_once('functions.php');

const MAX_NAME = 30;
const MAX_EMAIL = 300;
const MAX_CONTACT = 300;

$page_content = include_template('sign-up.php');
$layout = include_template('layout.php', ['title' => 'Регистрация', 'content' => $page_content]);
print $layout;
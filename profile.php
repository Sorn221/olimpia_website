<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

$abonements = get_сlient_abonement($con, 1);
$page_content = include_template('user-profile.php', ['user_name' => 'Timofey', 'user_contact_message' => '89221889024', 'abonements' => 'abonements']);
$layout = include_template('layout.php', ['title' => 'Профиль', 'content' => $page_content]);
print $layout;

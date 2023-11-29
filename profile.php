<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

$abonements = get_сlient_abonement($con, $_SESSION['user_id']);
$trainers = get_сlient_trainers($con, $_SESSION['user_id']);
$contact = get_client_by_id($con, $_SESSION['user_id']);
$page_content = include_template('user-profile.php', ['user_name' => $_SESSION['username'], 'user_contact_message' => $contact,'abonements' => $abonements, 'trainers' => $trainers]);
$layout = include_template('layout.php', ['title' => 'Профиль', 'content' => $page_content]);

print $layout;

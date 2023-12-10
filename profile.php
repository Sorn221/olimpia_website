<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');


//если авторизировался клиент
if ($_SESSION['type'] === 'client') {
    $abonements = get_сlient_abonement($con, $_SESSION['user_id']);
    $trainers = get_сlient_trainers($con, $_SESSION['user_id']);
    $contact = get_client_by_id($con, $_SESSION['user_id']);
    $page_content = include_template('user-profile.php', ['user_name' => $_SESSION['username'], 'user_contact_message' => $contact, 'abonements' => $abonements, 'trainers' => $trainers]);
}
//если авторизировался тренер
elseif ($_SESSION['type'] === 'trainer') {
    $train_story = get_trains_story($con, $_SESSION['user_id']);
    $trains = get_trener_trains($con, $_SESSION['user_id']);
    $contact = get_trener_by_id($con, $_SESSION['user_id']);
    $page_content = include_template('trainer-profile.php', ['user_name' => $_SESSION['username'], 'contact' => $contact, 'personal_train' => $train_story, 'trains' => $trains]);
}
//если авторизировался админ
elseif ($_SESSION['type'] === 'admin') {
    $abonements = get_abonements($con);
    $trains = get_trains($con);
    $trainers = get_trainers($con);
    $admins = get_admins($con);
    $page_content = include_template('admin-profile.php', ['user_name' => $_SESSION['username'], 'trainers' => $trainers, 'admins' => $admins, 'abonements' => $abonements, 'trains' => $trains]);
}


$layout = include_template('layout.php', ['title' => 'Профиль', 'content' => $page_content]);
print $layout;

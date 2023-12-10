<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

//валидация формы
//валидация формы
$abonements = get_abonements($con);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!($_POST['$abonements'] == 0)) {
        add_client_abonement(
            intval($_SESSION['user_id']),
            intval($_POST['abonements']),
            $con
        );
        header('Location: /olimpia_website/index.php');
    }

}

$page_content = include_template('abonement-form.php', ['errors' => $errors, 'abonements' => $abonements]);
$layout = include_template('layout.php', ['title' => 'Покупка абонемента', 'content' => $page_content]);
print $layout;
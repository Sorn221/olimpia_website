<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

//валидация формы
//валидация формы
$abonements = get_abonements($con);
$errors = [];
$required_fields = ['abonements'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //проверка на пустые поля
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = 'Поле не заполнено';
        }
    }
    if (!$errors) {
        add_client_abonement(
            intval($_SESSION['user_id']),
            intval($_POST['abonements']),
            $con
        );
        header('Location: /olimpia/olimpia_website/index.php');
        exit;
    }

}

$page_content = include_template('abonement-form.php', ['errors' => $errors, 'abonements' => $abonements]);
$layout = include_template('layout.php', ['title' => 'Покупка абонемента', 'content' => $page_content]);
print $layout;
<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

if ($_SESSION['type'] != 'admin') {
    http_response_code(403);
    $page_content = include_template('403.php');
} else {

    //валидация формы
    $errors = [];
    $required_fields = ['type', 'price', 'days'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($required_fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Поле не заполнено';
            }
        }

        //проверка стоимость = число
        if (!isset($errors['price'])) {
            if (!filter_var($_POST['price'], FILTER_VALIDATE_INT)) {
                $errors['price'] = 'Стоимость должна быть натуральныим числом';
            } elseif ($_POST['price'] < 1) {
                $errors['price'] = 'Стоимость должна быть больше 0';
            }
        }
        //проверка количество дней = число
        if (!isset($errors['days'])) {
            if (!filter_var($_POST['days'], FILTER_VALIDATE_INT)) {
                $errors['days'] = 'Количество дней должно быть натуральныим числом';
            } elseif ($_POST['days'] < 1) {
                $errors['days'] = 'Количество дней должно быть больше 0';
            }
        }
        if (!$errors) {

            $type = $_POST['type'];
            $price = $_POST['price'];
            $days = $_POST['days'];
            add_abonements(
                $type,
                $price,
                $days,
                $con
            );
            header('Location: /olimpia/olimpia_website/profile.php');
            exit;
        }
    }
    $page_content = include_template('abonement-add.php', ['errors' => $errors]);
}
$layout = include_template('layout.php', ['title' => 'Добавление тренирвоки', 'content' => $page_content]);
print $layout;
<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

//валидация формы
//валидация формы
$trains = get_trains($con);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required_fields = [
        'trains' => 'Выбирите тренировку'
    ];

    //проверка на пустые поля
    foreach ($required_fields as $key => $value) {
        if (empty($_POST[$key])) {
            $errors[$key] = $value;
        }
    }

    $errors = array_filter($errors);
    add_client_trains(
        intval($_SESSION['user_id']),
        intval($_POST['trains']),
        $con
    );
}

$page_content = include_template('trains-form.php', ['errors' => $errors, 'trains' => $trains]);
$layout = include_template('layout.php', ['title' => 'Создание админа', 'content' => $page_content]);
print $layout;
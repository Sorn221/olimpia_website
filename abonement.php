<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

//валидация формы
//валидация формы
$errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $required_fields = [
            'abonement' => 'Выбирите абонемент'
        ];

        //проверка на пустые поля
        foreach($required_fields as $key => $value) 
        {
            if (empty($_POST[$key])) 
            {
                $errors[$key] = $value;
            }
        }

        $errors = array_filter($errors);
        add_client_abonement(
            intval($_SESSION['user_id']),
            intval($_POST['abonements']),
            $con
        );
    }

$page_content = include_template('abonement-form.php',['errors' => $errors]);
$layout = include_template('layout.php', ['title' => 'Создание админа', 'content' => $page_content]);
print $layout;
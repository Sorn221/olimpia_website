<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');
$abonements = get_abonements($con);
const MAX_DETAIL_LENGHT = 300;
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



$page_content = include_template('main.php',['abonements' => $abonements]);
$layout = include_template('layout.php', ['title' => 'OLIMPIA', 'content' => $page_content]);
print $layout;
<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');


//валидация формы
$errors = [];
$required_fields = ['password','login'];
if (isset($_SESSION['username'])) 
{
    header('location: /index.php');
    exit;
} 
else 
{
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $required_fields = [
            'login' => 'Введите логин',
            'password' => 'Введите пароль'
        ];

        foreach($required_fields as $key => $value) 
        {
            if (empty($_POST[$key])) 
            {
                $errors[$key] = $value;
            }
        }
        if(empty(get_client_by_login($con, $_POST['login'])))
        {
            $errors['login'] = 'Неверный логин';
        }

        if (!isset($errors['login']) && !isset($errors['password'])) {
            $user = get_client_by_login($con, $_POST['login']);

            if (empty($user) || !password_verify($_POST['password'], $user['password'])) 
            {
                $errors['password'] = 'Неправильный пароль';
            }

            $errors = array_filter($errors);

            if (!$errors) 
            {
                session_start();
                $_SESSION['username'] = $user['name'];
                $_SESSION['user_id'] = $user['id'];
                header('Location: /index.php');
                exit;
            }
        }
    }
    //отрисовка
    $page_content = include_template('login.php');
    $layout = include_template('layout.php', ['title' => 'Авторизация', 'content' => $page_content]);
    print $layout;
}
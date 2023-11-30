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

        //проверка на пустые поля
        foreach($required_fields as $key => $value) 
        {
            if (empty($_POST[$key])) 
            {
                $errors[$key] = $value;
            }
        }
        //проверка на существование логина
        //проверка кто зашел админ, клиент или тренер
        //и запись информации
        if(empty(get_client_by_login($con, $_POST['login'])) && empty(get_trainer_by_login($con, $_POST['login'])) && empty(get_admin_by_login($con, $_POST['login'])))
        {
            $errors['login'] = 'Неверный логин';
        }
        
        
        //проверка введенного пароля
        if (!isset($errors['login']) && !isset($errors['password'])) {
            
            if(!empty(get_client_by_login($con, $_POST['login'])))
            {
                $user =  get_client_by_login($con, $_POST['login']);
                $_SESSION['type'] = 'client';
            }
            elseif(!empty(get_admin_by_login($con, $_POST['login'])))
            {
                $user =  get_admin_by_login($con, $_POST['login']);
                $_SESSION['type'] = 'admin';
            }
            elseif(!empty(get_trainer_by_login($con, $_POST['login'])))
            {
                $user =  get_trainer_by_login($con, $_POST['login']);
                $_SESSION['type'] = 'trainer';
            }

            if (empty($user) || !password_verify($_POST['password'], $user['Password'])) 
            {
                $errors['password'] = 'Неправильный пароль';
            }

            $errors = array_filter($errors);

            if (!$errors) 
            {
                session_start();
                $_SESSION['username'] = $user['Name'];
                $_SESSION['user_id'] = $user['ID'];
                header('Location: /olimpia/olimpia_website/index.php');
                exit;
            }
        }
    }
    //отрисовка
    
    $page_content = include_template('login.php',['errors' => $errors]);
    $layout = include_template('layout.php', 
    [
        'title' => 'Авторизация', 
        'content' => $page_content
    ]);
    print $layout;
}
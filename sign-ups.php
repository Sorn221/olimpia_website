<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

const MAX_NAME = 30;
const MAX_EMAIL = 255;
const MAX_CONTACT = 255;
const MAX_LOGIN = 30;
if (isset($_SESSION['username'])) {
    header('location: /index.php');
    exit;
} else {
    //валидация формы
    $errors = [];
    $required_fields = ['email', 'password', 'name', 'message', 'login'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //проверка на пустые поля
        foreach ($required_fields as $field) {
            if (empty($_POST[$field])) {
                $errors[$field] = 'Поле не заполнено';
            }
        }
        //проверка на уникальность мыла
        if (!isset($errors['email']) && !empty(get_client_by_email($con, $_POST['email']))) {
            $errors['email'] = 'E-mail уже используется';
        }
        //проверка на корректность мыла
        if (!isset($errors['email'])) {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'E-mail введен некорректно!';

            }
        }
        //проверка на уникальность логина
        if (!isset($errors['login']) && !empty(get_client_by_login($con, $_POST['login']))) {
            $errors['login'] = 'Логин уже используется';
        }
        //проверка на превышение символов имени
        if (!isset($errors['name'])) {
            $len = strlen($_POST['name']);

            if ($len > MAX_NAME) {
                $errors['name'] = "Имя должно быть меньше" . MAX_NAME . " символов";
            }
        }
        //проверка на превышение символов мыла
        if (!isset($errors['email'])) {
            $len = strlen($_POST['email']);

            if ($len > MAX_EMAIL) {
                $errors['email'] = "Email должен быть меньше " . MAX_EMAIL . " символов";
            }
        }
        //проверка на превышение символов логина
        if (!isset($errors['login'])) {
            $len = strlen($_POST['login']);

            if ($len > MAX_EMAIL) {
                $errors['login'] = "Логин должен быть меньше " . MAX_LOGIN . " символов";
            }
        }
        //проверка на превышение символов контактной инф
        if (!isset($errors['message'])) {
            $len = strlen($_POST['message']);

            if ($len > MAX_CONTACT) {
                $errors['message'] = "Контактная информация должна быть меньше " . MAX_CONTACT . " символов";
            }
        }
        if (!$errors) {
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];
            $login = $_POST['login'];
            $message = $_POST['message'];
            add_client($name, $email, $login, $password, $message, $con);
            header('Location: /olimpia/olimpia_website/sign-in.php');
        }
    }
    //вывод
    $page_content = include_template('sign-up.php', ['errors' => $errors]);
}



$layout = include_template('layout.php', ['title' => 'Регистрация', 'content' => $page_content]);
print $layout;


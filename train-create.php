<?php
require_once('helpers.php');
require_once('functions.php');
require_once('init.php');

if ($_SESSION['type'] != 'admin') {
    http_response_code(403);
    $page_content = include_template('403.php');
} else {
    //валидация формы
    $trains = get_trainers($con);
    $errors = [];
    $required_fields = ['type', 'price', 'trener'];

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
        $temp = time();
        //Обработка изображения
        if ($_FILES['image']['tmp_name'] !== "") {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $file_name = $_FILES['image']['tmp_name'];
            $file_type = finfo_file($finfo, $file_name);

            if ($file_type !== 'image/jpeg' && $file_type !== 'image/png') {
                $errors['image'] = 'Некорректный формат изображения';
            }
        } else {
            $errors['image'] = 'Загрузите изображение';
        }
        if (!$errors) {

            $file_name = strval(time()) . $_FILES['image']['name'];
            $file_path = __DIR__ . '/uploads/';
            $file_url = 'uploads/' . $file_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $file_path . $file_name);

            $type = $_POST['type'];
            $trener_id = $_POST['trener'];
            $price = $_POST['price'];
            add_trains(
                $type,
                $trener_id,
                $price,
                $file_url,
                $con
            );
            header('Location: /olimpia/olimpia_website/index.php');
            exit;
        }
    }



    $page_content = include_template('train-add.php', ['errors' => $errors, 'trains' => $trains]);
}
$layout = include_template('layout.php', ['title' => 'Добавление тренирвоки', 'content' => $page_content]);
print $layout;
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .registration-form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .registration-form label {
        display: block;
        margin-bottom: 8px;
    }

    .registration-form input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .registration-form button {
        background-color: #f13a11;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    input:invalid .form__error{
    display: block;
    }

    .form__error--bottom {
    display: none;
    margin-bottom: 15px;
    font-size: 16px;
    }

    .form--invalid .form__error--bottom {
    display: block;
    }

    .form__item--invalid .form__error {
    display: block;
    }

    .form__item--invalid textarea,
    .form__item--invalid input {
    background: #ffffff url("../images/error.svg") 97% 11px no-repeat;
    border-color: #f84646;
    }

    .form__item--invalid select {
    background: #ffffff url("../images/error.svg") 322px 11px no-repeat;
    border-color: #f84646;
    }

    .form__item--small.form__item--invalid input {
    background: #ffffff url("../images/error.svg") 94% 11px no-repeat;
    }

    .form__item--wide.form__item--invalid textarea {
    background: #ffffff url("../images/error.svg") 702px 11px no-repeat;
    }
    .form__error {
    display: none;
    font-size: 11px;
    color: #f84646;
    }
</style>
<main class="main-form">
    <div class="registration-form">
        <h2>Регистрация</h2>
        <form class="<?php if ($errors): ?>form--invalid<?php endif; ?>" action="sign-ups.php" method="post" autocomplete="off">

            <div class="<?php if (isset($errors['email'])): ?>form__item--invalid<?php endif; ?>">
                <label for="email">Email: <sup>*</sup></label>
                <input value="<?= getPostVal('email'); ?>" type="email" id="email" name="email" placeholder="Введите e-mail"
                    >
                <span class="form__error">
                        <?= $errors['email'] ?>
                </span> 
            </div>

            <div class="<?php if (isset($errors['password'])): ?>form__item--invalid<?php endif; ?>">
                <label for="password">Пароль: <sup>*</sup></label>
                <input value="<?= getPostVal('password'); ?>" type="password" id="password" name="password"
                    placeholder="Введите пароль" >
                <span class="form__error">
                        <?= $errors['password'] ?>
                </span> 
            </div>

            <div class="<?php if (isset($errors['name'])): ?>form__item--invalid<?php endif; ?>">
                <label for="name">Имя: <sup>*</sup></label>
                <input type="text" id="name" name="name" placeholder="Введите имя" value="<?= getPostVal('name'); ?>"
                    >
                <span class="form__error">
                        <?= $errors['name'] ?>
                </span> 
            </div>

            <div class="<?php if (isset($errors['login'])): ?>form__item--invalid<?php endif; ?>">
                <label for="login">Логин: <sup>*</sup></label>
                <input type="text" id="login" name="login" placeholder="Введите логин" value="<?= getPostVal('login'); ?>"
                    >
                <span class="form__error">
                    <?= $errors['login'] ?>
                </span>
            </div>

            <div class="<?php if (isset($errors['message'])): ?>form__item--invalid<?php endif; ?>">
                <label for="message">Контактная информация: <sup>*</sup></label>
                <textarea id="message" name="message" 
                    placeholder="Напишите как с вами связаться"><?= getPostVal('message'); ?></textarea>
                <span class="form__error">
                    <?= $errors['message'] ?>
                </span>
            </div>

            <button type="submit">Зарегистрироваться</button>
            
        </form>
    </div>
</main>
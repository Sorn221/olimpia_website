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

    .login-form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    .login-form label {
        display: block;
        margin-bottom: 8px;
    }

    .login-form input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .login-form button {
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
<main>
    <div class="login-form">
        <h2>Авторизация</h2>
        <form action="sign-in.php" method="post">
            <div class="<?php if (isset($errors['login'])): ?>form__item--invalid<?php endif; ?>">
                <label for="login">Логин: <sup>*</sup></label>
                <input type="text" id="login" name="login" placeholder="Введите логин" value="<?= getPostVal('login'); ?>"
                    >
                <span class="form__error">
                    <?= $errors['login'] ?>
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

            <button type="submit">Войти</button>
        </form>
    </div>
</main>
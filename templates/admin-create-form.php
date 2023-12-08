<head>
    <link rel="stylesheet" href="css/form.css">
</head>
<main class="main-form">
    <div class="registration-form">
        <h2 class="text-dark">Регистрация админа</h2>
        <form class="<?php if ($errors): ?>form--invalid<?php endif; ?>" action="admin-create.php" method="post"
            autocomplete="off">

            <div class="<?php if (isset($errors['email'])): ?>form__item--invalid<?php endif; ?>">
                <label class="text-dark" for="email">Email: <sup>*</sup></label>
                <input value="<?= getPostVal('email'); ?>" type="email" id="email" name="email"
                    placeholder="Введите e-mail">
                <span class="form__error">
                    <?= $errors['email'] ?>
                </span>
            </div>

            <div class="<?php if (isset($errors['password'])): ?>form__item--invalid<?php endif; ?>">
                <label class="text-dark" for="password">Пароль: <sup>*</sup></label>
                <input value="<?= getPostVal('password'); ?>" type="password" id="password" name="password"
                    placeholder="Введите пароль">
                <span class="form__error">
                    <?= $errors['password'] ?>
                </span>
            </div>

            <div class="<?php if (isset($errors['name'])): ?>form__item--invalid<?php endif; ?>">
                <label class="text-dark" for="name">Имя: <sup>*</sup></label>
                <input type="text" id="name" name="name" placeholder="Введите имя" value="<?= getPostVal('name'); ?>">
                <span class="form__error">
                    <?= $errors['name'] ?>
                </span>
            </div>

            <div class="<?php if (isset($errors['login'])): ?>form__item--invalid<?php endif; ?>">
                <label class="text-dark" for="login">Логин: <sup>*</sup></label>
                <input type="text" id="login" name="login" placeholder="Введите логин"
                    value="<?= getPostVal('login'); ?>">
                <span class="form__error">
                    <?= $errors['login'] ?>
                </span>
            </div>


            <button type="submit">Зарегистрировать</button>

        </form>
    </div>
</main>
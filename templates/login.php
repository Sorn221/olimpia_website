<head>
    <link rel="stylesheet" href="css/form.css">
</head>
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
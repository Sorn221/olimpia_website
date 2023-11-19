<main>
    <form class="form container " action="sign-ups.php" method="post" autocomplete="off">
        <h2>Регистрация нового аккаунта</h2>
        <div class="form__item">
            <label for="email">E-mail <sup>*</sup></label>
            <input value="<?= getPostVal('email'); ?>" id="email" type="text" name="email" placeholder="Введите e-mail">
        </div>
        <div class="form__item">
            <label for="password">Пароль <sup>*</sup></label>
            <input value="<?= getPostVal('password'); ?>" id="password" type="text" name="password"
                placeholder="Введите пароль">
        </div>
        <div class="form__item">
            <label for="name">Имя <sup>*</sup></label>
            <input value="<?= getPostVal('name'); ?>" id="name" type="text" name="name" placeholder="Введите имя">
        </div>
        <div class="form__item">
            <label for="message">Контактные данные <sup>*</sup></label>
            <textarea id="message" name="message"
                placeholder="Напишите как с вами связаться"><?= getPostVal('message'); ?></textarea>
        </div>

        <button type="submit" class="button">Зарегистрироваться</button>

    </form>
</main>
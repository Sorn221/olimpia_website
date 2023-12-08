<main class="main-form">
    <div class="content-center">
        <div class="registration-form text-dark">
            <h2>Регистрация тренера</h2>
            <form class="<?php if ($errors): ?>form--invalid<?php endif; ?>" action="trener-create.php" method="post"
                autocomplete="off">

                <div class="<?php if (isset($errors['email'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="email">Email: <sup>*</sup></label>
                    <input value="<?= getPostVal('email'); ?>" type="email" id="email" name="email"
                        placeholder="Введите e-mail">
                    <span class="form__error">
                        <?= $errors['email'] ?>
                    </span>
                </div>

                <div class="<?php if (isset($errors['password'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="password">Пароль: <sup>*</sup></label>
                    <input value="<?= getPostVal('password'); ?>" type="password" id="password" name="password"
                        placeholder="Введите пароль">
                    <span class="form__error">
                        <?= $errors['password'] ?>
                    </span>
                </div>

                <div class="<?php if (isset($errors['name'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="name">Имя: <sup>*</sup></label>
                    <input type="text" id="name" name="name" placeholder="Введите имя"
                        value="<?= getPostVal('name'); ?>">
                    <span class="form__error">
                        <?= $errors['name'] ?>
                    </span>
                </div>

                <div class="<?php if (isset($errors['login'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="login">Логин: <sup>*</sup></label>
                    <input type="text" id="login" name="login" placeholder="Введите логин"
                        value="<?= getPostVal('login'); ?>">
                    <span class="form__error">
                        <?= $errors['login'] ?>
                    </span>
                </div>

                <div class="<?php if (isset($errors['number'])): ?>form__item--invalid<?php endif; ?>">
                    <label for="number">Номер телефона: <sup>*</sup></label>
                    <input value="<?= getPostVal('number'); ?>" type="tel" id="number" name="number"
                        pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                        placeholder="+7(9XX) XXX-XX-XX">
                    <span class="form__error">
                        <?= $errors['number'] ?>
                    </span>
                </div>
                <div
                    class="form__item form__item--file <?php if (isset($errors['image'])): ?> form__item--invalid <?php endif; ?> ">
                    <label>Изображение <sup>*</sup></label>
                    <div class="form__input-file">
                        <input class="visually-hidden" name="image" type="file" id="lot-img" value="">
                        <label for="lot-img">
                            Добавить
                        </label>
                        <span class="form__error">
                            <?= $errors['image'] ?>
                        </span>
                    </div>
                </div>

                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</main>
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
</style>
<main class="main-form">
    <div class="registration-form">
        <h2>Регистрация</h2>
        <form action="#" method="post">
            <label for="email">Email: <sup>*</sup></label>
            <input value="<?= getPostVal('email'); ?>" type="email" id="email" name="email" placeholder="Введите e-mail"
                required>

            <label for="password">Пароль: <sup>*</sup></label>
            <input value="<?= getPostVal('password'); ?>" type="password" id="password" name="password"
                placeholder="Введите пароль" required>

            <label for="name">Имя: <sup>*</sup></label>
            <input type="text" id="name" name="name" placeholder="Введите имя" value="<?= getPostVal('name'); ?>"
                required>

            <label for="login">Логин: <sup>*</sup></label>
            <input type="text" id="login" name="login" placeholder="Введите логин" value="<?= getPostVal('login'); ?>"
                required>

            <label for="message">Контактная информация: <sup>*</sup></label>
            <textarea id="message" name="message" rows="4"
                placeholder="Напишите как с вами связаться"><?= getPostVal('message'); ?></textarea>

            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</main>
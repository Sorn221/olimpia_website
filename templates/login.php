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
</style>
<main>
    <div class="login-form">
        <h2>Авторизация</h2>
        <form action="#" method="post">
            <label for="name">Имя: <sup>*</sup></label>
            <input type="text" id="name" name="name" placeholder="Введите имя" required>

            <label for="password">Пароль: <sup>*</sup></label>
            <input value="<?= getPostVal('password'); ?>" type="password" id="password" name="password"
                placeholder="Введите пароль" required>

            <button type="submit">Войти</button>
        </form>
    </div>
</main>
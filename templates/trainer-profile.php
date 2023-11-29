<style>
    /* Обнуляем отступы и поля у body */
    body {
        margin: 0;
        padding: 0;
    }

    /* Устанавливаем фон и шрифт для всей страницы */
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
    }

    /* Задаем стили для контейнера профиля */
    .profile-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Стили для основного блока профиля */
    .profile {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
    }

    /* Стили для админского функционала */
    .admin-functionalities {
        background-color: #e6e6e6;
        border-radius: 8px;
        padding: 15 15 15 0px;
        margin-top: 20px;
    }

    /* Стили для кнопок */
    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #f13a11;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Стили для разделителя */
    .separator {
        border-top: 1px solid #ccc;
        margin: 20px 0;
    }

    .profile-info {
        margin-top: 100px;
        margin-bottom: 20px;
    }

    h6 {
        color: black;
    }

    .profile-info p {
        margin: 0;
    }
</style>
<main>

    <body>
        <div class="profile-container">
            <div class="profile">
                <!-- Базовая информация о пользователе -->
                <div class="profile-info">
                    <h6>Имя:</h6>
                    <span>
                        <?= $user_name ?><span>
                            <h6>Контактная информация:</h6>
                            <span>
                                <?= $user_contact_message ?><span>
                </div>
                <!-- Пользовательский функционал (для тренера) -->

                <div class="admin-functionalities">
                    <h2>Ваши тренировки </h2>
                    <ul>
                        <li>
                            
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Разделитель между блоками -->
            <div class="separator"></div>
        </div>
    </body>
</main>
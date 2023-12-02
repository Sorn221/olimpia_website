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

    .delete-button {
        display: inline-block;

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
                    <h2>Вы вошли как администратор</h2>
                    <h6>Имя пользователя:</h6>
                    <span>
                        <?= $user_name ?><span>

                </div>

                <!-- Админский функционал (для администратора) -->
                <div class="admin-functionalities">

                    <h2>Административные функции:</h2>
                </div>
                <!-- Разделитель между блоками -->
                <div class="separator"></div>
                    <div class="admin-functionalities">
                        <h6>Тренера: </h6>
                        <?php if (!empty($trainers)): ?>
                            <ul>
                                <?php foreach ($trainers as $trainer): ?>
                                    <li>Имя: <?=$trainer['Name'] ?> | Email: <?=$trainer['Email'] ?> | Номер: <?=$trainer['PhoneNumber'] ?> | Логин: <?=$trainer['TrainerLogin'] ?>
                                    | Статус: <?php if($trainer['Active'] == 0):?> не работает <?php else:?> работает <?php endif?>| <button class="delete-button" href="trener-delete.php" onclick="<?php $_SESSION['trener_id'] = $trainer['ID'] ?>">Удалить</button></li>
                                    <?php var_dump($trainer['Active'])?>
                                <?php endforeach; ?>
                            </ul>
                        <?php else : ?>
                            <p>Список сотрудников-тренеров пуст</p>
                        <?php endif; ?>
                        <a href="trener-create.php"><button class="button">Добавить сотрудника</button></a>
                    </div>
                <div class="separator"></div>
                    <div class="admin-functionalities">
                        <h6>Админы: </h6>
                        <?php if (!empty($admins)): ?>
                            <ul>
                                <?php foreach ($admins as $admin): ?>
                                    <li>Имя: <?=$admin['Name'] ?> | Email: <?=$admin['Email'] ?> | Логин:  <?=$admin['AdminLogin'] ?>|  <button class="delete-button">Удалить</button></li>
                                <?php endforeach; ?>   
                            </ul>
                        <?php else : ?>
                            <p>Список сотрудников-админов пуст</p>
                        <?php endif; ?>
                        <a href="admin-create.php"><button class="button">Добавить сотрудника</button></a>
                    </div>
                    
            </div>
        </div>
    </body>
</main>
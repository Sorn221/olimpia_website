<head>
    <link rel="stylesheet" href="css/profiles.css">
</head>
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
                                    | Статус: <?php if($trainer['Active'] == 0):?> не работает <?php else:?> работает <?php endif?></li>
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
                                    <li>Имя: <?=$admin['Name'] ?> | Email: <?=$admin['Email'] ?> | Логин:  <?=$admin['AdminLogin'] ?>  </li>
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
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

                <!-- Вывод тренеров -->
                <div class="separator"></div>
                <div class="admin-functionalities">
                    <h6>Тренера: </h6>
                    <?php if (!empty($trainers)): ?>
                        <ul>
                            <?php foreach ($trainers as $trainer): ?>
                                <li>Имя:
                                    <?= $trainer['Name'] ?> | Email:
                                    <?= $trainer['Email'] ?> | Номер:
                                    <?= $trainer['PhoneNumber'] ?> | Логин:
                                    <?= $trainer['TrainerLogin'] ?>
                                    | Статус:
                                    <?php if ($trainer['Active'] == 0): ?> не работает
                                    <?php else: ?> работает
                                    <?php endif ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>Список сотрудников-тренеров пуст</p>
                    <?php endif; ?>
                    <a href="trener-create.php"><button class="button">Добавить сотрудника</button></a>
                </div>
                <!-- Вывод админов -->
                <div class="separator"></div>
                <div class="admin-functionalities">
                    <h6>Админы: </h6>
                    <?php if (!empty($admins)): ?>
                        <ul>
                            <?php foreach ($admins as $admin): ?>
                                <li>Имя:
                                    <?= $admin['Name'] ?> | Email:
                                    <?= $admin['Email'] ?> | Логин:
                                    <?= $admin['AdminLogin'] ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>Список сотрудников-админов пуст</p>
                    <?php endif; ?>
                    <a href="admin-create.php"><button class="button">Добавить сотрудника</button></a>
                </div>

                <!-- Вывод тренировок -->
                <div class="separator"></div>
                <div class="admin-functionalities">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <h6>Тренировки: </h6>
                                <?php if (!empty($trains)): ?>
                                    <ul>
                                        <?php foreach ($trains as $train): ?>
                                            <li>Тип:
                                                <?= $train['Type'] ?> | Цена:
                                                <?= $train['Price'] ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <p>Список тренировок пуст</p>
                                <?php endif; ?>
                                <a href="train-create.php"><button class="button">Добавить тренировку</button></a>
                            </div>
                            <div class="col-sm">
                                <h6>Абонементы: </h6>
                                <?php if (!empty($abonements)): ?>
                                    <ul>
                                        <?php foreach ($abonements as $abonement): ?>
                                            <li>Тип:
                                                <?= $abonement['Type'] ?> | Цена:
                                                <?= $abonement['Price'] ?> | Действует:
                                                <?= $abonement['ValidDays'] ?> дней
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <p>Список абонементов пуст</p>
                                <?php endif; ?>
                                <a href="abonement-create.php"><button class="button">Добавить абонемент</button></a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Вывод абонементов -->
                <div class="separator"></div>
                <div class="admin-functionalities">

                </div>
            </div>
        </div>
    </body>
</main>
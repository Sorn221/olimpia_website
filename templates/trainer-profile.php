<head>
    <link rel="stylesheet" href="css/profiles.css">
</head>
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
                                Номер телефона: <?=$contact['PhoneNumber']?> | Email: <?=$contact['Email']?>
                            <span>
                </div>
                <!-- Пользовательский функционал (для тренера) -->
                <div class="separator"></div>
                <div class="admin-functionalities">
                    <h2>Ваши тренировки: </h2>
                    <ul>
                        <?php if(!empty($trains)):?>
                            <?php foreach ($trains as $train):?>
                                <li>Тип: <?=$train['Type']?>| Цена: <?=$train['Price']?> </li>
                            <?php endforeach?>
                        <?php else:?>
                            <p>Вы еще не ведете занятия</p>
                        <?php endif?>
                    </ul>
                </div>
                <div class="separator"></div>
                <div class="admin-functionalities">
                    <h2>Ваша история персональных тренировок: </h2>
                    <ul>
                        <?php if(!empty($personal_train)):?>
                            
                            <?php foreach ($personal_train as $train):?>
                                <li>Тип: <?=$train['Type']?>| Цена: <?=$train['Price']?> | Дата: <?=$train['BookingDate']?> | Имя занимающегося: <?=$train['ClientName']?></li>
                            <?php endforeach?>
                        <?php else:?>
                            <p>Вы еще не проводили тренировок</p>
                        <?php endif?>
                    </ul>
                </div>
            </div>

            <!-- Разделитель между блоками -->
            <div class="separator"></div>
        </div>
    </body>
</main>
<head>
    <link rel="stylesheet" href="css/profiles.css">
</head>
<main>

    <body>
        <div class="profile-container">
            <div class="profile">
                <!-- Базовая информация о пользователе -->
                <div class="profile-info">
                    <h2>Имя:</h2>
                    <span>
                        <?= $user_name ?><span>
                            <h3>Контактная информация:</h3>
                            <span>
                                <?= $user_contact_message['Contact'] ?><span>
                </div>
                <div class="separator"></div>
                <!-- Пользовательский функционал (для обычного пользователя) -->

                <div class="admin-functionalities">
                    <h2>Ваши абонементы </h2>
                    <?php if (!empty($abonements)): ?>
                        <ul>
                            <?php foreach ($abonements as $item): ?>
                                <li>
                                    <?= $item["Type"] ?> | Цена:
                                    <?= $item["Price"] ?> | Действителен
                                    <?= $item["ValidDays"] ?> дней | Дата покупки:
                                    <?= $item["PurchaseDate"] ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>Вы еще не покупали абонементы</p>
                    <?php endif; ?>
                </div>
                <!-- Разделитель между блоками -->
                <div class="separator"></div>
                <div class="admin-functionalities">
                    <h2>Ваши тренировки </h2>
                    <?php if (!empty($abonements)): ?>
                        <ul>
                            <?php foreach ($trainers as $item): ?>
                                <li>
                                    <?= $item["Type"] ?> | Цена:
                                    <?= $item["Price"] ?> | Дата покупки:
                                    <?= $item["BookingDate"] ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>Вы еще не покупали тренировки</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Разделитель между блоками -->
            <div class="separator"></div>
        </div>
    </body>
</main>
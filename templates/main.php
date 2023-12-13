<main>

    <body>
        <!-- HERO -->
        <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
            <div>
                <div>
                    <div>
                        <div>
                            <h6>Твой путь к здоровому образу жизни!</h6>
                            <h1>Прокачай свое тело вместе с
                                Olimpia!
                            </h1>
                            <a href="#feature">Старт</a>
                            <a href="#about">Информация</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="feature" class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h2>Новичок в зале?</h2>
                        <h6>Приобретай абонемент и присоединяйся!</h6>
                        <?php if (isset($_SESSION['username'])): ?>
                            <?php if ($_SESSION['type'] == 'client'):?>
                                <a href="abonement.php">Купить абонемент</a>
                            <?php elseif ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'trainer'): ?>
                                <a href="#">Купить абонемент</a>
                            <?php endif?>
                        <?php else: ?>
                            <a href="sign-ups.php">Купить абонемент</a>
                        <?php endif ?>
                    </div>
                    <div class="col-sm">
                        <h2>Рабочее время</h2>
                        <strong>Понедельник -
                            Пятница</strong>
                        <p>7:00 - 22:00</p>
                        <strong>Суббота</strong>
                        <p>6:00 - 20:00</p>
                        <strong>Воскресенье :
                            Закрыто</strong>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about" id="about">
            <div class="container">
                <hr color="white">
                <div>
                    <div class="p-3 mb-2 ">
                        <h2>Привет, мы - OLIMPIA!</h2>
                        <p>В OLIMPIA мы стремимся вдохновлять и поддерживать
                            каждого члена нашего сообщества в их стремлении к здоровью и благополучию. Независимо от
                            вашего уровня подготовки или опыта, мы предоставляем индивидуальные программы тренировок,
                            атмосферу поддержки и профессиональные тренеры, готовые помочь вам достичь ваших целей.</p>
                    </div>
                    <div class=" row p-3 mb-2 ">
                        <?php foreach ($trainers as $trener): ?>
                            <div class="col-sm p-3 mb-10  border border-white ">
                                <img src="<?= htmlspecialchars($trener['Image']) ?>" width="350" height="300">

                                <div>
                                    <h3>
                                        <?= $trener['Name'] ?>
                                    </h3>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>

                </div>
            </div>
        </section>

        <!-- CLASS -->
        <section id="class">
            <div class="container">
                <hr color="white">
                <div class="p-3 mb-2 text-white">
                    <div>
                        <h2>Наши групповые занятия</h2>
                    </div>
                    <div class="row">
                        <?php foreach ($trains as $train): ?>
                            <div class="col-sm">
                                <img src="<?= htmlspecialchars($train['Image']) ?>" width="350" height="300">
                                <div class="border border-black">
                                    <h3>
                                        <?= $train['Type'] ?>
                                    </h3>
                                    <span>Стоимость:
                                        <?= $train['Price'] ?>
                                    </span>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
                <?php if (isset($_SESSION['username'])): ?>
                    <?php if($_SESSION['type'] == 'client'):?>
                        <a href="trains.php">Купить тренировку</a>
                    <?php elseif ($_SESSION['type'] == 'admin' || $_SESSION['type'] == 'trainer'): ?>
                        <a href="#">Купить тренировку</a>
                    <?php endif?>
                <?php else: ?>
                    <a href="sign-ups.php">Купить тренировку</a>
                <?php endif ?>
            </div>
        </section>

        <!-- SCHEDULE -->
        <section id="schedule">
            <div class="container">
                <hr color="white">
                <div class="p-3 mb-2 text-white">
                    <div>
                        <h2>Расписание зала</h2>
                    </div>
                    <div class="row">
                        <table class="col-sm border border-white p-3 mb-2">
                            <thead class="border border-white">
                                <th>Пн</th>
                                <th>Вт</th>
                                <th>Ср</th>
                                <th>Чт</th>
                                <th>Пт</th>
                                <th>Сб</th>
                            </thead>
                            <tbody>
                                <tr class="border border-white">
                                    <td><small>7:00</small></td>
                                    <td>
                                        <strong>Кардио</strong>
                                        <span>7:00 - 9:00</span>
                                    </td>
                                    <td>
                                        <strong>Power lifting</strong>
                                        <span>7:00 - 9:00</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Воркаут</strong>
                                        <span>7:00 - 9:00</span>
                                    </td>
                                </tr>

                                <tr class="border border-white">
                                    <td><small>9:00</small></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Бокс</strong>
                                        <span>8:00 - 9:00</span>
                                    </td>
                                    <td>
                                        <strong>Кроссфит</strong>
                                        <span>8:00 - 9:00</span>
                                    </td>
                                    <td></td>

                                </tr>

                                <tr class="border border-white">
                                    <td><small>11:00</small></td>
                                    <td></td>
                                    <td>
                                        <strong>Бокс</strong>
                                        <span>11:00 - 14:00</span>
                                    </td>
                                    <td>
                                        <strong>Кроссфит</strong>
                                        <span>11:30 - 15:30</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Power lifting</strong>
                                        <span>11:50 - 17:20</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td><small>14:00</small></td>
                                    <td>
                                        <strong>Бокс</strong>
                                        <span>14:00 - 16:00</span>
                                    </td>
                                    <td>
                                        <strong>Power lifting</strong>
                                        <span>15:00 - 18:00</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Кардио</strong>
                                        <span>18:00 - 21:00</span>
                                    </td>
                                    <td></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <hr color="white">
                <div>
                    <h2>Где нас можно найти
                    </h2>
                    <p>г.Екатеринбург
                        ул.Ульяновская 11</p>
                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1496.7553428139345!2d60.628003047577764!3d56.901557459738925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c172776b66c18d%3A0x8afbc3626f8e269e!2z0KPQu9GM0Y_QvdC-0LLRgdC60LDRjyDRg9C7LiwgMTE!5e0!3m2!1sru!2sru!4v1700243181254!5m2!1sru!2sru"
                            width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </body>
</main>
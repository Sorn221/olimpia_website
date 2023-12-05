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
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="row">
                    <div>
                        <h2>Новичок в зале?</h2>
                        <h6>Приобретай абонемент и присоединяйся!</h6>
                        <?php if(isset($_SESSION['username'])):?>
                            <a href="#" >Начни тренироваться сегодня</a>
                        <?php else:?>
                            <a href="sign-ups.php" >Начни тренироваться сегодня</a>
                        <?php endif?>    
                    </div>
                    <div >
                        <div>
                            <div>
                                <h2 >Рабочее время</h2>
                                <strong >Понедельник -
                                    Пятница</strong>
                                <p >7:00 - 22:00</p>
                                <strong >Суббота</strong>
                                <p >6:00 - 20:00</p>
                                <strong>Воскресенье :
                                    Закрыто</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about" id="about">
        <div class="container">
                <div class="row">
                    <div >
                        <h2 >Привет, мы - OLIMPIA!</h2>
                        <p >В OLIMPIA мы стремимся вдохновлять и поддерживать
                            каждого члена нашего сообщества в их стремлении к здоровью и благополучию. Независимо от
                            вашего уровня подготовки или опыта, мы предоставляем индивидуальные программы тренировок,
                            атмосферу поддержки и профессиональные тренеры, готовые помочь вам достичь ваших целей.</p>
                    </div>
                    <div >
                        <div >
                            <img src="" >
                            <div>
                                <h3>Алексей</h3>
                                <span>Power lifting</span>
                                <span>Воркаут</span>
                                <span>Кроссфит</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div >
                            <img src="">
                            <div >
                                <h3>Антон</h3>
                                <span>Power lifting</span>
                                <span>Бокс</span>
                                <span>Кардио</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CLASS -->
        <section  id="class">
            <div >
                <div >
                    <div>
                        <h2>Наши групповые занятия</h2>
                    </div>
                    <div>
                        <div>
                            <img src="">
                            <div>
                                <h3>Бокс</h3>
                                <span><strong>Тренер</strong> - Антон</span>
                                <span>100₽</span>
                                <p>Групповые тренировки по боксу (цена за одну тренировку)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div >
                            <img src="">
                            <div>
                                <h3>Воркаут</h3>
                                <span><strong>Тренер</strong> - Алексей</span>
                                <span>150₽</span>
                                <p>Групповые занятия на турниках и брусьях (цена за одну тренировку)</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <img src="">
                            <div>
                                <h3>Кардио</h3>
                                <span><strong>Тренер</strong> - Антон</span>
                                <span>200₽</span>
                                <p>Групповые занятия направленные на интенсивную работу и сброс веса (цена
                                    за
                                    одну
                                    тренировку)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SCHEDULE -->
        <section id="schedule">
            <div >
                <div >
                    <div >
                        <h6 >наше расписание на неделю</h6>

                        <h2>Расписание зала</h2>
                    </div>
                    <div >
                        <table>
                            <thead>
                                <th>Пн</th>
                                <th>Вт</th>
                                <th>Ср</th>
                                <th>Чт</th>
                                <th>Пт</th>
                                <th>Сб</th>
                            </thead>
                            <tbody>
                                <tr>
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

                                <tr>
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
                                    <td>
                                        <strong>Кардио</strong>
                                        <span>8:00 - 9:00</span>
                                    </td>
                                </tr>

                                <tr>
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
                                    <td>
                                        <strong>Кроссфит</strong>
                                        <span>17:00 - 19:00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
        <!-- CONTACT -->
        <section id="contact">
            <div >
                <div >
                    <div >
                        <h2 >Где нас можно найти
                        </h2>
                        <p >г.Екатеринбург
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
            </div>
        </section>
    </body>
</main>
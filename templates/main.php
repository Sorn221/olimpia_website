<style>
    input:invalid .form__error{
    display: block;
    }

    .form__error--bottom {
    display: none;
    margin-bottom: 15px;
    font-size: 16px;
    }

    .form--invalid .form__error--bottom {
    display: block;
    }

    .form__item--invalid .form__error {
    display: block;
    }

    .form__item--invalid textarea,
    .form__item--invalid input {
    background: #ffffff url("../images/error.svg") 97% 11px no-repeat;
    border-color: #f84646;
    }

    .form__item--invalid select {
    background: #ffffff url("../images/error.svg") 322px 11px no-repeat;
    border-color: #f84646;
    }

    .form__item--small.form__item--invalid input {
    background: #ffffff url("../images/error.svg") 94% 11px no-repeat;
    }

    .form__item--wide.form__item--invalid textarea {
    background: #ffffff url("../images/error.svg") 702px 11px no-repeat;
    }
    .form__error {
    display: none;
    font-size: 11px;
    color: #f84646;
    }    
</style>
<main>

    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">




        <!-- HERO -->
        <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-md-10 mx-auto col-12">
                        <div class="hero-text mt-5 text-center">

                            <h6 data-aos="fade-up" data-aos-delay="300">Твой путь к здоровому образу жизни!</h6>

                            <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Прокачай свое тело вместе с
                                Olimpia!</h1>

                            <a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up"
                                data-aos-delay="600">Старт</a>

                            <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up"
                                data-aos-delay="700">Информация</a>

                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="feature" id="feature">
            <div class="container">
                <div class="row">

                    <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-3 text-white" data-aos="fade-up">Новичок в зале?</h2>

                        <h6 class="mb-4 text-white" data-aos="fade-up">Приобретай абонемент и присоединяйся!</h6>

                        <p data-aos="fade-up" data-aos-delay="200"></p>
                        <?php if(isset($_SESSION['username'])):?>
                            <a  class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300"
                            data-toggle="modal" data-target="#membershipForm"  href="#" >Начни тренироваться сегодня</a>
                        <?php else:?>
                            <a  class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300"
                              href="sign-in.php" >Начни тренироваться сегодня</a>
                        <?php endif?>
                            
                    </div>

                    <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                        <div class="about-working-hours">
                            <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Рабочее время</h2>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Понедельник -
                                    Пятница</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 - 22:00</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Суббота</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 - 20:00</p>

                                <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Воскресенье :
                                    Закрыто</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>


        <!-- ABOUT -->
        <section class="about section" id="about">
            <div class="container">
                <div class="row">

                    <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Привет, мы - OLIMPIA!</h2>

                        <p data-aos="fade-up" data-aos-delay="400">В OLIMPIA мы стремимся вдохновлять и поддерживать
                            каждого члена нашего сообщества в их стремлении к здоровью и благополучию. Независимо от
                            вашего уровня подготовки или опыта, мы предоставляем индивидуальные программы тренировок,
                            атмосферу поддержки и профессиональные тренеры, готовые помочь вам достичь ваших целей.</p>

                        <p data-aos="fade-up" data-aos-delay="500"></p>

                    </div>

                    <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                        <div class="team-thumb">
                            <img src="images/team/выбрать_тренера_01.jpg" class="img-fluid" alt="Trainer">

                            <div class="team-info d-flex flex-column">

                                <h3>Алексей</h3>
                                <span>Power lifting</span>
                                <span>Воркаут</span>
                                <span>Кроссфит</span>


                                <ul class="social-icon mt-3">
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-telegram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up"
                        data-aos-delay="800">
                        <div class="team-thumb">
                            <img src="images/team/trener2.jpg" class="img-fluid" alt="Trainer">

                            <div class="team-info d-flex flex-column">

                                <h3>Антон</h3>
                                <span>Power lifting</span>
                                <span>Бокс</span>
                                <span>Кардио</span>

                                <ul class="social-icon mt-3">
                                    <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li><a href="#" class="fa fa-telegram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- CLASS -->
        <section class="class section" id="class">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h6 data-aos="fade-up">Сделай идеальное тело</h6>

                        <h2 data-aos="fade-up" data-aos-delay="200">Наши групповые занятия</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <div class="class-thumb">
                            <img src="images/class/бокс.jpg" class="img-fluid" alt="Class">

                            <div class="class-info">
                                <h3 class="mb-1">Бокс</h3>

                                <span><strong>Тренер</strong> - Антон</span>

                                <span class="class-price">100₽</span>

                                <p class="mt-3">Групповые тренировки по боксу (цена за одну тренировку)</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                        <div class="class-thumb">
                            <img src="images/class/кроссфит.jpg" class="img-fluid" alt="Class">

                            <div class="class-info">
                                <h3 class="mb-1">Воркаут</h3>

                                <span><strong>Тренер</strong> - Алексей</span>

                                <span class="class-price">150₽</span>

                                <p class="mt-3">Групповые занятия на турниках и брусьях (цена за одну тренировку)</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                        <div class="class-thumb">
                            <img src="images/class/кардио.jpg" class="img-fluid" alt="Class">

                            <div class="class-info">
                                <h3 class="mb-1">Кардио</h3>

                                <span><strong>Тренер</strong> - Антон</span>

                                <span class="class-price">200₽</span>

                                <p class="mt-3">Групповые занятия направленные на интенсивную работу и сброс веса (цена
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
        <section class="schedule section" id="schedule">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h6 data-aos="fade-up">наше расписание на неделю</h6>

                        <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Расписание зала</h2>
                    </div>

                    <div class="col-lg-12 py-5 col-md-12 col-12">
                        <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up"
                            data-aos-delay="300">

                            <thead class="thead-light">
                                <th><i class="fa fa-calendar"></i></th>
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
        <section class="contact section" id="contact">
            <div class="container">
                <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Напиши нам если остались вопросы
                        </h2>

                        <form action="#" method="post" class="contact-form webform" data-aos="fade-up"
                            data-aos-delay="400" role="form" id="forma">
                            <input type="text" class="form-control" name="cf-name" placeholder="Имя">

                            <input type="email" class="form-control" name="cf-email" placeholder="Почта">

                            <textarea class="form-control" rows="5" name="cf-message"
                                placeholder="Сообщение"></textarea>

                            <button type="submit" class="form-control" id="submit-button" name="submit">Отправить
                                сообщение</button>
                        </form>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Где нас можно найти
                        </h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> г.Екатеринбург
                            ул.Ульяновская 11</p>
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1496.7553428139345!2d60.628003047577764!3d56.901557459738925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c172776b66c18d%3A0x8afbc3626f8e269e!2z0KPQu9GM0Y_QvdC-0LLRgdC60LDRjyDRg9C7LiwgMTE!5e0!3m2!1sru!2sru!4v1700243181254!5m2!1sru!2sru"
                                width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>
            </div>
        </section>
<!-- FOOTER -->
<div class="modal-footer"></div>
                <footer class="site-footer">
                    <div class="container">
                        <div class="row">

                            <div class="ml-auto col-lg-4 col-md-5">
                                <p class="copyright-text">Copyright &copy; 2023 URTK Co.

                                    <br>Design: <a href="https://github.com/Sorn221">Sorn</a>
                                </p>
                            </div>

                            <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                                <p class="mr-4">
                                    <i class="fa fa-envelope-o mr-1"></i>
                                    <a href="#">fomin.timofey.sistema@yandex.ru</a>
                                </p>

                                <p><i class="fa fa-phone mr-1"></i> +7(922)1889024</p>
                            </div>

                        </div>
                    </div>
                </footer>



        <!-- Modal -->
        <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <div class="modal-header">

                        <h2 class="modal-title" id="membershipFormLabel">Форма записи</h2>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form class="membership-form webform" role="form" action="index.php" method="post">
                            <input type="text" class="form-control" name="name" value="<?=$_SESSION['username']?>" readonly>

                            <input type="email" class="form-control" name="cf-email" value="<?=$_SESSION['email']?>" readonly>

                            <select name="abonements" id="abonements" class="form-control">
                                <option value="0">Выберите абонемент</option>
                                <?php foreach ($abonements as $item):?>
                                    <option <?=getPostVal('abonements') === $item['ID'] ? 'selected value='.$item['ID']: 'value='.$item['ID'];?>><?=$item['Type'];?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="form__error">
                                <?= $errors['abonement'] ?>
                            </span>
                            <button type="submit" class="form-control" id="submit-button"
                                name="submit">Оплатить</button>
                        </form>
                    </div>
                </div>              
            </div>
        </div>
        </div>
        </div>

        <!-- SCRIPTS -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/aos.js"></script>
        <script src="../js/smoothscroll.js"></script>
        <script src="../js/custom.js"></script>
    </body>
</main>
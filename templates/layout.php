<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <title>
        <?= htmlspecialchars($title) ?>
    </title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand" href="index.php">OLIMPIA</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="#home" class="nav-link smoothScroll">Основная</a>
                        </li>

                        <li class="nav-item">
                            <a href="#about" class="nav-link smoothScroll">О нас</a>
                        </li>

                        <li class="nav-item">
                            <a href="#class" class="nav-link smoothScroll">Групповые занятия</a>
                        </li>

                        <li class="nav-item">
                            <a href="#schedule" class="nav-link smoothScroll">Расписания</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact" class="nav-link smoothScroll">Контакты</a>
                        </li>
                    </ul>

                    <ul class="social-icon ml-lg-3">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-telegram"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
                <div class="login-bar ml-lg-auto">
                    <ul class=" ml-lg-auto">
                        <li class="nav-item">
                            <a href="sign-in.php" class="nav-link smoothScroll">Sign in</a>
                        </li>

                        <li class="nav-item">
                            <a href="sign-ups.php" class="nav-link smoothScroll">Sign up</a>
                        </li>
                    </ul>

                    <span class="logged-name ">Имя вошедшего</span>

                </div>
            </div>
        </nav>
    </header>

    <?= $content ?>


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
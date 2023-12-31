<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">


    <!-- MAIN CSS -->

    <title>
        <?= htmlspecialchars($title) ?>
    </title>
</head>

<body>

    <header>
        <div class="header-conteiner">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">OLIMPIA</a>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php#home">Основная</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#about">О нас</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#class">Групповые занятия</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#schedule">Расписания</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#contact">Контакты</a></li>
                    </ul>
                </div>

                <div>
                    <?php if (isset($_SESSION['username'])): ?>
                        <div>
                            <a href="profile.php" class="logged-name">
                                <?= htmlspecialchars($_SESSION['username']) ?>
                            </a>
                            <a href="logout.php" class="logged-name">Выход</a>
                        </div>
                    <?php else: ?>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="sign-in.php">Sign-in</a></li>
                            <li class="nav-item"><a class="nav-link" href="sign-ups.php">Sign-up</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </header>
    <div>
        <?= $content ?>
    </div>
    <div class="footer">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p class="text-white">Copyright &copy; 2023 URTK Co.
                            <br>Design: <a href="https://github.com/Sorn221">Sorn</a>
                        </p>
                    </div>
                    <div class="col-sm">
                        <p>
                            <a href="#">fomin.timofey.sistema@yandex.ru</a>
                        </p>
                        <p class="text-white"> +7(922)1889024</p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

</body>

</html>
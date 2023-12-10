<?php
/**
 * Сохраняет заначение поля при POST запросе
 * @param string $name имя поля
 * 
 * @return string значение поля
 */
function getPostVal($name): string
{
    return $_POST[$name] ?? "";
}

/*-----------------------------------------
    ---------------------------------------
    ---------------------------------------
      КЛИЕНТЫ         
  -----------------------------------------
  -----------------------------------------
  -----------------------------------------*/

/**
 * Добавляет клиента в бд
 * @param mysqli $con подключение к базе
 * @param string $name имя
 * @param string $email почта
 * @param string $login логин
 * @param string $password пароль
 * @param string $contact_info контактные данные
 *
 * @return int id добавленного пользователя 
 */
function add_client(string $name, string $email, string $login, string $password, string $contact_info, mysqli $con): int
{
    $temp_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Clients(`Name`, `Email`, `ClientLogin`, `Password`,`Contact`)
            VALUES(?,?,?,?,?);";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        'sssss',
        $name,
        $email,
        $login,
        $temp_password,
        $contact_info
    );
    mysqli_stmt_execute($stmt);
    return $con->insert_id;
}


/**
 * Возвращает список пользователей
 * @param mysqli $con подключение к базе
 *
 * @return array список пользователей 
 */
function get_clients(mysqli $con): array
{
    $sql = "SELECT * FROM Clients";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}


/**
 * Выбирает пользователя из базы данных по его E-mail
 *
 * @param mysqli $con соединение с базой данных
 * @param string $email E-mail пользователя
 *
 * @return array данные пользователя
 */
function get_client_by_email(mysqli $con, string $email): array
{
    $sql = 'SELECT * FROM `Clients`
            WHERE `Email` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $email);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}


/**
 * Получает все абонементы пользователя по его id
 *
 * @param mysqli $con соединение с базой данных
 * @param int $client_id id пользователя
 *
 * @return array список абонементов
 */
function get_сlient_abonement(mysqli $con, int $client_id): array
{
    $sql = 'SELECT `ClientAbonement`.*,`Abonement`.* 
            FROM `ClientAbonement` INNER JOIN `Abonement` 
            ON `ClientAbonement`.`AbonementID` = `Abonement`.`ID`
            WHERE `ClientID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($prepare_values, 'i', $client_id);
    mysqli_stmt_execute($prepare_values);
    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}


/**
 * Получает все тренировки пользователя по его id
 *
 * @param mysqli $con соединение с базой данных
 * @param int $client_id id пользователя
 *
 * @return array список тренировок
 */
function get_сlient_trainers(mysqli $con, int $client_id): array
{
    $sql = 'SELECT `ClientWorkouts`.*,`Workouts`.*
            FROM `ClientWorkouts` INNER JOIN `Workouts` 
            ON `ClientWorkouts`.`WorkoutID` = `Workouts`.`ID`
            WHERE `ClientID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($prepare_values, 'i', $client_id);
    mysqli_stmt_execute($prepare_values);
    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}


/**
 * Выбирает пользователя из базы данных по его логину
 *
 * @param mysqli $con соединение с базой данных
 * @param string $login логин пользователя
 *
 * @return array данные пользователя
 */
function get_client_by_login(mysqli $con, string $login): array
{
    $sql = 'SELECT * FROM `Clients`
            WHERE `ClientLogin` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $login);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}


/**
 * Выбирает пользователя из базы данных по его id
 *
 * @param mysqli $con соединение с базой данных
 * @param string $client_id id пользователя
 *
 * @return array данные пользователя
 */
function get_client_by_id(mysqli $con, int $client_id)
{
    $sql = 'SELECT * FROM `Clients`
             WHERE `ID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 'i', $client_id);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}


/**
 * Добавляет в базу покупку пользователем абонемента
 *
 * @param mysqli $con соединение с базой данных
 * @param int $client_id id пользователя
 * @param int $abonement_id id абонемента
 *
 */
function add_client_abonement(int $client_id, int $abonement_id, mysqli $con)
{
    $today = date("y.m.d h.m");

    $sql = "INSERT INTO `Clientabonement` (`ClientID`, `AbonementID`, `PurchaseDate`)
            VALUES (?,?,?)";

    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'iis', $client_id, $abonement_id, $today);
    mysqli_stmt_execute($stmt);
}

/**
 * Добавляет в базу покупку пользователем тренировки
 *
 * @param mysqli $con соединение с базой данных
 * @param int $client_id id пользователя
 * @param int $train_id id тренировки
 *
 */
function add_client_trains(int $client_id, int $train_id, mysqli $con)
{
    $today = date("y.m.d h.m");

    $sql = "INSERT INTO `ClientWorkouts`(`ClientID`, `WorkoutID`, `BookingDate`)
            VALUES (?,?,?)
    ";

    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'iis', $client_id, $train_id, $today);
    mysqli_stmt_execute($stmt);
}

/*-----------------------------------------
    ---------------------------------------
    ---------------------------------------
      ТРЕНЕРА        
  -----------------------------------------
  -----------------------------------------
  -----------------------------------------*/

/**
 * Возвращает список тренеров
 * @param mysqli $con подключение к базе
 *
 * @return array список тренеров 
 */
function get_trainers(mysqli $con): array
{
    $sql = "SELECT * FROM Trainers";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}


/**
 * Выбирает тренера из базы данных по его логину
 *
 * @param mysqli $con соединение с базой данных
 * @param string $login логин тренера
 *
 * @return array данные тренера
 */
function get_trainer_by_login(mysqli $con, string $login): array
{
    $sql = 'SELECT * FROM `Trainers`
            WHERE `TrainerLogin` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $login);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}


/**
 * Выбирает тренера из базы данных по его id
 *
 * @param mysqli $con соединение с базой данных
 * @param string $trener_id id тренера
 *
 * @return array данные тренера
 */
function get_trener_by_id(mysqli $con, int $trener_id)
{
    $sql = 'SELECT * FROM `Trainers`
             WHERE `ID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 'i', $trener_id);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}


/**
 * Выбирает тренеровки которые ведет конкретный тренер из базы данных по его id
 *
 * @param mysqli $con соединение с базой данных
 * @param string $trener_id id тренера
 *
 * @return array данные тренирвоки
 */
function get_trener_trains(mysqli $con, int $trener_id)
{
    $sql = 'SELECT * FROM `Workouts`
            WHERE `TrainerID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 'i', $trener_id);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}


/**
 * Выбирает историю персональных тренировок для конкретного тренера из базы данных по его id
 *
 * @param mysqli $con соединение с базой данных
 * @param string $trener_id id тренера
 *
 * @return array история тренировок
 */
function get_trains_story(mysqli $con, int $trener_id)
{
    $sql = 'SELECT `ClientWorkouts`.`BookingDate`, `Clients`.`Name` AS ClientName, `Workouts`.`Type`, `Workouts`.`Price`
            FROM ClientWorkouts 
            JOIN Clients ON `ClientWorkouts`.`ClientID` = `Clients`.`ID`
            JOIN `Workouts` ON `ClientWorkouts`.`WorkoutID` = `Workouts`.`ID`
            WHERE `Workouts`.`TrainerID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 'i', $trener_id);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}


/**
 * Добавляет тренера в бд
 * @param mysqli $con подключение к базе
 * @param string $name имя
 * @param string $email почта
 * @param string $number номер телефона
 * @param string $login логин
 * @param string $password пароль
 * @param string $image путь к расположению фотографии
 *
 * @return int id добавленного пользователя 
 */
function add_trener(string $name, string $email, string $number, string $login, string $password, string $image, mysqli $con): int
{
    $temp_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Trainers(`Name`, `Email`, `PhoneNumber`, `TrainerLogin`, `Password`, `Image`)
            VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        'ssssss',
        $name,
        $email,
        $number,
        $login,
        $temp_password,
        $image
    );
    mysqli_stmt_execute($stmt);
    return $con->insert_id;
}


/**
 * Выбирает тренера из базы данных по его E-mail
 *
 * @param mysqli $con соединение с базой данных
 * @param string $email E-mail тренера
 *
 * @return array данные тренера
 */
function get_trener_by_email(mysqli $con, string $email): array
{
    $sql = 'SELECT * FROM `Trainers`
            WHERE `Email` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $email);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}


/*-----------------------------------------
    ---------------------------------------
    ---------------------------------------
      АДМИНЫ        
  -----------------------------------------
  -----------------------------------------
  -----------------------------------------*/


/**
 * Выбирает админа из базы данных по его логину
 *
 * @param mysqli $con соединение с базой данных
 * @param string $login логин админа
 *
 * @return array данные админа
 */
function get_admin_by_login(mysqli $con, string $login): array
{
    $sql = 'SELECT * FROM `Admins`
            WHERE `AdminLogin` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $login);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}

/**
 * Выбирает всех админов из базы данных
 *
 * @param mysqli $con соединение с базой данных
 *
 * @return array данные админа
 */
function get_admins(mysqli $con): array
{
    $sql = "SELECT * FROM Admins";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}


/**
 * Добавляет админа в бд
 * 
 * @param mysqli $con подключение к базе
 * @param string $name имя
 * @param string $email почта
 * @param string $login логин
 * @param string $password пароль
 *
 * @return int id добавленного пользователя 
 */
function add_admin(string $name, string $email, string $login, string $password, mysqli $con): int
{
    $temp_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Admins(`Name`, `Email`, `AdminLogin`, `Password`)
            VALUES(?,?,?,?);";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        'ssss',
        $name,
        $email,
        $login,
        $temp_password
    );
    mysqli_stmt_execute($stmt);
    return $con->insert_id;
}


/**
 * Выбирает админа из базы данных по его E-mail
 *
 * @param mysqli $con соединение с базой данных
 * @param string $email E-mail админа
 *
 * @return array данные админа
 */
function get_admin_by_email(mysqli $con, string $email): array
{
    $sql = 'SELECT * FROM `Admins`
            WHERE `Email` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $email);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}


//остальное


/**
 * Возвращает список тренировок из бд
 * 
 * @param mysqli $con подключение к базе
 *
 * @return array список тренировок 
 */
function get_trains(mysqli $con): array
{
    $sql = 'SELECT * FROM `Workouts`';
    $prepare_values = mysqli_prepare($con, $sql);
    mysqli_stmt_execute($prepare_values);
    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}


/**
 * Возвращает список абонементов из бд
 * 
 * @param mysqli $con подключение к базе
 *
 * @return array список абонементов 
 */
function get_abonements(mysqli $con): array
{
    $sql = 'SELECT * FROM `Abonement`';
    $prepare_values = mysqli_prepare($con, $sql);
    mysqli_stmt_execute($prepare_values);
    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}

/**
 * Добавляет тренировку в бд
 * @param mysqli $con подключение к базе
 * @param string $type Название тренировки
 * @param int $trener_id id тренера
 * @param int $price стоимость
 * @param string $image путь к расположению фотографии
 *
 * @return int id добавленной тренировки 
 */
function add_trains(string $type, int $trener_id, int $price, string $image, mysqli $con): int
{
    $sql = "INSERT INTO Workouts (`Type`, `TrainerID`, `Price`, `Image`)
            VALUES(?,?,?,?);";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        'siis',
        $type,
        $trener_id,
        $price,
        $image
    );
    mysqli_stmt_execute($stmt);
    return $con->insert_id;
}

/**
 * Добавляет тренировку в бд
 * @param mysqli $con подключение к базе
 * @param string $type Название тренировки
 * @param int $trener_id id тренера
 * @param int $price стоимость
 * @param string $image путь к расположению фотографии
 *
 * @return int id добавленной тренировки 
 */
function add_abonements(string $type, int $price, int $days, mysqli $con): int
{
    $sql = "INSERT INTO Abonement (`Type`, `Price`, `ValidDays`)
            VALUES(?,?,?);";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        'sii',
        $type,
        $price,
        $days
    );
    mysqli_stmt_execute($stmt);
    return $con->insert_id;
}

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


// функции для работы с бд

// -------------------------------------------------------------клиенты
// -------------------------------------------------------------
// -------------------------------------------------------------
// -------------------------------------------------------------
// -------------------------------------------------------------

function add_client(string $name, string $email,string $login, string $password, string $contact_info,  mysqli $con): int
{
    $temp_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Clients(`Name`, `Email`, `ClientLogin`, `Password`,`Contact`)
            VALUES(?,?,?,?,?);";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'sssss', 
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
function get_client_by_email(mysqli $con, string $email): array {
    $sql = 'SELECT * FROM `Clients`
            WHERE `Email` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $email);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}
// абонементы для конкретного пользователя
function get_сlient_abonement(mysqli $con, int $client_id): array 
{
    $sql = 'SELECT `ClientAbonement`.*,`Abonement`.* 
            FROM `ClientAbonement` INNER JOIN `Abonement` 
            ON `ClientAbonement`.`AbonementID` = `Abonement`.`ID`
            WHERE `ID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($prepare_values, 'i', $client_id);
    mysqli_stmt_execute($prepare_values);
    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}

// тренировки для конкретного пользователя

function get_сlient_trainers(mysqli $con, int $client_id): array 
{
    $sql = 'SELECT `ClientWorkouts`.*,`Workouts`.*
            FROM `ClientWorkouts` INNER JOIN `Workouts` 
            ON `ClientWorkouts`.`WorkoutID` = `Workouts`.`ID`
            WHERE `ID` = ?';
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
function get_client_by_login(mysqli $con, string $login): array {
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
 * Добавляет в базу
 *
 * @param mysqli $con соединение с базой данных
 * @param int $client_id id пользователя
 * @param int $abonement_id id абонемента
 *
 * @return int id добаленной покупки абонемента
 */
function add_client_abonement(int $abonement_id, int $client_id,  mysqli $con)
{
    $today = date("y.m.d"); 

    $sql = "INSERT INTO `clientabonement`(`ClientID`, `AbonementID`, `PurchaseDate`)
            VALUES (?,?,?)
    ";
    
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 'iis',$client_id, $abonement_id, $today);
    mysqli_stmt_execute($stmt);
    return $con->insert_id;
}

// -------------------------------------------------------------тренера
// -------------------------------------------------------------
// -------------------------------------------------------------
// -------------------------------------------------------------
// -------------------------------------------------------------
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
function get_trainer_by_login(mysqli $con, string $login): array {
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
function get_admins(mysqli $con): array
{
    $sql = "SELECT * FROM Admins";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
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
 * Удаляет тренера из базы данных по его id
 *
 * @param mysqli $con соединение с базой данных
 * @param string $trener_id id тренера
 *
 * 
 */
function deactivate_trener(mysqli $con, int $trener_id)
{
    $sql = 'ALTER TABLE Trainers
            SET Active = 0
            WHERE ID = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 'i', $trener_id);
    mysqli_stmt_execute($prepare_values);
}

// -------------------------------------------------------------админы
// -------------------------------------------------------------
// -------------------------------------------------------------
// -------------------------------------------------------------
// -------------------------------------------------------------
/**
 * Выбирает админа из базы данных по его логину
 *
 * @param mysqli $con соединение с базой данных
 * @param string $login логин админа
 *
 * @return array данные админа
 */
function get_admin_by_login(mysqli $con, string $login): array {
    $sql = 'SELECT * FROM `Admins`
            WHERE `AdminLogin` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 's', $login);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}

/**
 * Возвращает список абонементов из бд
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

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

// запись в бд
// клиенты

function add_client(string $name, string $email,string $login, string $password, string $contact_info,  mysqli $con): int
{
    $temp_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO Clients(`ClientName`, `Email`, `ClientLogin`, `ClientPassword`,`Contact`)
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
// тренера
// админы
// удаление из бд

// чтение из бд

// клиенты
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
function get_client_by_id(mysqli $con, int $client_id)
{
    $sql = 'SELECT * FROM `Clients`
             WHERE `ClientID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($prepare_values, 'i', $client_id);
    mysqli_stmt_execute($prepare_values);

    return mysqli_fetch_assoc(mysqli_stmt_get_result($prepare_values)) ?? [];
}
// тренера
/**
 * Возвращает список тренеров
 * @param mysqli $con подключение к базе
 *
 * @return array список пользователей 
 */
function get_treners(mysqli $con): array
{
    $sql = "SELECT * FROM Trainers";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}

// админы
/**
 * Возвращает список админов
 * @param mysqli $con подключение к базе
 *
 * @return array список пользователей 
 */
function get_admins(mysqli $con): array
{
    $sql = "SELECT * FROM Admins";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}

// абонементы для конкретного пользователя
function get_сlient_abonement(mysqli $con, int $client_id): array 
{
    $sql = 'SELECT `ClientAbonement`.*,`Abonement`.* 
            FROM `ClientAbonement` INNER JOIN `Abonement` 
            ON `ClientAbonement`.`AbonementID` = `Abonement`.`AbonementID`
            WHERE `ClientID` = ?';
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
            ON `ClientWorkouts`.`WorkoutID` = `Workouts`.`WorkoutID`
            WHERE `ClientID` = ?';
    $prepare_values = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($prepare_values, 'i', $client_id);
    mysqli_stmt_execute($prepare_values);
    return mysqli_fetch_all(mysqli_stmt_get_result($prepare_values), MYSQLI_ASSOC) ?? [];
}
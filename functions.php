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

function createClient(mysqli $con, $ClientName, $Email, $ClientLogin, $ClientPassword, $Contact): int
{
    $sql = "";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, $ClientName, $Email, $ClientLogin, $ClientPassword, $Contact);
    mysqli_stmt_execute($stmt);
    return $con->insert_id;
}
// тренера
// админы
// удаление из бд

// чтение из бд
// клиенты
function get_users(mysqli $con): array
{
    $sql = "SELECT * FROM Clients";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}
// тренера
function get_treners(mysqli $con): array
{
    $sql = "SELECT * FROM Trainers";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}

// админы
function get_admins(mysqli $con): array
{
    $sql = "SELECT * FROM Admins";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}

// тренировки для конкретного пользователя
function get_сlient_abonement(mysqli $con, int $client_id): array
{
    $sql = "SELECT * FROM ClientAbonement WHERE ClientID == ?";
    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}

// абонементы для конкретного пользователя
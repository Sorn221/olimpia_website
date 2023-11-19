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
//функции для работы с бд

<?php
session_start();

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

const HOST = 'localhost';
const LOGIN = 'root';
const PASSWORD = '';
const DB_NAME = 'olimpia';

$con = mysqli_connect(HOST, LOGIN, PASSWORD, DB_NAME);
mysqli_set_charset($con, "utf8");
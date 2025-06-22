<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "Asokaram2022";
$database = "php_colorful09af";
$port = 3306;

mysqli_report(MYSQLI_REPORT_OFF);

$connection = mysqli_connect(
    $hostname,
    $username,
    $password,
    $database,
    $port
);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

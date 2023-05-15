<?php

$db_host ="localhost";
$db_name ="GYM_v2";
$db_user="root";
$db_pass="poop";
$db_port="8889";

$dsn = "mysql:host={$db_host};dbname={$db_name};chartset=utft8mb4";
// $dsn = "mysql:host={$db_host};port={$db_port};dbname={$db_name};chartset=utft8mb4";

// create a "connecting object"
// https://www.php.net/manual/en/class.pdo.php
// $pdo = new PDO($dsn, $db_user, $db_pass);

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch(PDOException $ex){
    echo $ex->getMessage();
}

<?php

$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "bnsp_hotel";
// perintah php untuk akses ke database
$connect = mysqli_connect($host, $user, $password, $database);

if ($connect->error) {
    echo "error bang: {$connect->error}";
}
// try {
//     $dbh = new PDO("mysql:host=localhost;dbname=db_buyapps-project2, root, " .  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// } catch (PDOException $e) {
//     exit("Error: " . $e->getMessage());
// }

// $conn = mysqli_connect('localhost', 'root', '', 'db_buyapps-project2');

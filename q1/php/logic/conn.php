<?php

// local Database Connection (Development)
// $host = '127.0.0.1';
// $db = 'food_menu';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';


// // Remote Database Connection (Production)
// $host = 'db4free.net';
// $db = 'food_menu';
// $user = 'udiprai1';
// $pass = 'udiprai1';
// $charset = 'utf8mb4';

$host = 'sql6.freemysqlhosting.net';
$db = 'sql6490092';
$user = 'sql6490092';
$pass = 'lthUVX4LnF';
$charset = 'utf8mb4';

$conn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($conn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Hello Database";
} catch (PDOException $ex) {
    // echo "No Database Found";
    throw new PDOException($ex->getMessage());
}

require_once 'crud.php';
$crud = new crud($pdo);
<?php 
    //$host = 'server.samojeden.info';
    $host = 'remotemysql.com';
    //$db = 'attendance';
    $db = 'mSw471Q5Sf';
    //$user = 'root';
    $user = 'mSw471Q5Sf';
    //$pass = 'qxvqxv1991';
    $pass = 'JcRLRyUS02';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Hello Database";
        //przechwytuje nasz error i zapisuje do zmiennej $e 
    } catch(PDOException $e) {
        //throw - zatrzymuje wykonywanie funkcji i wyświetla error za pomocą funkcji getMessage
        echo "<h1 class='text-danger'>No datbase found</h1>";
        throw new PDOException($e->getMessage());

    }

    require_once 'crud.php';
    $crud = new crud($pdo);


?>
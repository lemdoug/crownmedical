<?php
    // Development Connection
    $host = 'localhost';
    $db = 'crownmedical_db';
    $dbuser = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    //Remote Database Connection
    // $host = 'remotemysql.com';
    // $db = 'pX2duJX6zr';
    // $dbuser = 'pX2duJX6zr';
    // $pass = 'nvzl8bKGmi';
    // $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $dbuser, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       // echo 'Hello DB';
    } catch(PDOException $e) {
        //echo "<h1 class = 'text-danger'>Database not found</h1>";
    throw new PDOException($e->getMessage());
}

        require_once 'crud.php';
        require_once 'users.php';
        $crud = new crud($pdo);
        $user = new user($pdo);

        $user->insertUser("admin","password");

?>


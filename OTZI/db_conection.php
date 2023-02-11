<?php

    $server ='localhost:3307';
    $username ='root';
    $password ='123456';
    $database ='login_otzi_database';

try{
    $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}   catch (PDOException $e) {
    die('Connection Failed: '. $e->getMessage());
}


?>
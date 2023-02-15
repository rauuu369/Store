<?php
    /*Variables for connecting to the database*/
    $server ='localhost:3307';
    $username ='root';
    $password ='123456';
    $database ='login_otzi_database';
    /*Connection to the database*/
try{
    $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
}   catch (PDOException $e) {  /*In case of error, show error message.*/
    die('Connection Failed: '. $e->getMessage());
}


?>
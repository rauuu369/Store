<?php
    /*Variables for connecting to the database*/
    $server ='localhost:3307';
    $username ='root';
    $password ='123456';
    $database ='login_otzi_database';
    /*Connection to the database*/
    $conexion=mysqli_connect($server,$username,$password,$database);
    /*If the connection fails, send an error message*/
    if (!$conexion) {
        die("Failed connection")
    }
    
?>
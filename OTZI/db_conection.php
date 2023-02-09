<?php

$conexion = mysqli_connect('localhost:3307','root','123456','user_registro');//Creamos la conexion de la base de datos.
//("host, username, password, Base de datos")

//Verificamos que la conexion se realize correctamente
if(!$conexion){
    die("Conexion fallida");
}

?>
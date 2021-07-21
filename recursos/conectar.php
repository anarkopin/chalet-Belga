<?php

$servidor="localhost";
$usuario="root";
$clave="";
$baseDatos="formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
mysqli_set_charset($enlace, "utf8");


if(!$enlace) {
    echo"Error en la conexion con el servidor";
}



<?php

include ("conexion.php");

$legajo = $_POST['legajo'];
$tipoUsuario = $_POST['tipoUsuario'];
$email = $_POST['email'];
$contrasena = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

if($tipoUsuario == "alumno" ){

$sql = "UPDATE alumno SET legajo = '$legajo', tipoUsuario = '$tipoUsuario', email = '$email', contraseña = '$contrasena', nombre = '$nombre', apellido = '$apellido' WHERE legajo = '$legajo'";
$resultado = mysqli_query($link, $sql);
}

if($tipoUsuario == "docente" ){

$sql = "UPDATE docente SET legajo = '$legajo', tipoUsuario = '$tipoUsuario',email = '$email', contraseña = '$contrasena', nombre = '$nombre', apellido = '$apellido' WHERE legajo = '$legajo'";
$resultado = mysqli_query($link, $sql);
    }

if($tipoUsuario == "administrador" ){

$sql = "UPDATE administrador SET legajo = '$legajo', tipoUsuario = '$tipoUsuario',email = '$email', contraseña = '$contrasena', nombre = '$nombre', apellido = '$apellido' WHERE legajo = '$legajo'";
$resultado = mysqli_query($link, $sql);
}

echo ("El ". $tipoUsuario. " se ha modificado con exito !");



?>

















<?php
include ("conexion.php");

$tipoUsuario = $_POST['tipoUsuario'];
$legajo = $_POST['legajo'];
$email = $_POST['email'];
$contrasena = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

if ($tipoUsuario == "docente"){
    $sql = ("INSERT into docente ( tipoUsuario, legajo, email, contraseña, nombre, apellido)
     values ('$tipoUsuario','$legajo', '$email', '$contrasena','$nombre', '$apellido')");

    mysqli_query( $link, $sql) or die (mysqli_error($link));
}
else if 
    ( $tipoUsuario == "alumno") {
    $sql = ("INSERT into alumno (tipoUsuario, legajo, email, contraseña, nombre, apellido)
     values ('$tipoUsuario','$legajo', '$email', '$contrasena','$nombre', '$apellido')");

    mysqli_query( $link, $sql) or die (mysqli_error($link));

}
else if 
    ( $tipoUsuario == "administrador") {
        $sql = ("INSERT into administrador (tipoUsuario, legajo, email, contraseña, nombre, apellido)
         values ('$tipoUsuario','$legajo', '$email', '$contrasena','$nombre', '$apellido')");
    
        mysqli_query( $link, $sql) or die (mysqli_error($link));
}
header("Location: ListadoUsuarios.php");


mysqli_close($link);








?>

<?php
include ("conexion.php");

$tipoUsuario = $_POST['tipoUsuario'];
$legajo = $_POST['legajo'];
$email = $_POST['email'];
$contrasena = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

if (validar($legajo, $email, $contrasena, $nombre, $apellido)) { 

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


mysqli_close($link); }

else {
    header ("Location: errorValidacion.php");
}



function validar ($legajo, $email, $contrasena, $nombre, $apellido){
    $band = true;

    if(!isset ($legajo)){
        $band = false;
    }
    else if(preg_match("{5}", $legajo) == 0){
        $band = false;
    }
    else if(!is_numeric($legajo)){
        $band = false;
    }

    if (!isset ($email)){
        $band = false;
    }


    if(!isset($contrasena)){
        $band = false;
    }
    else if(preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,10}$/", $contrasena)== 0 ){
        $band = false;
    }

    if(!isset($nombre)){
        $band = false;
    }
    else if (!is_string($nombre)){
        $band = false;
    }
    if(!isset($apellido)){
        $band = false;
    }
    else if (!is_string($apellido)){
        $band = false;
    }
    
return $band;
}




?>

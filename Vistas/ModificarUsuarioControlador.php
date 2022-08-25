<?php

include ("conexion.php");

$legajo = $_POST['legajo'];
$tipoUsuario = $_POST['tipoUsuario'];
$email = $_POST['email'];
$contrasena = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

if($_SESSION['usuario'] -> getTipoUsuario() == "administrador"){

if (validar($legajo, $email, $contrasena, $nombre, $apellido)){


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

header ("Location: ListadoUsuarios.php");

}

else{
    header("Location: errorValidacion.php");
}

function validar ($legajo, $email, $contrasena, $nombre, $apellido){
    $band = true;

    if(!isset ($legajo)){
        $band = false;
   
    }
    else if(preg_match("{5}", $legajo)== 0){
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
    else if(preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,10}$/", $contrasena)== 0){
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
}
else {
    header("Location: AccesoDenegado.php");
}
?>

















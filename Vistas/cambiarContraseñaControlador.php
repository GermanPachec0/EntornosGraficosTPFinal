<?php
include ("usuario.php");
session_start();
$myUser= new Usuario();
$myUser = $_SESSION['usuario']; 
$passNueva = $_POST['passNueva'];
$pattern = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/";

if(($myUser -> getContrasenia()) === $_POST['passAnt'] )
{
    if(preg_match($pattern, $passNueva) == 1)
    {
        $legajo = $myUser -> getLegajo();
        ActualizarContrasenia($legajo,$passNueva);
        header("Location: cambioContraseniaExitoso.php");  
        $_POST['passNueva'] = null;
        $_POST['passAnt'] = null;
        $passNueva = null;
        
    }
    else {
        header("Location: errorCambioContrasenia.php");    }
}
else{
    header("Location: errorCambioContrasenia.php");
}

function ActualizarContrasenia($leg,$passNueva)
{
    include ("conexion.php");
    $sql = "UPDATE docente SET contraseña = '$passNueva' WHERE legajo = '$leg'";
    $resultado = mysqli_query($link, $sql);
    mysqli_query( $link, $sql) or die (mysqli_error($link));
}


?>
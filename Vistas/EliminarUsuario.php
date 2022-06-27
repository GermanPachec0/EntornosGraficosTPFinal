<?php

$legajo = $_POST['legajo'];
$tipoUsuario = $_POST['tipoUsuario'];

if ($tipoUsuario == 'alumno'){
    $sql = "DELETE * FROM alumno WHERE legajo = '$legajo' ";
    $resultado = mysqli_query($link, $sql);
}
if ($tipoUsuario == 'docente'){
    $sql = "DELETE * FROM docente WHERE legajo = '$legajo' ";
    $resultado = mysqli_query($link, $sql);
}
if ($tipoUsuario == 'administrador'){
    $sql = "DELETE * FROM administrador WHERE legajo = '$legajo' ";
    $resultado = mysqli_query($link, $sql);
}

echo ("El ". $tipoUsuario. " se ha borrado con exito ! ");

?>
<?php

include("conexion.php");

$tipoUsuario = $_POST['tipoUsuario'];
$legajo = $_POST['legajo'];
$email = $_POST['email'];
$contrasena = $_POST['contraseña'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];





if ($tipoUsuario == "alumno") {
    $sql = "SELECT FROM alumnos WHERE legajo = '$legajo' ";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    $fila = mysqli_fetch_array($resultado);
    if ($resultado == 0){
        echo ("No hay alumnos con ese legajo");
        echo ("<A href='ModificarUsuario.php'> VOLVER ATRAS </A>");
    }
    else {
        $sql2 = "UPDATE alumnos SET  email = '$email', contraseña = '$contrasena', nombre = '$nombre', apellido = '$apellido' 
        WHERE legajoAlumno = '$legajo'; ";
        mysqli_query($link, $sql2) or die(mysqli_error($link));

        echo ("El alumno se modifico con exito !");

    }

}
if ($tipoUsuario == "profesor") {
    $sql = "SELECT FROM docente WHERE legajoDocente = '$legajo' ";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    $fila = mysqli_fetch_array($resultado);
    if ($resultado == 0){
        echo ("No hay Docentes con ese legajo");
        echo ("<A href='ModificarUsuario.php'> VOLVER ATRAS </A>");
    }
    else {
        $sql2 = "UPDATE alumnos SET  email = '$email', contraseña = '$contrasena', nombre = '$nombre', apellido = '$apellido' 
        WHERE legajoDocente = '$legajo'; ";
        mysqli_query($link, $sql2) or die(mysqli_error($link));

        echo ("El profesor se modifico con exito !");

    }

}
if ($tipoUsuario == "administrador") {
    $sql = "SELECT FROM administrador  WHERE legajoAdmin = '$legajo' ";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));

    $fila = mysqli_fetch_array($resultado);
    if ($resultado == 0){
        echo ("No hay administradores con ese legajo");
        echo ("<A href='ModificarUsuario.php'> VOLVER ATRAS </A>");
    }
    else {
        $sql2 = "UPDATE alumnos SET  email = '$email', contraseña = '$contrasena', nombre = '$nombre', apellido = '$apellido' 
        WHERE legajoAdmin = '$legajo'; ";
        mysqli_query($link, $sql2) or die(mysqli_error($link));

        echo ("El administrador se modifico con exito !");

    }

}


mysqli_close($link);

?>
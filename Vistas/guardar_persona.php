<?php
include_once "conexion.php";
include_once "usuario.php";
$estudiante = new Usuario($_POST["legajo"], $_POST["email"],$_POST["contrasenia"],$_POST["nombre"],$_POST["apellido"],$_POST["tipoUsuario"]);
$estudiante->guardar();
header("Location: ListadoUsuario.php");

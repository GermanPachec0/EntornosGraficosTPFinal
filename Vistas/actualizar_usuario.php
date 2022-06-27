<?php
include_once "conexion.php";
include_once "usuario.php";
$materia = new Usuario($_POST["legajo"], $_POST["email"],$_POST["contrasenia"],$_POST["nombre"],$_POST["apellido"],$_POST["tipoUsuario"]);
$materia->actualizar();
header("Location: mostrar_materias.php");
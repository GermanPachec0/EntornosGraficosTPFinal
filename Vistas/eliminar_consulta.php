<?php
include_once "conexion.php";
include_once "adminControlador.php";
consulta::eliminar($_GET["idMateria"]);
header("Location: ListadoConsultasAdmin.php");

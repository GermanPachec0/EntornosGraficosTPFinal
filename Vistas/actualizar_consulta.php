<?php
include_once "conexion.php";
include_once "consulta.php";
$estudiante = new consulta($_POST["idMateria"], $_POST["legajoDocente"], $_POST["fechayhoraAlt"],$_POST["idConsulta"],$_POST["estado"],$_POST["enlaceZoom"],$_POST["cupo"]);
$estudiante->actualizar();
header("Location: listadoConsultasAdmin.php");

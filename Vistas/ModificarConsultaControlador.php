<?php

include("conexion.php");
$IDconsulta = $_POST['IDconsulta'];
$docente = $_POST['docente'];
$materia= $_POST['materia'];
$fechayhora = $_POST['fechayhora'];
$estado = $_POST['estado'];
$enlaceZoom = $_POST['enlaceZoom'];
$cupo = $_POST['cupo'];
$idMateria = $_POST['idMateria'];


$sql1 = "UPDATE consulta SET legajoDocente ='$docente ' , idMateria = '$idMateria', 
fechayhora = '$fechayhora', estado = '$estado', enlaceZoom = '$enlaceZoom', cupo = '$cupo'
WHERE  (idConsulta = '$IDconsulta') (legajoDocente = '$docente') and (idMateria = '$idMateria');";

mysqli_query($link, $sql1) or die(mysqli_error($link));
mysqli_close($link);
header ("Location: ListadoConsultasAdmin.php");

?>
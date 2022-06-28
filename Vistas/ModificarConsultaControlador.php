<?php

include("conexion.php");

$IDconsulta = $_POST['IDconsulta'];
$docente = $_POST['docente'];
$idDocente = $_POST['idDocente'];
$materia = $_POST['materia'];
$fechayhora = $_POST['fechayhora'];
$fechayhoraAlt = $_POST['fechayhoraAlt'];
$estado = $_POST['estado'];
$motivoBloqueo = $_POST['motivoBloqueo'];
$enlaceZoom = $_POST['enlaceZoom'];
$cupo = $_POST['cupo'];
$idMateria = $_POST['idMateria'];

$sql12 = "UPDATE consulta SET legajoDocente ='$idDocente' , idMateria = '$idMateria', 
fechayhora = '$fechayhora', estado = '$estado', enlaceZoom = '$enlaceZoom', cupo = '$cupo'
 WHERE (idConsulta = '$IDconsulta') and (legajoDocente = '$idDocente') and (idMateria = '$idMateria');";
mysqli_query($link, $sql12) or die(mysqli_error($link));


echo ("La consulta se modifico con exito !");


mysqli_close($link);
header ("Location: ListadoConsultasAdmin.php");

?>
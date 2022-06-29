<?php
include("conexion.php");
$docente = $_POST['docente'];
$materia= $_POST['materia'];
$fechayhora = $_POST['fechayhora'];
$estado = $_POST['estado'];
$enlaceZoom = $_POST['enlaceZoom'];
$cupo = $_POST['cupo'];

$sql = "INSERT INTO consulta (legajoDocente,idMateria, fechayhora, estado, enlaceZoom, cupo)
 VALUES ('$docente', '$materia', '$fechayhora', '$estado', '$enlaceZoom', '$cupo');";

mysqli_query($link, $sql) or die (mysqli_error($link));
mysqli_close($link);
header("Location: ListadoConsultasAdmin.php");
?>



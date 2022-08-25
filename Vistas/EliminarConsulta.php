<?php
include ("conexion.php");

$IDconsulta = $_POST['IDconsulta'];
    $sql4 = "DELETE  FROM consulta WHERE idConsulta = '$IDconsulta' ";
    $resultado = mysqli_query($link, $sql4);
header("Location: ListadoConsultasAdmin.php ");
mysqli_close($link);
?>
<?php

include("conexion.php");

$IDconsulta = $_POST['IDconsulta'];
$docente = $_POST['docente'];
$materia = $_POST['materia'];
$fechayhora = $_POST['fechayhora'];
$fechayhoraAlt = $_POST['fechayhoraAlt'];
$estado = $_POST['estado'];
$motivoBloqueo = $_POST['motivoBloqueo'];
$enlaceZoom = $_POST['enlaceZoom'];
$cupo = $_POST['cupo'];



$sql2 = "UPDATE consulta SET  IDconsulta = '$IDconsulta', docente = '$docente', materia = '$materia', fechayhora= '$fechayhora'
 ,fechayhoraAlt= '$fechayhoraAlt' ,estado= '$estado' ,motivoBloqueo= '$motivoBloqueo' ,enlaceZoom= '$enlaceZoom',cupo= '$cupo'
        WHERE IDconsulta = '$IDconsulta'; ";
        mysqli_query($link, $sql2) or die(mysqli_error($link));

        echo ("El alumno se modifico con exito !");


mysqli_close($link);

?>
<?php

include('conexion.php'); 
 $idConsulta = $_POST['idConsulta'];
$vSql = "UPDATE consulta SET estado = 'bloqueado' WHERE idConsulta = '$idConsulta'";
mysqli_query($link,$vSql)  or die (mysqli_error($link));;

setcookie("consulta",$idConsulta,time()*60);
header("Location: ReprogramarConsulta.php?consulta='$idConsulta'");

?>
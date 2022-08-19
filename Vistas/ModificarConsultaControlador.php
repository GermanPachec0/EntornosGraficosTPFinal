<?php

include("conexion.php");

if(isset($_POST['idDocente2']))
{
    $idDocente = $_POST['idDocente2'];
}
else{

    $idDocente = $_POST['idDocente'];
}



if (isset($_POST['idMateria2']))
{
   $idMateria = $_POST['idMateria2'];
}
else{

    $idMateria = $_POST['idMateria'];
}

echo($idDocente);
$IDconsulta = $_POST['IDconsulta'];

$fechayhora = $_POST['fechayhora'];
$estado = $_POST['estado'];
$enlaceZoom = $_POST['enlaceZoom'];
$cupo = $_POST['cupo'];

$sql1 = "UPDATE consulta SET legajoDocente ='$idDocente' , idMateria = '$idMateria', 
fechayhora = '$fechayhora', estado = '$estado', enlaceZoom = '$enlaceZoom', cupo = '$cupo'
WHERE  (idConsulta = '$IDconsulta') ;";

mysqli_query($link, $sql1) or die(mysqli_error($link));

header ("Location: ListadoConsultasAdmin.php");

?>
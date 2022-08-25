<?php
include ("conexion.php");

$IDconsulta = $_POST['IDconsulta'];

if ($_SESSION['usuario'] -> getTipoUsuario() == "administrador"){

    $sql4 = "DELETE  FROM consulta WHERE idConsulta = '$IDconsulta' ";
    $resultado = mysqli_query($link, $sql4);

}
else {
    header("Location: AccesoDenegado.php");
}

header("Location: ListadoConsultasAdmin.php ");
mysqli_close($link);
?>
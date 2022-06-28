<?php

$IDconsulta = $_POST['IDconsulta'];



    $sql4 = "DELETE * FROM consulta WHERE idConsulta = '$IDconsulta' ";
    $resultado = mysqli_query($link, $sql4);


echo ("El idConsulta :". $IDconsulta. " se ha borrado con exito ! ");

?>
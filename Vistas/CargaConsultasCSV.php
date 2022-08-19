<?php
require('conexion.php');
$tipo       = $_FILES['excel']['type'];
$tamanio    = $_FILES['excel']['size'];
$archivotmp = $_FILES['excel']['tmp_name'];
$lineas     = file($archivotmp);


$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

        $datos = explode(";", $linea);
       
        $legajo = !empty($datos[0])  ? ($datos[0]) : '';
		$idMateria = !empty($datos[1])  ? ($datos[1]) : '';
        $fechayhora = !empty($datos[2])  ? ($datos[2]) : '';
        $fechayhoraAlt = !empty($datos[3])  ? ($datos[3]) : '';
        $estado = !empty($datos[4])  ? ($datos[4]) : '';
        $motivoBloqueo = !empty($datos[5])  ? ($datos[5]) : '';
        $enlaceZoom = !empty($datos[6])  ? ($datos[6]) : '';
        $cupo =  !empty($datos[7])  ? ($datos[7]) : '';



    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}

?>
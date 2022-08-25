<?php
require('conexion.php');



if(isset($_FILES['excel']))
{

    $tipo = $_FILES['excel']['type'];
    $tamanio = $_FILES['excel']['size'];
    $archivotmp = $_FILES['excel']['tmp_name'];
    $lineas = file($archivotmp);
    $i = 0;
    foreach ($lineas as $linea) {
        $cantidad_registros = count($lineas);
        $cantidad_regist_agregados =  ($cantidad_registros - 1);
    
        if ($i != 0) {
    
            $datos = explode(",", $linea);
            $docente = intval(!empty($datos[0])  ? ($datos[0]) : '');
            $materia = strval(!empty($datos[1])  ? ($datos[1]) : '');
            $materia = BuscarIDMateria($materia);
            $fechayhora =  strval(!empty($datos[2])  ? ($datos[2]) : '') ;
            $estado = !empty($datos[3])  ? ($datos[3]) : '';
            $enlaceZoom = !empty($datos[4])  ? ($datos[4]) : '';
            $cupo =  intval(!empty($datos[5])  ? ($datos[5]) : '');
    
            $sql = "INSERT INTO consulta (legajoDocente,idMateria, fechayhora, estado, enlaceZoom, cupo)
            VALUES ('$docente', '$materia', '$fechayhora', '$estado', '$enlaceZoom', '$cupo');";
    
             mysqli_query($link, $sql) or die (mysqli_error($link));
        
        }
    
          echo '<div>'. $i. "). " .$linea.'</div>';
        $i++;
    }
    header("Location: ListadoConsultasAdmin.php");
    mysqli_close($link);

}
else{
    header("Location: ListadoConsultasAdmin.php");
}
  
function BuscarIDMateria($materia)
{
    require('conexion.php');
    $vSql = "SELECT * FROM materia
    where nombre  like '%".$materia."%';";
    $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
    $fila = mysqli_fetch_array($vResultado);
    return $fila[0];
}

?>
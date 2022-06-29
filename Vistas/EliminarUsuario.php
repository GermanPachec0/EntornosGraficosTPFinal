<?php

include ("conexion.php");

$legajo = $_POST['legajo'];
$tipoUsuario = $_POST['tipoUsuario'];

 $vsql = "SELECT * 
 from consulta c 
 where c.legajoDocente = '$legajo'";
 $results = mysqli_query($link, $vsql);
 $cant = mysqli_num_rows($results);

 if($cant > 0)
 {
    header("Location: ErrorAlBorrarDatos.php");
 }
 else if ($tipoUsuario == 'alumno'){
    

    $sql = "DELETE FROM alumno WHERE legajo = '$legajo' ";
    $resultado = mysqli_query($link, $sql);
    header("Location: ListadoUsuarios.php ");
}
else if ($tipoUsuario == 'docente'){

    $sql = "DELETE  FROM docente WHERE legajo = '$legajo' ";
    $resultado = mysqli_query($link, $sql);
    header("Location: ListadoUsuarios.php ");
}
else if ($tipoUsuario == 'administrador'){
    $sql = "DELETE  FROM administrador WHERE legajo = '$legajo' ";
    $resultado = mysqli_query($link, $sql);
    header("Location: ListadoUsuarios.php ");
}




?>
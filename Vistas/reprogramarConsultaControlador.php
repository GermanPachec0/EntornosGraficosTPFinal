<?php 
    session_start();
    include('conexion.php'); 
    $idConsulta = $_POST['idConsulta'];
    $motivo = $_POST['motivo'];
    $fecha = $_POST ['fecha'];

    if($_SESSION['usuario'] -> getTipoUsuario() == "docente")
    {
    $vSql = "UPDATE consulta SET fechayhoraAlt = '$fecha', motivoBloqueo = '$motivo', estado = 'bloqueado'  WHERE idConsulta = '$idConsulta'";
    mysqli_query($link,$vSql)  or die (mysqli_error($link));
    NotificarAlumno($idConsulta);


    function NotificarAlumno($idC)
    {
        include('conexion.php'); 
        $vSql= "SELECT a.email, a.nombre,a.apellido, m.nombre FROM inscripcion i
        INNER JOIN alumno a
        on i.legajoAlumno = a.legajo
        INNER JOIN materia m
        on m.idMateria = i.idMateria
        WHERE idConsulta = '$idC';";
        $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
        $asunto = "Consulta Reprogramada";
        while($fila = mysqli_fetch_array($vResultado))
        {
            $message= "Estimado: ". $fila[1]." ".$fila[2]." ". "Este mensaje es para avisarle que la fecha de su consulta de '$fila[3]' fue reprogramada para el día: ". $fecha;
            mail($fila[0],$asunto,$message);
        }
            
    }
}else {
    header("Location: AccesoDenegado.php.php");
}
  

                header("Location: ConsultasDocentes.php");
                

                
            
?>
         
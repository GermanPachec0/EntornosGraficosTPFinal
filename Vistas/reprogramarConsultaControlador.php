<?php 
          
    include('conexion.php'); 
    $idConsulta = $_POST['idConsulta'];
    $motivo = $_POST['motivo'];
    $fecha = $_POST ['fecha'];

    $vSql = "UPDATE consulta SET fechayhoraAlt = '$fecha', motivoBloqueo = '$motivo', estado = 'bloqueado'  WHERE idConsulta = '$idConsulta'";
    mysqli_query($link,$vSql)  or die (mysqli_error($link));
    NotificarAlumno($idConsulta);


    function NotificarAlumno($idC)
    {
        include('conexion.php'); 
        $vSql= "SELECT a.email, a.nombre,a.apellido FROM inscripcion i
        INNER JOIN alumno a
        WHERE idConsulta = '$idC';";
        $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
        $asunto = "Consulta Reprogramada";
        while($fila = mysqli_fetch_array($vResultado))
        {
            $message= "Estimado: ". $fila[1]." ".$fila[2]." ". "Este mensaje es para avisarle que la fecha de su consulta fue reprogramada para el día: ". $fecha;
            mail($fila[0],$asunto,$message);
        }
            
    }

                header("Location: ConsultasDocentes.php");
                

                
            
?>
         
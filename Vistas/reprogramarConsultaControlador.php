<?php 
          
                include('conexion.php'); 
                $idConsulta =  $_COOKIE['consulta'];
                $motivo = $_POST['motivo'];
                $fecha = $_POST ['fecha'];
                echo $fecha;
                $vSql = "UPDATE consulta SET fechayhoraAlt = '$fecha', motivoBloqueo = '$motivo' WHERE idConsulta = '$idConsulta'";
                mysqli_query($link,$vSql)  or die (mysqli_error($link));
                header("Location: ConsultasDocentes.php")
                

                
            
?>
         
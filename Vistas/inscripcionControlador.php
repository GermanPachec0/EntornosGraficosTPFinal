<?php
include ("usuario.php");
session_start();

$myUser= new Usuario();
        if(isset($_SESSION['usuario']))
        {
        $myUser = $_SESSION['usuario']; 
        
       if(validarInscripcion($myUser->getLegajo(),$_POST['idConsulta']))
       {
        if($_POST['cupo'] >= 1)
            {
                if($_POST['estado'] != "bloqueado")
                {
                    actualizarCupo($_POST['idConsulta']);
                    inscribirAlumno($_POST['idConsulta'], $_POST['legajoDoc'],$_POST['idMateria'],$myUser->getLegajo());
                    header("Location: ConsultaAlumnos.php");
                }else{
                    header("Location: errorCupoInsuficiente.php");
                }
            }
        else{

            header("Location: errorCupoInsuficiente.php");
        }    

       }else
       {
        header("Location: errorUsuarioyaInscripto.php");
       }
        
        echo "<br>";
        echo $_POST['legajoDoc'];
        echo "<br>";

        echo $_POST['idMateria'];

        }
        else{
            header("Location: errorInscripcion.php");
            
        }
        //DESCONTAR CUPO DE LA CONSULTA
    function actualizarCupo($idConsulta)
    {
        include("conexion.php");
        $vSql = "UPDATE consulta SET cupo = cupo - 1 WHERE (idConsulta = '$idConsulta')";
        $vResultado = mysqli_query($link,$vSql)  or die (mysqli_error($link));;
    }
    //VALIDAR QUE EL ALUMNO YA NO ESTA INSCRIPTO
    function validarInscripcion($legajoAlu,$idConsulta)
    {
        include("conexion.php");
        $vSql = "SELECT * FROM inscripcion
        where idConsulta = '$idConsulta' and legajoAlumno = $legajoAlu;";

        $result = mysqli_query($link,$vSql)  or die (mysqli_error($link));;
        $cant = mysqli_num_rows($result);

        if($cant == 0)
        {
            return true;
        }else
        {
            return false;
        }


    }
    //REALIZAR LA INSCRIPCION
    function inscribirAlumno($idConsulta,$legajoDoc,$idMateria,$legajoAlumno)
    {
        include("conexion.php");
        $vSql = "INSERT INTO inscripcion (idConsulta,legajoAlumno,legajoDocente,idMateria) VALUES ('$idConsulta', '$legajoAlumno', '$legajoDoc', '$idMateria');";
        mysqli_query($link,$vSql)  or die (mysqli_error($link));;
    }


?>
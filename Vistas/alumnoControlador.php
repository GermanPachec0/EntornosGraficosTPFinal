<?php
    include('conexion.php');
        
    if(isset($_POST["idConsulta"]) && isset($_POST["id"]))
    {   
        $idCons = $_POST["idConsulta"];
        $vSql = "UPDATE consulta SET cupo = cupo + 1 WHERE (idConsulta = '$idCons')";
        $vResultado = mysqli_query($link,$vSql)  or die (mysqli_error($link));;

        $id = $_POST["id"];
        $vSql = "DELETE FROM inscripcion WHERE (idInscripcion = '$id');";
        $vResultado = mysqli_query($link,$vSql)  or die (mysqli_error($link));;
        mysqli_close($link);
        header("Location: ConsultaAlumnos.php");

    }

 



    function getMisConsultas()
    {
        
        include('conexion.php');    
        $myUser= new Usuario();
        $myUser = $_SESSION['usuario'];
        $legajo = $myUser -> getLegajo();
        $vSql = "select c.idConsulta,d.nombre,d.apellido,m.nombre,c.fechayhora,c.fechayhoraAlt,c.estado,c.motivoBloqueo,c.enlaceZoom,c.cupo, insc.idInscripcion  from inscripcion insc
        inner join consulta c
        on insc.idConsulta = c.idConsulta
        and insc.legajoDocente = c.legajoDocente
        and insc.idMateria = c.idMateria
        inner join docente d
        on d.legajo = c.legajoDocente
        inner join materia m 
        on m.idMateria = c.idMateria
        where insc.legajoAlumno = '$legajo';";
        $vResultado = mysqli_query($link,$vSql)  or die (mysqli_error($link));;
        mysqli_close($link);
        return $vResultado;

    }      



?>
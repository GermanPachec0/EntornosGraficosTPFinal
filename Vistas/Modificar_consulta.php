<?php 
  include("./usuario.php");
  session_start();
  if(isset($_SESSION['usuario']))
  {
      $myUser= new Usuario();
      $myUser = $_SESSION['usuario'];
    if($myUser -> getTipoUsuario() == "administrador")
    {
      include("template/menuAdmin.php");
    }
    else if ($myUser -> getTipoUsuario() == "docente")
    {
    include("template/menuDocente.php");
    }
    else if ($myUser -> getTipoUsuario() == "alumno")
    {
    include("template/menuAlumno.php");
    }
  } 
  else{
    include("template/menuVisitante.php");
  }
?>

<?php include 'template/menuAdmin.php';


$IDconsulta = $_POST['IDconsulta'];
$docente = $_POST['docente'];
$materia = $_POST['materia'];
$fechayhora = $_POST['fechayhora'];
$fechayhoraAlt = $_POST['fechayhoraAlt'];
$estado = $_POST['estado'];
$motivoBloqueo = $_POST['motivo'];
$enlaceZoom = $_POST['enlaceZoom'];
$cupo = $_POST['cupo'];
$idDocente = $_POST['idDocente'];
$profesorYid = $_POST['profesorYid'];
?>

<?php 
function getDocente(){
    include ("conexion.php");
    $vSql= " SELECT * 
    from docente d";
     $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
     return $vResultado;
    }

    function getMateria(){
        include ("conexion.php");
        $vSql= " SELECT * 
        from materia m";
         $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
         return $vResultado;
        }
    $misMaterias=getMateria();
    $misDocentes=getDocente();


?>


<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Modificar Consulta</h1>
            
</div><br>


    <form action="ModificarConsultaControlador.php" method="POST">

    
    <div class="form-group" >
                <label >Profesor</label>
                <select class="form-select" aria-label="Default select example" name="docente" required>
               
                <option selected><?php echo($profesorYid);?></option>
               
            <?php
                while($fila = mysqli_fetch_array($misDocentes))
            {
            ?>
                <option value="<?php echo $fila['legajo']?>" ><?php echo $fila['nombre'] ." ".$fila['apellido'] ." legajo: ".$fila['legajo']?></option>
            <?php

            }?>
             </select>




    </div>
    <br>
     <div class="form-group" >
                <label >Materia</label>
                <select class="form-select" aria-label="Default select example" name="materia" required>
                
                <option selected><?php echo($materia);?></option>
               
            <?php
                while($fila = mysqli_fetch_array($misMaterias))
            {
            ?>
                <option value="<?php echo $fila['idMateria']?>"  ><?php echo $fila['nombre'] ?></option>
            <?php

            }?>
             </select>




    </div>

            <div class="form-group">
                <label>Fecha y hora</label>
                <input type="datetime-local" class="form-control" name="fechayhora" value="<?php echo($fechayhora);?>">
            </div>
            
            
            <div class="form-group" >
                <label >Estado</label>
                <select class="form-select" aria-label="Default select example" name="tipoUsuario" >
                        <option selected><?php echo($estado);?></option>
                        <option value="disponible" >Disponible</option>
                        <option value="bloqueado" >Bloqueado</option>
                        
                </select>
            </div>


            <div class="form-group">
                <label for=>Enlace Zoom</label>
                <input type="text" class="form-control" name="enlaceZoom" value="<?php echo($enlaceZoom);?>">
            </div>

            <div class="form-group">
                <label for=>Cupo</label>
                <input type="text" class="form-control" name="cupo" value="<?php echo($cupo);?>">
            </div>


            <br>
            <input type="submit" class="btn btn-primary" value="Aceptar">
            <a class="btn btn-danger" href="ListadoConsultasAdmin.php">Cancelar</a>
    </form>
<br>
<?php include('template/footer.php') ?>
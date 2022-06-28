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

?>


<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Modificar Consulta</h1>
            
</div><br>


    <form action="<?php echo $url?> ModificarConsultaControlador.php" method="POST">

 
    <div class="form-group" >
         
            </div>
            <div class="form-group">
                <label>IDconsulta</label>
                <input type="text" class="form-control" name="IDconsulta" value="<?php echo($IDconsulta);?>" >
            </div>
          

            <div class="form-group">
                <label >Nombre Y apellido docente</label>
                <input type="text" class="form-control" name="docente" value="<?php echo($docente);?>">
            </div>

            <div class="form-group">
                <label>fechayhora</label>
                <input type="date" class="form-control" name="fechayhora" value="<?php echo($fechayhora);?>">
            </div>
            
            
            <div class="form-group" >
                <label >estado</label>
                <select class="form-select" aria-label="Default select example" name="tipoUsuario">
                        <option selected>estado</option>
                        <option value="disponible" >disponible</option>
                        <option value="bloqueado" >bloqueado</option>
                        
                </select>
            </div>


            <div class="form-group">
                <label for=>motivoBloqueo</label>
                <input type="text" class="form-control" name="motivoBloqueo" value="<?php echo($motivoBloqueo);?>">
            </div>

            <div class="form-group">
                <label for=>cupo</label>
                <input type="text" class="form-control" name="cupo" value="<?php echo($cupo);?>">
            </div>


            <br>
            <input type="submit" class="btn btn-primary" value="Aceptar">
            <a class="btn btn-danger" href="ListadoConsultasAdmin.php">Cancelar</a>
    </form>
<br>
<?php include('template/footer.php') ?>
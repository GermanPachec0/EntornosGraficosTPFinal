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


          </nav>
          <div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1 >Reprogramar Consulta</h1>

          </div>

  
 <?php 

  ?>
      <form action="reprogramarConsultaControlador.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Motivo de bloqueo</label>
                <input type="text" name="motivo" class="form-control" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Fecha</label>
                <input type="datetime-local" name="fecha" class="form-control"  aria-describedby="emailHelp" required>
            </div>
        
            <br>
            <input type="submit" class="btn btn-primary col-3" value="Aceptar">
            <a class="btn btn-danger" href="ConsultasDocentes.php">Cancelar</a>
    </form>
            
         
             <?php include("footer.php") ?>
</html> 
   
<?php 
   include("usuario.php");
   session_start();
 
     if(isset($_SESSION['usuario']))
     {
      if($_SESSION['usuario'] -> getTipoUsuario() == "docente")
         {
         include("template/menuDocente.php");
         }
       else{
         header("Location: AccesoDenegado.php");
       }
       
     }else{
       header("Location: AccesoDenegado.php");
   }
 ?>



          </nav>
          <div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1 >Reprogramar Consulta</h1>

          </div>

  
 <?php 
     $fecha = $_POST ['fecha'];
     $idConsulta = $_POST['idConsulta'];
  ?>
      <form action="reprogramarConsultaControlador.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Motivo de bloqueo</label>
                <input type="text" name="motivo" class="form-control" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Fecha</label>
                <input type="datetime-local" name="fecha" class="form-control" value="<?php echo $fecha ?>" required>
            </div>
            <input name="idConsulta" value="<?php echo $idConsulta ?>" hidden>
        
            <br>
            <input type="submit" class="btn btn-primary col-3" value="Aceptar">
            <a class="btn btn-danger" href="ConsultasDocentes.php">Cancelar</a>
    </form>
    <br>
             <?php include("footer.php") ?>
</html> 
   
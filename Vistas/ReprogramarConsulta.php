<?php include 'template/menu.php';?>

           
          </nav>
          <div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1 >Reprogramar Consulta</h1>
      
          </div>

         
         
      <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Motivo de bloqueo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">fecha</label>
                <input type="date" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

           
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a class="btn btn-danger" href="ListadoUsuarios.php">Cancelar</a>
    </form>
             <br> 
         
             <?php include("Vistas/VistasGeneral/footer.php") ?>
</html> 
   
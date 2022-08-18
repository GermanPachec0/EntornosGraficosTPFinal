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
<h1>Cambiar Contraseña</h1>
</div>
<form action="reprogramarConsultaControlador.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Contraseña Anterior</label>
        <input type="password" name="passAnt" class="form-control" aria-describedby="emailHelp" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nueva Contraseña</label>
        <input type="password" name="passNueva" class="form-control"  aria-describedby="emailHelp" required>
    </div>

    <br>
    <input type="submit" class="btn btn-primary col-3" value="Aceptar">
    <a class="btn btn-danger" href="ConsultasDocentes.php">Cancelar</a>
</form>
    <br>
             <?php include("footer.php") ?>
</html> 
   
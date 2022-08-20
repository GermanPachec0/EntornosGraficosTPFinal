<?php 
  include("Vistas/usuario.php");
  session_start();
  if(isset($_SESSION['usuario']))
  {
      $myUser= new Usuario();
      $myUser = $_SESSION['usuario'];
    if($myUser -> getTipoUsuario() == "administrador")
    {
      include("Vistas/template/menuAdmin.php");
    }
    else if ($myUser -> getTipoUsuario() == "docente")
    {
    include("Vistas/template/menuDocente.php");
    }
    else if ($myUser -> getTipoUsuario() == "alumno")
    {
    include("Vistas/template/menuAlumno.php");
    }
  } 
  else{
    include("Vistas/template/menuVisitante.php");
  }
?>

           
          </nav>
          <div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1 >Menu Principal</h1>
        
  
          </div>

          <div class="mt-4 p-5 bg-primary text-white rounded">
         
            <p > 
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" 
                style="width:200px" align="right" class="img-thumbnail">
                 <h1>Información de uso del sitio</h1>
                "Si usted necesita una cuenta para acceder a una consulta, vaya a la ssección de información y contactese vía email con un personal administrativo de la facultad."
                 "En caso de olvidar la contraseña, contactarse con la facultad"
                 <br>
                 <br>
                 <br>
            </p>
          </div>
          <br>
         
<?php include("Vistas/template/footer.php") ?>
</html> 
   

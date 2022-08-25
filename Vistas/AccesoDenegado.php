<?php 
 
  session_start();
  include("./usuario.php");
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
         
<div class="mt-4 p-5 bg-danger text-white rounded text-center">
            <h1>Acceso Denegado: Usted no tiene permiso para ingresara esta sección</h1>

            
</div>

<br>
<?php include("footer.php") ?>
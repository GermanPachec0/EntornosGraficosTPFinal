<?php 
 
  session_start();
  include("./usuario.php");
  $myUser= new Usuario();
  $myUser = $_SESSION['usuario'];
  if(isset($_SESSION['usuario']))
  {
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

<div class="mt-4 p-5 bg-success text-white rounded text-center">
            <h1>Cambio de contraseña exitoso ! </h1>
</div>

<br>
<?php include("footer.php") ?>
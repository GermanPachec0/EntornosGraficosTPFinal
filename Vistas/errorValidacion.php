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
         
<div class="mt-4 p-5 bg-danger text-white rounded text-center">
            <h1>Error: Validaciones incorrectas </h1>

            <a type="btn btn-success" href="ListadoUsuarios.php">Volver a intentar</a>
</div>

<br>
<?php include("footer.php") ?>
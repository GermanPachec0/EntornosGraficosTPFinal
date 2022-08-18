<?php 
  include("./usuario.php");
  session_start();
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
            <h1>Bienvenido  <?php echo $myUser -> getNombre(); ?></h1>
            <h2> Usted esta registrado como: <?php echo $myUser -> getTipoUsuario(); ?></h2>
           
    
</div>

<br>
<?php include("footer.php") ?>
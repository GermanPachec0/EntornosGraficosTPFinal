<?php 
include ('menu.php');
include("./usuario.php");
session_start();

    $myuser = new Usuario();
    $myuser =$_SESSION['usuario'];
?>

<div class="mt-4 p-5 bg-success text-white rounded text-center">
            <h1>Bienvenido  <?php echo $myuser -> getNombre(); ?></h1>
            <h2> Usted se está registrado como: <?php echo $myuser -> getTipoUsuario(); ?></h2>
           
    
</div>

<br>
<?php include("footer.php") ?>
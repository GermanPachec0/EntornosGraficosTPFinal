<?php 
 
  session_start();
  include("usuario.php");

    if(isset($_SESSION['usuario']))
    {
     if($_SESSION['usuario'] -> getTipoUsuario() == "administrador")
        {
        include("template/menuAdmin.php");
        }
      else{
        header("Location: AccesoDenegado.php");
      }
      
    }else{
      header("Location: AccesoDenegado.php");
  }
?>

<?php $legajo = $_POST['legajo'];
$tipoUsuario = $_POST['tipoUsuario'];?>


<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Modificar Usuario</h1>
            
</div><br>
 <form action="ModificarUsuarioControlador.php" method="POST">
 <div class="form-group" >
    <label >Tipo De Usuario</label>
    <select class="form-select" aria-label="Default select example" name="tipoUsuario" readonly required>  
                        <option selected ><?php echo($tipoUsuario)?> </option>
                      
                </select>
         
            </div>
            <div class="form-group">
                <label>Legajo</label>
                <input type="text onlyread" class="form-control" name="legajo" pattern="{5}" value="<?php echo($legajo);?>" readonly required>
            </div>
          

            <div class="form-group">
                <label >Email </label>
                <input type="email" class="form-control" name="email" value="<?php echo $_POST['email'];?>" required>
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="contraseña" pattern ="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$" value="<?php echo $_POST['contrasena'];?>"required>
            </div>
            
            <div class="form-group">
                <label for=>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $_POST['nombre'];?>" required>
            </div>
            
            <div class="form-group">
                <label for=>Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?php echo $_POST['apellido'];?>" required>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Aceptar">
            <a class="btn btn-danger" href="ListadoUsuarios.php">Cancelar</a>
    </form>
<br>
<?php include("footer.php") ?>
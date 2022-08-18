<?php 
 include("usuario.php");
  session_start();

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

<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Alta Usuarios</h1>
            <p></p>
          </div><br>

    <form action="AltaUsuarioControlador.php" method="POST">
            <div class="form-group" >
                <label >Tipo De Usuario</label>
                <select class="form-select" aria-label="Default select example" name="tipoUsuario">
                        <option selected>Tipo de Usuario</option>
                        <option value="administrador" >Administrador</option>
                        <option value="alumno" >Alumno</option>
                        <option value="docente"  >Docente</option>
                </select>
            </div>
            <div class="form-group">
                <label >Legajo</label>
                <input type="number" class="form-control" name="legajo" pattern="{5}"required>
            </div>
            

            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" name="email"required>
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="contraseña" pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$"required>
                <label color="grey"> La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
NO puede tener otros símbolos.</label>
            </div>
            
            <div class="form-group">
                <label >Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label >Apellido</label>
                <input type="text" class="form-control" name="apellido"  required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a class="btn btn-danger" href="ListadoUsuarios.php">Cancelar</a>
    </form>
<br>
<?php include("template/footer.php") ?>
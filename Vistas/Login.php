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
           

<div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1>Iniciar Sesión </h1>
</div>
<br>
<div class="text-center d-flex justify-content-center form-floating bg-dark" >
    <form class="form-signin col-8 " action="<?php echo $url?>/Vistas/loginControlador.php" method="POST" >
            <br>
            
            <div class="text-center mb-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" alt="Avatar Logo" style="width:175px;"  class="img-thumbnail border border-dark"> 
            </div>
            <br>

            <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example" name="tipousuario" required>
                        <option selected>Tipo de Usuario</option>
                        <option value="administrador">Administrador</option>
                        <option value="alumno">Alumno</option>
                        <option value="docente">Docente</option>
                </select>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Legajo" name="legajo" pattern = "{1,5}"  5 required>
                <label for="floatingInput">Legajo</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="contraseña" pattern= "^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$"  required>
                <label for="floatingPassword">Contraseña</label>
            </div>
            <br>
        <button class="btn btn-lg btn-primary m-2" type="submit">Iniciar Sesión</button>
        <br>
    </form>
</div>
<br>
<?php include("footer.php") ?>
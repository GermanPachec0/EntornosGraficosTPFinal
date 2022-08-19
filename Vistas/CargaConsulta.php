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
            <h1>Carga Consulta</h1>
            <p></p>
          </div><br>

    <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Docente</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Legajo</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="email">Materia </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Fecha y Hora</label>
                <input type="email" class="form-control" id="Contraseña" aria-describedby="emailHelp" required>
            </div>
           
    </form>
<br>
<?php include("footer.php") ?>
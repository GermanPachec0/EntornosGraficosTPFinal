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

<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Carga Consulta</h1>
            <p></p>
          </div><br>

    <form>
            <div class="form-group">
                <label for="docente">Docente</label>
                <input type="text" class="form-control" id="docente" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="legajo">Legajo</label>
                <input type="number" class="form-control" id="legajo" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="materia">Materia </label>
                <input type="text" class="form-control" id="materia" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="fechaYhora">Fecha y Hora</label>
                <input type="datetime" class="form-control" id="fechaYhora" aria-describedby="emailHelp" required>
            </div>
           
    </form>
<br>
<?php include("footer.php") ?>
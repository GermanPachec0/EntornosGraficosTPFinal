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



<?php 
function getDocente(){
    include ("conexion.php");
    $vSql= " SELECT * 
    from docente d";
     $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
     return $vResultado;
    }

    function getMateria(){
        include ("conexion.php");
        $vSql= " SELECT * 
        from materia m";
         $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
         return $vResultado;
        }
    $misMaterias=getMateria();
    $misDocentes=getDocente();


?>
<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Alta Consultas</h1>
            <p></p>
          </div><br>


    <form action="AltaConsultaControlador.php" method="POST">
    <div class="form-group" >
                <select class="form-select" aria-label="Default select example" name="docente" required>

                <option selected>Docentes</option>
               
            <?php
                while($fila = mysqli_fetch_array($misDocentes))
            {
            ?>
                <option value="<?php echo $fila['legajo']?>" ><?php echo $fila['nombre'] ." ".$fila['apellido'] ." legajo: ".$fila['legajo']?></option>
            <?php

            }?>
             </select>




    </div>
    <br>
<div class="form-group" >
                <select class="form-select" aria-label="Default select example" name="materia" required>

                <option selected>Materias</option>
               
            <?php
                while($fila = mysqli_fetch_array($misMaterias))
            {
            ?>
                <option value="<?php echo $fila['idMateria']?>"  ><?php echo $fila['nombre'] ?></option>
            <?php

            }?>
             </select>




    </div>


            <div class="form-group">
                <label>fechayhora</label>
                <input type="datetime-local" class="form-control" name="fechayhora" value="" required>
            </div>
          
            
            
            <div class="form-group" >
                <label >estado</label>
                <select class="form-select" aria-label="Default select example" name="estado" required>
                        <option selected>estado</option>
                        <option value="disponible" >disponible</option>
                        <option value="bloqueado" >bloqueado</option>
                        
                </select>
            </div>

            <div class="form-group">
                <label for=>Enlace Zoom</label>
                <input type="text" class="form-control" name="enlaceZoom" value="" required>
            </div>



            <div class="form-group">
                <label for=>cupo</label>
                <input type="text" class="form-control" name="cupo" value="" required>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a class="btn btn-danger" href="ListadoConsultasAdmin.php">Cancelar</a>
    </form>
<br>
<?php include("template/footer.php") ?>

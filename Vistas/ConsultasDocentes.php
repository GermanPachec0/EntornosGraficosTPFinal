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

function getMisConsultas()
{
    
    include('conexion.php');    
    $myUser= new Usuario();
    $myUser = $_SESSION['usuario'];
    $legajo = $myUser -> getLegajo();
    $vSql = "Select c.idConsulta,d.nombre,d.apellido,m.nombre,c.fechayhora,c.fechayhoraAlt,c.estado,c.motivoBloqueo,c.enlaceZoom,c.cupo from consulta c
    inner join materia m
    on m.idMateria = c.idMateria
    inner join docente d
    on d.legajo = c.legajoDocente
    where c.legajoDocente =  '$legajo'; ";
    $vResultado = mysqli_query($link,$vSql)  or die (mysqli_error($link));;
    mysqli_close($link);
    return $vResultado;

}      

  $myResults = getMisConsultas();
  $cant = mysqli_num_rows($myResults);

  ?>
    <div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1>Mis Consultas</h1>
          </div><br>
         
       
          <?php
          if($cant>0)
          {
          ?>
          
             <table class="table table-dark">
            <thead>
              <tr>
                <th>IDConsulta</th>
                <th>Docente</th>
                <th>Materia</th>
                <th>Fecha y Hora</th>
                <th>Fecha y Hora alternativa</th>
                <th>Estado</th>
                <th>Motivo Bloqueo</th>
                <th>Zoom</th>
                <th>Cupo</th>
                <th>Bloquear Consulta</th>
              </tr>
            </thead>
            <tbody>
            <?php
            while($fila = mysqli_fetch_array($myResults))
            {
            ?>

                <tr>
                <td><?php echo $fila[0] ?></td>
                  <td><?php echo $fila[1]." ".$fila[2]  ?></td>
                  <td><?php echo $fila[3]?></td>
                  <td><?php echo $fila[4]?></td>
                  <td><?php echo $fila[5]?></td>
                  <td><?php echo $fila[6]?></td>
                  <td><?php echo $fila[7]?></td>
                  <td><?php echo $fila[8]?></td>
                  <td><?php echo $fila[9]?></td>
                  
                  <form action="profesorControlador.php" method="POST">
                  <input name="id" value="<?php echo $fila['10']?>" hidden>
                  <input name="idConsulta" value="<?php echo $fila['0']?>" hidden>
                  <td><input type="submit" class="btn btn-danger" value="Bloquear Consulta"></td>
               
                  </form>
                </tr>
                <?php 
              }
                ?>

          <?php
          }
        else
        {
          echo "<div class='alert alert-info'>
          <strong>Informacion</strong> Usted no tiene consultas cargadas.
        </div>";
        }
          ?>
      
             <br>
            </tbody>
            
        
          </table>

         
          <?php include("footer.php") ?>
          </html>
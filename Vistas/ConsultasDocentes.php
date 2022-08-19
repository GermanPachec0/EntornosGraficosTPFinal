<?php 
   include("usuario.php");
   session_start();
 
     if(isset($_SESSION['usuario']))
     {
      if($_SESSION['usuario'] -> getTipoUsuario() == "docente")
         {
         include("template/menuDocente.php");
         }
       else{
         header("Location: AccesoDenegado.php");
       }
       
     }else{
       header("Location: AccesoDenegado.php");
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
    $vResultado = mysqli_query($link,$vSql)  or die (mysqli_error($link));
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
                <th>Alumnos Inscriptos</th>
                <th>Bloquear Consulta</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $index = 0;
            while($fila = mysqli_fetch_array($myResults))
            {
              $index++;
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
                  <td><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo<?php echo $index ?>">Alumnos Inscriptos</button></td>
                  <form action="ReprogramarConsulta.php" method="POST">
                  <input name="id" value="<?php echo $fila['10']?>" hidden>
                  <input name="idConsulta" value="<?php echo $fila['0']?>" hidden>
                  <input name="fecha" value="<?php echo $fila['4']?>" hidden>
                  <td><input type="submit" class="btn btn-danger" value="Bloquear Consulta"></td>
                  </form>
                   
                  <thead class="collapse table-primary " id="demo<?php echo $index ?>">
                      <tr>
                        <th colspan="3">Legajo</th>
                        <th colspan="3">Nombre</th>
                        <th colspan="3">Apellido</th>
                        <th colspan="3">Email</th>
                      </tr>
                </thead>

                <?php 
                  include('conexion.php');  
                  $vSql = "SELECT a.legajo, a.nombre,a.apellido,a.email
                  FROM inscripcion ins 
                  inner join alumno a
                  where ins.idConsulta = '$fila[0]';";
                  $vResultado = mysqli_query($link,$vSql)  or die (mysqli_error($link));
                  mysqli_close($link);
                ?>

                <tbody class="collapse table table-hover table-primary" id="demo<?php echo $index ?>">
                <?php 
                while ($alu = mysqli_fetch_array($vResultado))
                {
                ?>
       		      <tr >
                  <th colspan="3" ><?php echo $alu[0] ?></th>
                  <th colspan="3"><?php echo $alu[1]?></th>
                  <th colspan="3"><?php echo $alu[2]?></th>
                  <th colspan="3"><?php echo $alu[3]?></th>
       				  </tr>
                <?php }?>
       			  </tbody>



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
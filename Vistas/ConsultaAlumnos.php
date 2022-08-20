<?php 
 include("usuario.php");
  session_start();

    if(isset($_SESSION['usuario']))
    {
     if($_SESSION['usuario'] -> getTipoUsuario() == "alumno")
        {
        include("template/menuAlumno.php");
        }
      else{
        header("Location: AccesoDenegado.php");
      }
      
    }else{
      header("Location: AccesoDenegado.php");
  }
?>


<?php include('alumnoControlador.php');
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
                <th>Anular Inscripcion</th>
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
                  <form action="alumnoControlador.php" method="POST">
                  <input name="id" value="<?php echo $fila['10']?>" hidden>
                  <input name="idConsulta" value="<?php echo $fila['0']?>" hidden>
                  <td><input type="submit" class="btn btn-danger" value="Anular Inscripción" ></td>
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
          <strong>Informacion</strong> Usted no se ha incripto a ninguna consulta.
        </div>";
        }
          ?>
      
             
            </tbody>
          </table>
          <?php include("footer.php") ?>
    
</body>
</html>
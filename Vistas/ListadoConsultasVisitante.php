<?php 
 include("usuario.php");
  session_start();

  $myUser= new Usuario();

  if(isset($_SESSION['usuario']))
  {
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
  include('alumnoControlador.php');
  if(!isset($_POST['submit']))
  {
    if(isset($_POST['materia']))
    {
    $myResults =  buscarPorMateria($_POST['materia']);
    }
    else{
      $myResults = getConsultas();
    }
  }
  else{

    $myResults = getConsultas();
  }
    
  function buscarPorMateria($materia)
  {
     
      include ("conexion.php");
      $vSql = "SELECT c.idConsulta,d.nombre,d.apellido,m.nombre,c.fechayhora,c.fechayhoraAlt,c.estado,c.motivoBloqueo,c.cupo,d.legajo,m.idMateria 
      FROM consulta c
      inner join materia m 
      on m.idMateria = c.idMateria
      inner join docente d
      on d.legajo = c.legajoDocente
      where m.nombre LIKE '%".$materia."%';";
      $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));;
   
      return $vResultado;
  }
 

?>
          <div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Lista de Consultas</h1>
          </div><br>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="materia" placeholder="Ingresar Materia a buscar">
            <input type="submit" class="btn btn-primary col-3" value="Buscar">
            <div class="col-2"></div>
          </div>  
          </form>

      
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
                <th>Cupo</th>
                <th>Inscribirse</th>
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
                  
                  <form action="inscripcionControlador.php" method="POST">
                      <input name="idConsulta" value="<?php echo $fila['0']?>" hidden>
                      <input name="estado" value="<?php echo $fila['6']?>" hidden>
                      <input name="cupo" value="<?php echo $fila['8']?>" hidden>
                      <input name="legajoDoc" value="<?php echo $fila['9']?>" hidden>
                      <input name="idMateria" value="<?php echo $fila['10']?>" hidden>
                      <td><input type="submit" class="btn btn-success" value="Inscribirse" ></td>
                  </form>
                </tr>
                <?php 
              }
                ?>

        
        
            </tbody>
          </table>
          <?php include("footer.php") ?>
    
</body>
</html>
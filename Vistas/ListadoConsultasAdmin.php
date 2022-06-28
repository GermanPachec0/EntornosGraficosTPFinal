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
      $vSql = "SELECT c.idConsulta,d.nombre,d.apellido,m.nombre,c.fechayhora,c.fechayhoraAlt,c.estado,c.motivoBloqueo,c.cupo,m.idMateria 
      FROM consulta c
      inner join materia m 
      on m.idMateria = c.idMateria
      inner join docente d
      on d.legajo = c.legajoDocente
      where m.nombre LIKE '%".$materia."%';";
      $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
   
      return $vResultado;
  }
function getConsultas(){
  include ("conexion.php");
  $vSql= " SELECT c.idConsulta,d.nombre,d.apellido,m.nombre,c.fechayhora,c.fechayhoraAlt,c.estado,c.motivoBloqueo,c.enlaceZoom,c.cupo 
  from consulta c
    inner join materia m
    on m.idMateria = c.idMateria
    inner join docente d
    on d.legajo = c.legajoDocente ;";
   $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
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
            <td><input type="submit" class="btn btn-success" value="Agregar consulta" ></td>
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
                <th>Enlace Zoom</th>
                <th>Cupo</th>
                <th>Modificar</th>
                <th>Eliminar</th>
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
                  
                  <form action="Modificar_consulta.php" method="POST">
                      <input name="IDconsulta" value="<?php echo $fila['0']?>" hidden>
                      <input name="estado" value="<?php echo $fila['6']?>" hidden>
                      <input name="cupo" value="<?php echo $fila['9']?>" hidden>
                      <input name="enlaceZoom" value="<?php echo $fila['8']?>" hidden>
                      <input name="fechayhora" value="<?php echo $fila['4']?>" hidden>
                      <input name="fechayhoraAlt" value="<?php echo $fila['5']?>" hidden>
                      <input name="motivo" value="<?php echo $fila['7']?>" hidden>
                      <input name="docente" value="<?php echo$fila[1]." ".$fila[2]?>" hidden>
                     
                      <input name="materia" value="<?php echo $fila['3']?>" hidden>
                      <td><input type="submit" class="btn btn-success" value="Modificar" onclick="confirm('¿Desea modificar?')"></td>
                    </form>

                    <td>

                    <form action="EliminarConsulta.php" method="POST">
                    <input name="IDconsulta" value="<?php echo $fila['0'] ?>" hidden>
                    <input type="submit" class = "btn btn-danger" value="Eliminar">
                    </form>
                    </td>

                
                </tr>
                <?php 
              }
                ?>

        
        
            </tbody>
          </table>
          <?php include("template/footer.php") ?>
    
</body>
</html>
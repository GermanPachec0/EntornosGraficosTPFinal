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

<?php 
  
  if(isset($_POST['buscatodos']))
  {
 
    $myResults = getConsultas() ;
    
    
  
  }
   else if (isset($_POST['buscabloqueado'])){
    $myResults =  buscarbloqueado();
  
  }
  else
  {
 
    $myResults = getConsultas() ;
    
    
  
  }
    
  function buscarbloqueado()
  {
     
      include ("conexion.php");
      $vSql = "SELECT c.idConsulta,d.nombre,d.apellido,m.nombre,c.fechayhora,c.fechayhoraAlt,c.estado,c.motivoBloqueo,c.enlaceZoom,c.cupo,d.legajo,m.idMateria
      from consulta c
      inner join materia m
    on m.idMateria = c.idMateria
    inner join docente d
    on d.legajo = c.legajoDocente
      where c.estado = 'bloqueado'";
      $vResultado= mysqli_query($link,$vSql)  or die (mysqli_error($link));
   
      return $vResultado;
  }
function getConsultas(){
  include ("conexion.php");
  $vSql= " SELECT c.idConsulta,d.nombre,d.apellido,m.nombre,c.fechayhora,c.fechayhoraAlt,c.estado,c.motivoBloqueo,c.enlaceZoom,c.cupo,d.legajo,m.idMateria
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
            
            <input type="submit" class="btn btn-primary col-3" name="buscabloqueado" value="Buscar consultas bloqueadas">
            <input type="submit" class="btn btn-primary col-3" name="buscatodos" value="Listar todas las consultas">
         
            <div class="col-2"></div>
            </form>

            <form action="Agregar_consulta.php" method="POST">
            <input type="submit"  type="button" class="btn btn-primary" value="Agregar Consulta">
            </form>
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
                      <input type=datetime name="fechayhora" value="<?php echo $fila['4']?>" hidden>
                      <input name="fechayhoraAlt" value="<?php echo $fila['5']?>" hidden>
                      <input name="motivo" value="<?php echo $fila['7']?>" hidden>
                      <input name="docente" value="<?php echo$fila[1]." ".$fila[2]?>" hidden>
                      <input name="idDocente" value="<?php echo $fila['10']?>" hidden>
                      <input name="materia" value="<?php echo $fila['3']?>" hidden>
                      <input name="idMateria" value="<?php echo $fila['11']?>" hidden>
                      <input name="profesorYid" value="<?php echo$fila[1]." ".$fila[2]." legajo: ".$fila['10']?>" hidden>
                      <td><input type="submit" class="btn btn-success" value="Modificar" ></td>
                    </form>

                    <td>

                    <form action="EliminarConsulta.php" method="POST">
                    <input name="IDconsulta" value="<?php echo $fila['0']?>" hidden>
                      <input name="estado" value="<?php echo $fila['6']?>" hidden>
                      <input name="cupo" value="<?php echo $fila['9']?>" hidden>
                      <input name="enlaceZoom" value="<?php echo $fila['8']?>" hidden>
                      <input name="fechayhora" value="<?php echo $fila['4']?>" hidden>
                      <input name="fechayhoraAlt" value="<?php echo $fila['5']?>" hidden>
                      <input name="motivo" value="<?php echo $fila['7']?>" hidden>
                      <input name="docente" value="<?php echo$fila[1]." ".$fila[2]?>" hidden>
                     
                      <input name="materia" value="<?php echo $fila['3']?>" hidden>
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
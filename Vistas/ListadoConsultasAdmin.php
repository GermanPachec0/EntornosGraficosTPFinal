<?php
include_once "conexion.php";
$consultas = consulta::obtener();

?>
          
  <div class="mt-4 p-5 bg-primary text-white rounded" style="text-align:center ;">
            <h1>Lista de Consultas</h1>
          </div>
          
          <br>
          
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary col-3" type="button">Buscar</button>
            <div class="col-2"></div>


            <a href="formulario_registro_estudiante.php" class="btn btn-info my-2">Nuevo</a>

          </div> 
          
          
          <table class="table table-dark ">
            <thead>
              <tr>
                <th>ID</th>
                <th>Profesor</th>
                <th>Materia</th>
                <th>Fecha y Hora</th>
                <th>Estado</th>
                <th>Motivo Bloqueo</th>
                <th>cupo</th>
                <th>Modificar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($consultas as $consulta) { ?>
                    <tr>
                        <td><?php echo $consulta["idMateria"] ?></td>
                        <td><?php echo $consulta["legajoDocente"] ?></td>
                        <td><?php echo $consulta["fechayhoraAlt"] ?></td>
                        <td><?php echo $consulta["estado"] ?></td>
                        <td><?php echo $consulta["motivoBloqueo"] ?></td>
                        <td><?php echo $consulta["cupo"] ?></td>
                        
                        <td>
                            <a href="editar_consulta.php?id=<?php echo $consulta["idMateria"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="eliminar_consulta.php?id=<?php echo $consulta["idMateria"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
          </table>
          <?php include("Vistas/VistasGeneral/footer.php") ?>
    
</body>
</html>


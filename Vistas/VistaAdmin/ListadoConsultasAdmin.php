<?php include("Vistas/VistasGeneral/menu.php"); ?>
          <div class="mt-4 p-5 bg-primary text-white rounded" style="text-align:center ;">
            <h1>Lista de Consultas</h1>
          </div><br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary col-3" type="button">Buscar</button>
            <div class="col-2"></div>
            <form action="AltaModificacionUsuario.php" method="POST">
            <input type="submit"  type="button" class="btn btn-primary" value="Agregar Consulta">
            </form>
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
                <th>Modificar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Adrian L. </td>
                <td>Entornos Graficos</td>
                <td>15/5/2022</td>
                <td>Bloqueado</td>
                <td>Licencia medica</td>
                <td><button class="btn btn-success">Modificar</button>
                </td>
                <td><button class="btn btn-danger">Eliminar</button>
                </td>
              </tr> 
            </tbody>
          </table>
          <?php include("Vistas/VistasGeneral/footer.php") ?>
    
</body>
</html>
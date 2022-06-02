<?php include("menu.php"); ?>
          <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Lista de Consultas</h1>
            <p>Lorem ipsum...</p>
          </div><br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary" type="button">Buscar</button>
          </div>  
          <table class="table table-dark">
            <thead>
              <tr>
                <th>IDConsulta</th>
                <th>Fecha Y Hora</th>
                <th>Fecha Y Hora Alternativa</th>
                <th>Estado</th>
                <th>Motivo Bloqueo</th>
                <th>Enlace Zoom</th>
                <th>Inscribirse</th>
              </tr>
            </thead>
            <tbody>
          
              <tr>
                <td>1</td>
                <td>14/5/2022 00:00:00</td>
                <td>14/5/2022 00:00:00</td>
                <td>Pendiente</td>
                <td>Licencia medica</td>
                <td><a href="#">LINK Zoom</a></td>
                <td> 
                  <button class="btn btn-success" type="button">Inscribirse</button>
                </td>
              </tr>
             
            </tbody>
          </table>
          
<?php include("footer.php") ?>
</html>
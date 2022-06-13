<?php include ("menu.php"); ?>
          <div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Lista de Consultas</h1>
          </div><br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary col-3" type="button">Buscar</button>
            <div class="col-2"></div>
        
          </div>  
          <table class="table table-dark">
            <thead>
              <tr>
                <th>IDConsulta</th>
                <th>Fecha Y Hora</th>
                <th>Fecha Y Hora Alternativa</th>
                <th>Estado</th>
                <th>Profesor</th>
                <th>Materia</th>
                <th>Motivo Bloqueo</th>
                <th>Cupo Disponible</th>
                <th>Inscribirse</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>14/5/2022 00:00:00</td>
                <td>14/5/2022 00:00:00</td>
                <td>Bloqueado</td>
                <td>Jose J.</td>
                <td>Analisis I</td>
                <td>Licencia Medica</td>
                <td>5</td>
                <td> 
                  <button class="btn btn-success" type="button">Inscribirse</button>
                </td>
              </tr>
           
             
            </tbody>
          </table>
         <?php include ("footer.php"); ?>
    
</body>
</html>
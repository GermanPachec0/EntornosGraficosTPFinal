
          </nav>
          <div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1 >Mis Consultas</h1>
        
  
          </div>

          
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary" type="button">Buscar</button>
          </div>  
          <table class="table table-dark">
            <thead>
              <tr>
                <th>IDConsulta</th>
                <th>Materia</th>
                <th>Estado</th>
                <th>Inscriptos</th>
                <th>Bloquear consulta</th>
              </tr>
            </thead>
            <tbody>
          
              <tr>
                <td>1</td>
                <td>Fisica</td>
                <td>Disponible</td>
                <td>3</td>
                <td> 
                  <button class="btn btn-success" type="button">Bloquear consulta</button>
                </td>
              </tr>

              <tr>
                <td>5</td>
                <td>Analisis</td>
                <td>Pendiente</td>
                <td>0</td>
                <td>Bloqueada</td>
              </tr>
             
            </tbody>
          </table>

          
          
          <?php include("Vistas/VistasGeneral/footer.php") ?>
          </html>
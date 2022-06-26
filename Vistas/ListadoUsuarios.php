  
    <div class="mt-4 p-5 bg-primary text-white rounded " style="text-align: center;">
            <h1>Listado De Usuarios</h1>
          </div><br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary col-3" type="button">Buscar</button>
            <div class="col-2"></div>
            <form action="AltaModificacionUsuario.php" method="POST">
            <input type="submit"  type="button" class="btn btn-primary" value="Agregar Usuario">
            </form>
          </div>  
          <table class="table table-dark">
                <thead>
                <tr>
                    <th>Tipo de Usuario</th>
                    <th>Legajo</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Alumno</td>
                    <td>48555</td>
                    <td>FrancoL@gmail.com</td>
                    <td>fralp1231456</td>
                    <td>Franco</td>
                    <td>Lopez</td>
                    <td> 
                    <a class="btn btn-success" href="ModificarUsuario.php">Modificar</a>
                    </td>
                    <td>
                    <a class="btn btn-danger" href="EliminarUsuario.php">Eliminar</a>
                    </td>

                </tr>
                
                </tbody>
          </table>
          <?php include("Vistas/template/footer.php") ?>
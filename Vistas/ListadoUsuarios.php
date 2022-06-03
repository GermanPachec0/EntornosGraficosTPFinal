<?php include("menu.php"); ?>
    <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Lista De Usuario</h1>
            <p>Lorem ipsum...</p>
          </div><br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary col-3" type="button">Buscar</button>
            <div class="col-2"></div>
            <form action="Vistas/AltaModificacionUsuario.php" method="GET">
        <a href="Vistas/AltaModificacionUsuario.php">ALTA USUARIO</a>
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
                    <button class="btn btn-success" type="button">Modificar</button>                    
                    </td>
                    <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>

                </tr>
                
                </tbody>
          </table>
<?php include("footer.php"); ?>
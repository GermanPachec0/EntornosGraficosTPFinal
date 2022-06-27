<?php include 'template/menuAdmin.php';
include ("conexion.php"); ?>


    <div class="mt-4 p-5 bg-primary text-white rounded " style="text-align: center;">
            <h1>Listado De Usuarios</h1>
          </div><br>

          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary col-3" type="button">Buscar</button>
            <div class="col-2"></div>
            <form action="AltaUsuario.php" method="POST">
            <input type="submit"  type="button" class="btn btn-primary" value="Agregar Usuario">
            </form>

            <?php
            $sql = "SELECT * FROM alumno ";
            $resultado = mysqli_query($link, $sql);
            $total_registros = mysqli_num_rows($resultado);

            
            $sql2 = "SELECT * FROM docente ";
            $resultado2 = mysqli_query($link, $sql2);
            $total_registros = mysqli_num_rows($resultado2);

            $sql3 = "SELECT * FROM administrador ";
            $resultado3 = mysqli_query($link, $sql3);
            $total_registros = mysqli_num_rows($resultado3);

        


            ?>
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
                <?php
                while ($fila = mysqli_fetch_array($resultado)){
                  ?>
                <tbody>
                <tr>
                    <td><?php echo ($fila['tipoUsuario']); ?></td>
                    <td ><?php echo ($fila['legajo']); ?>  </td>
                    <td><?php echo ($fila['email']); ?></td>
                    <td><?php echo ($fila['contraseña']); ?></td>
                    <td><?php echo ($fila['nombre']); ?></td>
                    <td><?php echo ($fila['apellido']); ?></td>
                    <td> 
                  
                    <form action="ModificarUsuario.php" method="POST">
                    <input name="legajo" value="<?php echo $fila['legajo'] ?>" hidden>
                    <input name="tipoUsuario" value="<?php echo $fila['tipoUsuario'] ?>" hidden>
                    <input name="email" value="<?php echo $fila['email'] ?>" hidden>
                    <input name="contrasena" value="<?php echo $fila['contrasena'] ?>" hidden>
                    <input name="nombre" value="<?php echo $fila['nombre'] ?>" hidden>
                    <input name="apellido" value="<?php echo $fila['apellido'] ?>" hidden>
                    <input type="submit" class = "btn btn-success" value="Modificar">
                    </form>
                    </td>
                    <td>
                    <form action="EliminarUsuario.php" method="POST">
                    <input name="legajo" value="<?php echo $fila['legajo'] ?>" hidden>
                    <input type="submit" class = "btn btn-danger" value="Eliminar">
                    </form>
                    </td>

                </tr>
                
                </tbody>
                
<?php
                }
                while ($fila = mysqli_fetch_array($resultado2)){
                  ?>
                <tbody>
                <tr>
                    <td><?php echo ($fila['tipoUsuario']); ?></td>
                    <td><?php echo ($fila['legajo']); ?></td>
                    <td><?php echo ($fila['email']); ?></td>
                    <td><?php echo ($fila['contraseña']); ?></td>
                    <td><?php echo ($fila['nombre']); ?></td>
                    <td><?php echo ($fila['apellido']); ?></td>
                    <td> 
                    <a class="btn btn-success" href="ModificarUsuario.php">Modificar</a>
                    </td>
                    <td>
                    <a class="btn btn-danger" href="EliminarUsuario.php">Eliminar</a>
                    </td>

                </tr>
                
                </tbody>
                
<?php
                }
                while ($fila = mysqli_fetch_array($resultado3)){
                  ?>
                <tbody>
                <tr>
                    <td><?php echo ($fila['tipoUsuario']); ?></td>
                    <td><?php echo ($fila['legajo']); ?></td>
                    <td><?php echo ($fila['email']); ?></td>
                    <td><?php echo ($fila['contraseña']); ?></td>
                    <td><?php echo ($fila['nombre']); ?></td>
                    <td><?php echo ($fila['apellido']); ?></td>
                    <td> 
                  
                    <a class="btn btn-success" href="ModificarUsuario.php">Modificar</a>
                    </td>
                    <td>
                    <a class="btn btn-danger" href="EliminarUsuario.php">Eliminar</a>
                    </td>

                </tr>
                
                </tbody>
                
<?php
                }
                
       
?>

              

          </table>
          <?php include('template/footer.php') ?>
<?php include 'template/menuAdmin.php';


$legajo = $_POST['legajo'];?>


<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Modificar Usuario</h1>
            
</div><br>


    <form action="<?php echo $url?> ModificarUsuarioControlador.php" method="POST">



    <div class="form-group" >

    <label >Tipo De Usuario</label>
    <select class="form-select" aria-label="Default select example" name="tipoUsuario">  
                        <option value= "<?php echo($tipoUsuario)?>"selected >Tipo de Usuario</option>
                        <option value="administrador" >Administrador</option>
                        <option value="alumno" >Alumno</option>
                        <option value="docente"  >Docente</option>
                </select>
         
            </div>
            <div class="form-group">
                <label>Legajo</label>
                <input type="text" class="form-control" name="legajo" value="<?php echo($legajo);?>" >
            </div>
          

            <div class="form-group">
                <label >Email </label>
                <input type="email" class="form-control" name="email" >
            </div>

            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="contraseña">
            </div>
            
            <div class="form-group">
                <label for=>Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            
            <div class="form-group">
                <label for=>Apellido</label>
                <input type="text" class="form-control" name="apellido" >
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Aceptar">
            <a class="btn btn-danger" href="ListadoUsuarios.php">Cancelar</a>
    </form>
<br>
<?php include('template/footer.php') ?>
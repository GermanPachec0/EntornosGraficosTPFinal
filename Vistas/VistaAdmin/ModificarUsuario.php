<?php include("Vistas/VistasGeneral/menu.php"); ?>
<div class="mt-4 p-5 bg-primary text-white rounded" style="text-align: center;">
            <h1>Modificar Usuario</h1>
            
</div><br>

    <form>
        
            <div class="form-group">
                <label for="exampleInputEmail1">Tipo De Usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Alumno">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Legajo</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="48555">
            </div>

            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="FrancoL@gmail.com">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input type="email" class="form-control" id="Contraseña" aria-describedby="emailHelp" value="fralp1231456">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="email" class="form-control" id="Contraseña" aria-describedby="emailHelp" value="Franco">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="email" class="form-control" id="apellido" aria-describedby="emailHelp" value="Lopez">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a class="btn btn-danger" href="ListadoUsuarios.php">Cancelar</a>
    </form>
<br>
<?php include("Vistas/VistasGeneral/footer.php") ?>
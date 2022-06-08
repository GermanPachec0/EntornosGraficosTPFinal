<?php include("menu.php"); ?>
<div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Alta Usuario</h1>
            <p>Lorem ipsum...</p>
          </div><br>

    <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Tipo De Usuario</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Legajo</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input type="email" class="form-control" id="Contraseña" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="email" class="form-control" id="Contraseña" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="email" class="form-control" id="apellido" aria-describedby="emailHelp">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a class="btn btn-danger" href="ListadoUsuarios.php">Cancelar</a>
    </form>
<br>
<?php include("footer.php"); ?>
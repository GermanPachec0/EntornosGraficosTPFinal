<?php include("menu.php"); ?>
<div class="mt-4 p-5 bg-primary text-white rounded text-center">
            <h1>Iniciar Sesión </h1>
</div>
<br>
<div class="text-center d-flex justify-content-center form-floating bg-dark" >
    <form class="form-signin col-8 " >
            <br>
            <div class="text-center mb-4">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" alt="Avatar Logo" style="width:175px;"  class="img-thumbnail border border-dark"> 
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Legajo">
                <label for="floatingInput">Legajo</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <br>
        <button class="btn btn-lg btn-primary m-2" type="submit">Iniciar Sesión</button>
        <br>
    </form>
</div>
<br>
<?php include("footer.php"); ?>
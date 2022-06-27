<?php
include_once "conexion.php";
include_once "Estudiante.php";
include_once "menuAdmin.php";
$estudiante = consulta::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar consulta</h1>
        <form action="actualizar_consulta.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
            <div class="form-group">
                <label for="idMateria">idMateria</label>
                <input value="<?php echo $consulta->idMateria ?>" name="idMateria" required type="text" id="idMateria" class="form-control" placeholder="idMateria">
            </div>
            <div class="form-group">
                <label for="legajoDocente">legajoDocente</label>
                <input value="<?php echo $consulta->legajoDocente ?>" name="legajoDocente" required type="text" id="legajoDocente" class="form-control" placeholder="legajoDocente">
            </div>
            <div class="form-group">
                <label for="fechayhoraAlt">fechayhoraAlt</label>
                <input value="<?php echo $consulta->fechayhoraAlt ?>" name="fechayhoraAlt" required type="text" id="fechayhoraAlt" class="form-control" placeholder="fechayhoraAlt">
            </div>
            <div class="form-group">
                <label for="estado">estado</label>
                <input value="<?php echo $consulta->estado ?>" name="estado" required type="text" id="estado" class="form-control" placeholder="estado">
            </div>
            <div class="form-group">
                <label for="motivoBloqueo">motivoBloqueo</label>
                <input value="<?php echo $consulta->motivoBloqueo ?>" name="motivoBloqueo" required type="text" id="motivoBloqueo" class="form-control" placeholder="motivoBloqueo">
            </div>
            <div class="form-group">
                <label for="enlaceZoom">enlaceZoom</label>
                <input value="<?php echo $consulta->enlaceZoom ?>" name="enlaceZoom" required type="text" id="enlaceZoom" class="form-control" placeholder="enlaceZoom">
            </div>
            <div class="form-group">
                <label for="cupo">cupo</label>
                <input value="<?php echo $consulta->cupo ?>" name="cupo" required type="text" id="cupo" class="form-control" placeholder="cupo">
            </div>
            

            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "footer.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilos/signin.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Gestion consultas</title>
</head>
<body style="background-color: grey;">

<?php $url ="http://localhost/EntornosGraficosTPFinal"?>

    <div class="container ">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  nav-justified" >
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo $url?>/index.php">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" alt="Avatar Logo" style="width:100px;" class="rounded-pill" > 
              </a>
            </div>
            
            <li class="nav-item"><a class="nav-link" href="<?php echo $url?>/Vistas/Informacion.php">Informacion</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $url?>/Vistas/Login.php">Iniciar Sesión</a></li>
        
          </nav>

          <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
  Mapa del sitio
  </button>
  <div><br></div>
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
  Alumno
  </button>
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/Login.php">Iniciar Sesión</a>
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/ConsultaAlumnos.php">Mis Consultas</a> 
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/ListadoConsultasVisitante.php">Consultas</a> 

  
  <div><br></div>
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
  Docente
  </button>

  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/Login.php">Iniciar Sesión</a> 
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/CambiarContrasenia.php">Cambiar Contraseña</a> 
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/ConsultasDocentes.php">Mis Consultas</a> 
  <div><br></div>
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
  Administrador
  </button>
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/ListadoUsuarios.php">Usuarios</a>
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/ListadoConsultasAdmin.php">Consultas</a>
  <div><br></div>
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
  Funciones
  </button>
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/index.php">Inicio</a>
  <a class="list-group-item list-group-item-action" href="<?php echo $url?>/Vistas/Informacion.php">Informacion</a>
  

</div>
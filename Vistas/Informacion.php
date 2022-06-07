<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body style="background-color: grey;">
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark  nav-justified" >
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/67/UTN_logo.jpg" alt="Avatar Logo" style="width:100px;" class="rounded-pill" > 
              </a>
            </div>
            <li class="nav-item"><a class="nav-link" href="#about">Informacion</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Cerrar sesion</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Consultas</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Mis consultas</a></li>
          </nav>
          <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>(Informacion acerca de la Facultad)</h1>
          </div>
      
          <div class="row">
          <div class="col-xl-6 col-sm-12">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="usr">
          </div> 
          </div>
          <div class="row">
          <div class="col-xl-6 col-sm-12">
            <label for="cons">Tipo de consulta: </label>
            <input type="text" class="form-control" id="cons">
          </div>
          </div>
          <div class="row">
          <div class="col-xl-6 ">
            <label for="consulta">Consulta</label>
            <textarea class="form-control" rows="5" id="consulta"></textarea>
          </div> 
          </div>

        
      
          <br>
          <button type="button" class="btn btn-primary"> Enviar </button> <br> <br>
      
         
        <footer class=" bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="https://www.frro.utn.edu.ar/">Facultad Regional De Rosario</a>
          </div>
          <!-- Copyright -->
        </footer> 


</div>






          </body>
          </html>
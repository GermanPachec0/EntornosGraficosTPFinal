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
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          </nav>
          <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Lista de Consultas</h1>
            <p>Lorem ipsum...</p>
          </div><br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Ingresar Datos a buscar">
            <button class="btn btn-primary" type="button">Buscar</button>
          </div>  
          <table class="table table-dark">
            <thead>
              <tr>
                <th>IDConsulta</th>
                <th>Fecha Y Hora</th>
                <th>Fecha Y Hora Alternativa</th>
                <th>Estado</th>
                <th>Motivo Bloqueo</th>
                <th>Enlace Zoom</th>
                <th>Inscribirse</th>
              </tr>
            </thead>
            <tbody>
          
              <tr>
                <td>1</td>
                <td>14/5/2022 00:00:00</td>
                <td>14/5/2022 00:00:00</td>
                <td>Pendiente</td>
                <td>Licencia medica</td>
                <td><a href="#">LINK Zoom</a></td>
                <td> 
                  <button class="btn btn-success" type="button">Inscribirse</button>
                </td>
              </tr>
             
            </tbody>
          </table>
          
          <footer class=" bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Copyright:
              <a class="text-dark" href="https://utn.frro.etu.ar/">Facultad Regional De Rosario</a>
            </div>
            <!-- Copyright -->
          </footer>   
    </div>
    
</body>
</html>
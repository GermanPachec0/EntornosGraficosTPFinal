<?php 
  include("./usuario.php");
  session_start();
  if(isset($_SESSION['usuario']))
  {
      $myUser= new Usuario();
      $myUser = $_SESSION['usuario'];
    if($myUser -> getTipoUsuario() == "administrador")
    {
      include("template/menuAdmin.php");
    }
    else if ($myUser -> getTipoUsuario() == "docente")
    {
    include("template/menuDocente.php");
    }
    else if ($myUser -> getTipoUsuario() == "alumno")
    {
    include("template/menuAlumno.php");
    }
  } 
  else{
    include("template/menuVisitante.php");
  }
?>

          <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Informacion acerca de la Facultad</h1>
          </div>
        <br>
          <div class="row">
          <div class="col-7">
              <form action="enviarEmail.php" method="POST">
              <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email" required>
                  <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating">
                  <input type="text" class="form-control" id="floatingPassword" placeholder="Asunto" name="asunto" required>
                  <label for="floatingPassword">Asunto</label>
              </div>
              <br>
              <div class="form-floating">
                  <textarea style="height: 300px;" type="text" class="form-control" id="floatingPassword" placeholder="Escrite Tu Consulta" name="consulta" required> </textarea>
                  <label for="floatingPassword">Escribir Consulta</label>
              </div>

              <br>
              <input  type="submit" class="btn btn-primary" value="Enviar"> 
               <br> <br>

              </form>
            </div>
          <div class="col-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.8661653050344!2d-60.64471895517481!3d-32.954542712091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab11d0eb49c3%3A0x11f1d3d54f950dd0!2sUniversidad%20Tecnol%C3%B3gica%20Nacional%20%7C%20Facultad%20Regional%20Rosario!5e0!3m2!1ses!2sar!4v1655088523393!5m2!1ses!2sar" width="530" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>
      
          
          
      
          <?php include("./template/footer.php") ?>
       


</div>






          </body>
          </html>
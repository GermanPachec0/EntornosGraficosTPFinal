<?php

    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $consulta = $_POST['consulta'];
    mail($email,$asunto,$consulta); 
   
?>
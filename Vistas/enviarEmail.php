<?php

    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $consulta = $_POST['consulta'];
    $emailTo ="jc527464@gmail.com";

    mail($emailTo,$asunto,$consulta." Enviado por: '$email'"); 
    header ("Location: Informacion.php");
?>
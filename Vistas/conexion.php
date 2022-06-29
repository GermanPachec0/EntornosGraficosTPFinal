<?php
        $hostname = "localhost";
        $nombreUsuario = "id19186121_root";
        $password ="Root12345678.";
        $db = "id19186121_bs_consultas";
        $link = mysqli_connect($hostname,$nombreUsuario,$password) or die("Error al Conectar");
        mysqli_select_db($link,$db);
?>
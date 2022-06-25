<?php
  


    $tipousuario =  $_POST['tipousuario'];

    if($tipousuario== "alumno")
    {
        echo "BUSCAR ALUMNO";
        validarUsuario($tipousuario);
    }
    else if($tipousuario == "profesor")
    {
        echo " Buscar profesor";
        validarUsuario($tipousuario);
    }
    else if($tipousuario == "administrador")
    {
            echo "Buscar administrador";
            validarUsuario($tipousuario);
    }
    else {
        echo "Ingresar tipo de usuario";
        validarUsuario($tipousuario);
    }



    function validarUsuario($table)
    {
        session_start();
        include('conexion.php');
        include_once ("usuario.php");
        $legajo = $_POST['legajo'];
        $pass = $_POST['contraseña'];
        mysqli_select_db($link,$db);
        
        $vSql = "SELECT * from $table where legajo = '$legajo' and contraseña = '$pass'";
        $vResultado = mysqli_query($link,$vSql);
        $cant = mysqli_num_rows($vResultado);

        if($cant != 0)
        {
            $usuario = new Usuario();
            
            $vResultado = mysqli_query($link,$vSql);
            $fila = mysqli_fetch_array($vResultado);
                $usuario -> setLegajo($fila['legajo']);
                $usuario -> setEmail($fila['email']);
                $usuario -> setContrasenia($fila['contraseña']);
                $usuario -> setNombre($fila['nombre']);
                $usuario -> setApellido($fila['apellido']);
                $usuario -> setTipoUsuario($table);
            

            $_SESSION['usuario'] = $usuario;
            echo("Se encontro usuario".$usuario -> getNombre());
        return   header("Location: bienvenida.php");;
        
        }else
        {
            header("Location: ErrorLogin.php");
            
        }

        mysqli_free_result($vResultado);
        mysqli_close($link);



    }
?>
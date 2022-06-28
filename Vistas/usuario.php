<?php
    class Usuario {
        public $legajo;
        public $email;
        public $contrasenia;
        public $nombre;
        public $apellido;
        public $tipoUsuario;

         
        function setLegajo($legajo){
                $this -> legajo = $legajo;
        }
        function getLegajo(){
            return  $this -> legajo;
        }

        function setEmail($email){
            $this -> email  = $email;
        }
        function getEmail(){
            return  $this -> email;
        }
        function setContrasenia($contrasenia){
            $this -> contrasenia  = $contrasenia;
        }
        function getContrasenia(){
            return  $this -> contrasenia;
        }
        function setNombre($nombre){
            $this -> nombre  = $nombre;
        }
        function getNombre(){
            return  $this -> nombre;
        }
        function setApellido($apellido){
            $this -> apellido  = $apellido;
        }
        function getApellido(){
            return  $this -> apellido;
        }
        function setTipoUsuario($tipoUsuario){
            $this -> tipoUsuario  = $tipoUsuario;
        }
        function getTipoUsuario(){
            return  $this -> tipoUsuario;
        }
    
}

    
 ?>
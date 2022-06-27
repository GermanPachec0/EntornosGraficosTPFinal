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
    
        function guardar()
        {
            global $mysqli;
            $sentencia = $mysqli->prepare("INSERT INTO alumno ( legajo,email,contrasenia;,nombre,apellido,tipoUsuario)
                    VALUES
                    (?, ?,?, ?, ?,?)");
            $sentencia->bind_param("ss", $this->legajo,$this->email,$this->contrasenia,$this->nombre,$this->apellido,$this->tipoUsuario);
            $sentencia->execute();
        }    
        
        public function actualizar()
        {
            global $mysqli;
            $sentencia = $mysqli->prepare("update alumno set legajo= ?,,email= ?,contrasenia= ?,nombre= ?,apellido= ?,tipoUsuario= ?");
            $sentencia->bind_param("ssi", $this->legajo,$this->email,$this->contrasenia,$this->nombre,$this->apellido,$this->tipoUsuario);
            $sentencia->execute();
        }
    
        


    
}

    
 ?>
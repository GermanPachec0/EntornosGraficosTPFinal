<?php
class consulta
{
    private $idMateria, $legajoDocente, $idConsulta,$estado,$motivoBloqueo,$enlaceZoom,$cupo;

    public function __construct($idMateria, $legajoDocente,$estado,$fechayhoraAlt,$enlaceZoom,$cupo,$motivoBloqueo,$idConsulta = null)
    {
        $this->idMateria= $idMateria;
        $this->fechayhoraAlt = $fechayhoraAlt;
        $this->legajoDocente = $legajoDocente;
        $this->estado = $estado;
        $this->motivoBloqueo = $motivoBloqueo;
        $this->cupo= $cupo;
        $this->enlaceZoom= $enlaceZoom;
        if ($idConsulta) {
            $this->idConsulta = $idConsulta;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO consulta
            (idMateria, legajoDocente,fechayhoraAlt, idConsulta,estado,motivoBloqueo,enlaceZoom,cupo)
                VALUES
                (?,?,?,?,?,?,?)");
        $sentencia->bind_param("ss",  $this->idMateria, $this->fechayhoraAlt,$this->legajoDocente,$this->idConsulta,$this->enlaceZoom, $this->estado,$this->motivoBloqueo,$this->cupo,);
        $sentencia->execute();
    }

    public static function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT idMateria, idConsulta FROM consulta");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    public static function obtenerUno($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT idMateria, idConsulta FROM consulta WHERE idMateria = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado->fetch_object();
    }
    public function actualizar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("update consulta set idMateria=?, legajoDocente=?,fechayhoraAlt=?, idConsulta=?,estado=?,motivoBloqueo=?,enlaceZoom=?,cupo=?");
        $sentencia->bind_param("ssi", $this->nombre, $this->grupo, $this->id);
        $sentencia->execute();
    }

    public static function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM consulta WHERE idMateria = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}

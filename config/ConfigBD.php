<?php
class ConfigBD {
    private $servidor = "localhost";
    private $basedatos = "curriculum";
    private $usuario = "root";
    private $contrasena = ""; //no tengo contrasenna 

    public function getConexion() {
        try {
            $conexionMysql = new mysqli(
                $this->servidor,
                $this->usuario,
                $this->contrasena,
                $this->basedatos,
            );
            if ($conexionMysql->connect_errno) 
            {
                throw new Exception("Fallo la conexión: " . $conexionMysql->connect_error);
            }
            $conexionMysql->set_charset("utf8");
            return $conexionMysql;
        } catch (Exception $e) {
            die("Error al intentar realizar la conexión: " . $e->getMessage());
        }
    }
}
?>
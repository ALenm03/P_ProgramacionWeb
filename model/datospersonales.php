<?php
class datospersonales {
    public $id, $nombre, $primerapellido, $segundoapellido;
    public $profesion, $telefono, $correo, $ciudad, $estado;
    public $pais, $urlinstagram, $urllinkedin, $activo;
    private $connexionBD;

    //Porque no se pone include a esta clase?????? conexion()
    public function __construct() {
        $this->connexionBD = new conexion();
    }

    public function insertardatospersonales() {
        try {
            $this->connexionBD->query = "
                INSERT INTO datospersonales (id, nombre, primerapellido, segundoapellido) 
                VALUES (NULL, '$this->nombre', '$this->primerapellido', '$this->segundoapellido')";
            return $this->connexionBD->realizarinsert();
        } 
        catch (Exception $e) 
        {
            throw $e;
        }
    }

    public function consultardatospersonalestodos() {
        try {
            $this->connexionBD->query = "
                SELECT P.id AS clave, 
                       P.nombre AS nombreC, 
                       P.primerapellido AS Apellido, 
                       P.segundoapellido AS Segundo_Apellido, 
                       P.profesion AS trabajo 
                FROM {$this->connexionBD->BD}.datospersonales AS P 
                WHERE P.activo = 1";
            return $this->connexionBD->consultardatos();
        } 
        catch (Exception $e) 
        {
            throw $e;
        }
    }
}
?>

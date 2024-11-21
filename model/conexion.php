<?php
class conexion {
    private $connectar;
    public $query;
    public $BD = "curriculum";

    public function __construct() {
        $config = new ConfigBD();
        $this->connectar = $config->getConexion();
    }

    public function realizarinsert() {
        try {
            $resultado = $this->connectar->query($this->query);
            //que es el ?.     
            return $resultado ? $this->connectar->insert_id : 0;
        } 
        catch (Exception $x) 
        {
            throw $x;
        }
    }

    public function realizaupdatedelet() {
        try {
            $resultado = $this->connectar->query($this->query);
            return $resultado ? 1 : 0;
        } catch (Exception $x) {
            throw $x;
        }
    }

    public function consultardatos() {
        try {
            return $this->connectar->query($this->query);
        } catch (Exception $x) {
            throw $x;
        }
    }
}
?>

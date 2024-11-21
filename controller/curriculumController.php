<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/P_ProgramacionWeb/config/ConfigBD.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/P_ProgramacionWeb/model/conexion.php");
include_once($_SERVER['DOCUMENT_ROOT'] . "/P_ProgramacionWeb/model/datospersonales.php");

class curriculumController {
    //funcion para permitir el ingreso de los datos
    function agregarDatosPersonales(){
        try{
            $obj = new datospersonales();
            $obj->nombre = $_POST["txtNombre"];
            $obj->primerapellido = $_POST["txtPrimerApellido"];
            $obj->segundoapellido = $_POST["txtSegundoApellido"];
            $obj->insertarDatosPersonales();
            if($resultado > 0){
                $obJson['resultado'] = 'succes';
                $obJson['mensaje'] = 'operacion satisfactoria';

            }
            else {
                $obJson['resultado'] = 'errror';
                $obJson['mensaje'] = 'Errorrrrr';

            }
            print json_encode($obJson);
        }
        catch(Exception $e){
            $obJson['resultado'] = 'errorr';
            $obJson['mensaje'] = $e;
            print json_encode($obJson);
        }
    }

    public function consultardatospersonalestotales() {
        try {
            $objDatos = new datospersonales();
            return $objDatos->consultardatospersonalestodos();
        } catch (Exception $e) {
            die("Error al consultar datos personales: " . $e->getMessage());
        }
    }
}
//insercion de datos a bd
//valida que el elemnto operacion se envie, si existe ejecuta la condicion. el nombre operacion es el que mandamos en la funcion de JS de CapturaDatos.php
if(isset($_POST["operacion"])){
    switch($_POST["operacion"]){
        case "RegistraDatos":
            $controller = new curriculumController();
            $controller->agregarDatosPersonales();
            break;
    }
}
?>

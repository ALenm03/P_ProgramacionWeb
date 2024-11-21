<?php
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Formulario Datos Personales</h3>
            </div>
            <form role="form" id="frmDatosPer" name="frmDatosPer">
                <div class="card-body">
                    
                        <div class="form-group">
                            <label for="txtNombre">Nombre</label>
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" maxlenght="100" placeholder="Ingresa el Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="txtPrimerApellido">Primer Primer Apellido</label>
                            <input type="text" id="txtPrimerApellido" name="txtPrimerApellido" class="form-control" maxlenght="50" placeholder="Ingresa el Primer Apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="txtSegundoApellido">Segundo Apellido</label>
                            <input type="text" id="txtSegundoApellido" name="txtSegundoApellido" class="form-control" maxlenght="50" placeholder="Ingresa el Segundo Apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="txtProfesion">Profesion</label>
                            <input type="text" id="txtProfesion" name="txtProfesion" class="form-control" maxlenght="50" placeholder="Ingresa la Profesion">
                        </div>
                    
                </div>
            
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-left">Registrar</button>
                    <button type="button" class="btn btn-danger float-right" onclick="cargarpag('main', 'views/Personales/tablaDatos.php')">Regresar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="plugins/validator.js"></script>
<script type="text/javascript">

    function registrarDatosPersonales(){
        //variable con la que le enviamos todos lo datos al server
        var datos = $("#frmDatosPer").serialize() + "&operacion=RegistraDatos";
        //la peticion por get concatena todos los valores en la url, no se ocultan los datos, es de manera sincrona
        //las de post se quedan ocultas, debido a que necesitan herrmiantas de desarrollador para obtener sus datos
        // ruta a la que queremos hacer la peticion (DNS, archivo, Otra pagina), datos a enviarle, funcion que se ejecuta al recibir la respuesta, opcional depende de que te responda, si es jason, ponesmos "json", si es html no ponemos nada
        $.post("controller/curriculumController.php", datos, function(data){
            //acciones para la respuesta del server
            alert(data.mensaje);
        }, 'json');
    }

    function validarFormulario(){
        $("#frmDatosPer").validator().on('submit',function(e){
            if(!e.isDefaultPrevented()){
                e.preventDefault();
                registrarDatosPersonales();
            }
        });
    }

    $(document).ready(
        function(){
            validarFormulario();
        });
</script>
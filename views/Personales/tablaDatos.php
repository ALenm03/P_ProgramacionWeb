<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/P_ProgramacionWeb/controller/curriculumController.php");

$objController = new curriculumController();
$data = $objController->consultardatospersonalestotales();
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4>Listado de datos</h4>
                <!--Se supone que esta vista esta en el index, por lo que podemmos seguir utilizando las funciones de JS que tenemos en el index.php-->
            <a href="#" class="btn btn-primary float-left" onclick="cargarpag('main', 'views/personales/CapturaDatos.php')" >Agregar</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Profesión</th>
                            <th>Operadores</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($data && $data->num_rows > 0) {
                            while ($row = $data->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['nombreC'] . " " . $row['Apellido'] . " " . $row['Segundo_Apellido']; ?></td>
                                    <td><?php echo $row['trabajo']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-success">Mostrar</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } 
                        else 
                        {
                            ?>
                            <tr>
                                    <!--porque colspan="3"?-->
                                <td colspan="3">No existen datos a mostrar</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

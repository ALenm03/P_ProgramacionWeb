<!DOCTYPE html>
<html lang="en">

<head>
    <title>Colores bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/adminlte.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
</head>

<body>
    <!--El div que contiene todo-->
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand">
                <!--Icono de las 3 baritas-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
                <!--Icono de cuadrito-->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>

        </nav>

        <!---Barra lateral --->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!--Titulo de Bienvenidos-->
            <a href="#" class="brank-link text-xl-center">
                <h4>Bienvenidos</h4>
            </a>
            <!---Div con el contenido de la Barra lateral--->
            <div class="sidebar">
                <!---Seccion reconocer usuario --->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <!---Icono de Usr --->
                    <div class="image">
                        <i class="fas fa-user fa-2x"></i>
                    </div>
                    <!---Nombre del Usuario--->
                    <div class="info">
                        <a href="#" class="d-block">
                            Usuario : Alan
                        </a>
                    </div>

                </div>
                <!--Lista para el menu-->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Menu &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <i class="left fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">,
                                        <!--pq #?-->
                                    <a href="#" class="nav-link" onclick="cargarpag('main','views/Personales/tablaDatos.php')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Personas</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SubMenu2</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SubMenu2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Contenido -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid" id="main">
                    Aqui se carga el contenido de la paginas
                </div>
            </section>
        </div>
    </div>

    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="dist/js/adminlte.js"></script>

    <!--Funcion para cargar alguna pagina o vista-->
    <script type="text/javascript">
        function cargarpag(div, ruta) {
            $("#" + div).load(ruta)
        }
    </script>

</body>

</html>
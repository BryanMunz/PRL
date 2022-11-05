<?php
//Crea el menú
require('../../helpers/menu_portal.php');
//Importa la ruta dependiendo de la carpeta
require('../../helpers/funciones_generales.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Library State - Acción</title>

    <!-- css files -->
    <link rel="stylesheet" href="../Recources/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="../Recources/css/main.css">
    <link rel="stylesheet" href="../Recources/css/destacados/principal.css">
    <link rel="stylesheet" href="../Recources/css/destacados.css">
    <link rel="stylesheet" href="../Recources/css/nosotros.css">
</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow py-2 py-sm-0">
        <a class="navbar-brand" href="../../index.php">
            <h5>Library State</h5>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container-fluid">
                <div class="row py-3">
                    <div class="col-lg-6 col-sm-12 mb-3 mb-sm-0">
                        <ul class="navbar-nav mr-auto">
                            <!-- always use single word for li -->
                            <li class="nav-item active">
                                <a class="nav-link" href="../../index.php">Inicio<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Géneros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./Accion.php">Acción</a>
                                    <a class="dropdown-item" href="./educativo.php">Educación</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="./otros_generos.php">Otros Géneros...</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <form class="form-inline search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Escribe un Titulo, autor o genero" aria-label="Type Title, auther or genre">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile float-right">
            <div class="saved">
                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bookmark fa-2x"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="./details.php">
                        <div class="row">
                            <div class="col"><img src="../img/cover1.jpg" width="50"></div>
                            <div class="col">
                                <h5>One piece 1</h5>
                                <small>Anterior <span>VOL. 11</span></small>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="./details.php">
                        <div class="row">
                            <div class="col"><img src="../img/cover1.jpg" width="50"></div>
                            <div class="col">
                                <h5>One piece 1</h5>
                                <small>Anterior <span>VOL. 11</span></small>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <a class="dropdown-item" href="./otros_generos.php">Ver todos los libros guardados (3)</a>
                </div>
            </div>
            <div class="account">
                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle fa-2x"></i><i class="fa fa-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="../../Users/login.php">Iniciar Sesión</a>
                    <a href="../../Users/registro.php" class="dropdown-item">Registrarse Ahora</a>
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- end navbar-->

    <!-- start lastest -->
    <div class="lastest container mt-4 mt-sm-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-weight-bolder float-left">Acción</h2>
            </div>
            <div class="col-lg-6">
                <ul class="calendar list-unstyled list-inline float-right font-weight-bold mt-3 mt-sm-0">
            </div>
        </div>
        <div class="posts row">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card mb-3">
                    <a href="../Pages/details.php"><img src="../img/cover1.jpg" class="card-img-top" alt=""></a>
                    <div class="over text-center">
                        <div class="head text-left">
                            <h6>One Piece</h6>
                        </div>
                        <div class="about-list">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Genero:</th>
                                        <td>Ficcion de Aventuras, Accion</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Artista:</th>
                                        <td>Eiichirō Oda</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Actualizado:</th>
                                        <td>VOL. 125</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="about text-muted">
                            Empieza esta emocionante aventura junto a Luffy.
                        </p>
                        <a class="reading btn" href="../Pages/details.php">Empezar a leer el VOL. 1</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="../Pages/details.php">One Piece</a></h5>
                        <p class=" card-text">CH. 2</p>
                        <p class="card-text"><small class="text-muted text-uppercase">Actualizado!</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card mb-3">
                    <a href="../Pages/details.html"><img src="../img/cover3.jpg" class="card-img-top" alt=""></a>
                    <div class="over text-center">
                        <div class="head text-left">
                            <h6>One Piece</h6>
                        </div>
                        <div class="about-list">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Genero:</th>
                                        <td>Ficcion de Aventuras, Accion</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Artista:</th>
                                        <td>Eiichirō Oda</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Actualizado</th>
                                        <td>VOL. 125</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="about text-muted">
                            Empieza esta emocionante aventura junto a Luffy.
                        </p>
                        <a class="reading btn" href="../Pages/details.php">Empezar a lee el VOL. 1</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="../Pages/details.php">One Piece</a></h5>
                        <p class="card-text">CH. 2</p>
                        <p class="card-text"><small class="text-muted text-uppercase">Actualizado</small></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end lastest -->

        <!-- start footer -->
        <footer>
            <div class="container py-4">
                <span class="copyright">&copy; 2022 ZFCon</span>
                <span class="design float-right">Designed by ZFCon</span>
            </div>
        </footer>
        <!-- end footer -->

        <!-- js files -->
        <script src="../Recources/js/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="../Recources/js/bootstrap.min.js"></script>
        <script src="../Recources/js/main.js"></script>
</body>

</html>
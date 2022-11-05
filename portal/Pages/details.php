<?php
require('../../helpers/menu_portal.php'); //Crea el menú
require('../../helpers/funciones_generales.php'); //Importa la ruta dependiendo de la carpeta
//Verifica si la variable ha sido declarada y además tiene información
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>One Piece</title>

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
                                <a class="nav-link" href="../../index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Navegar
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
                                <input type="text" class="form-control" placeholder="Escribe un titulo, autor o genero" aria-label="Type Title, auther or genre">
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

    <!-- start reading intro -->
    <div class="container my-5">
        <div class="read-intro bg-light">
            <i class="far fa-bookmark fa-3x"></i>
            <div class="row">
                <div class="cover col-*">
                    <img class="shadow" src="../img/cover1.jpg" alt="">
                </div>
                <div class="info col">
                    <h2 class="head">One piece</h2>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Genero:</th>
                                <td>Ficcion de Aventuras, Aventuras</td>
                            </tr>
                            <tr>
                                <th scope="row">Artista:</th>
                                <td>Eiichirō Oda</td>
                            </tr>
                            <tr>
                                <th scope="row">Actualizado:</th>
                                <td>VOL. 125</td>
                            </tr>
                            <tr>
                                <th scope="row">Calificación:</th>
                                <td><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star-half-alt fa-2x"></i> <span class="font-weight-bold ml-3">(10/9)</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>

                        Monkey D. Luffy se niega a que nadie se interponga en su camino para convertirse en Rey de los Piratas. Se lanza a sucar los mares y se convertirá en un capitán dispuesto a no darse por vencido jamás hasta hacerse con el mayor tesoro de la historia: el legendario One Piece. <a href="#">Leer mas...</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <a class="btn btn-red my-3 mx-1 px-5" href="#">Empezar a leer el VOL. 1</a>
            </div>
        </div>
    </div>
    <!-- end reading intro -->

    <!-- start intro lists -->
    <div class="container my-5 bg-white">
        <div class="intro-lists">
            <div class="head-list row bg-light">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a data-toggle="tab" class="active" href="#ch">Ch.</a></li>
                    <li class="list-inline-item"><a data-toggle="tab" href="#vol">VOL.</a></li>
                    <li class="list-inline-item"><a data-toggle="tab" href="#related">Related</a></li>
                    <li class="list-inline-item"><a data-toggle="tab" href="#gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <!-- start ch -->
                <div id="ch" class="tab-pane fade in active show">
                    <div class="row">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th><a href="details.html">CH. 1, Luffy, me convertire en el rey de los piratas.</a></th>
                                    <td class="text-muted text-uppercase float-right">Hace 8 horas</td>
                                </tr>
                                <tr>
                                    <th><a href="details.html">CH. 2, Aparece el gran espadachin cazador de piratas, Zoro.</a></th>
                                    <td class="text-muted text-uppercase float-right">Hace 8 horas</td>
                                </tr>
                                <tr>
                                    <th><a href="details.html">Ch. 3, Morgan contra Luffy, ¿Quien sera esa belleza misteriosa?</a></th>
                                    <td class="text-muted text-uppercase float-right">8 hours ago</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end ch -->

                <!-- start vol -->
                <div id="vol" class="tab-pane fade">
                    <div class="row">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th><a href="./details.php">VOL. 2, Luffy in the island</a></th>
                                    <td class="text-muted text-uppercase float-right">8 hours ago</td>
                                </tr>
                                <tr>
                                    <th><a href="./details.php">VOL. 2, Luffy in the garden</a></th>
                                    <td class="text-muted text-uppercase float-right">8 hours ago</td>
                                </tr>
                                <tr>
                                    <th><a href="./details.php">VOL. 3, Luffy in the school</a></th>
                                    <td class="text-muted text-uppercase float-right">8 hours ago</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end vol -->

                <!-- start related -->
                <div id="related" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="./details.php">
                                <div class="card mb-3">
                                    <img src="../img/cover2.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">One piece</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="./details.php">
                                <div class="card mb-3">
                                    <img src="../img/cover2.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">One piece</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="./details.php">
                                <div class="card mb-3">
                                    <img src="../img/cover2.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">One piece</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <a href="./details.php">
                                <div class="card mb-3">
                                    <img src="../img/cover2.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">One piece</h5>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <!-- end related -->

                <!-- start gallery -->
                <div id="gallery" class="tab-pane fade">
                    <div class="imgrow">
                        <div class="imgcol">
                            <img src="../img/cover1.jpg" width="100%">
                            <img src="../img/cleancode.jpg" width="100%">
                            <img src="../img/eloquent.jpg" width="100%">

                        </div>
                        <div class="imgcol">
                            <img src="../img/cover3.jpg" width="100%">
                            <img src="../img/no-image-.png" width="100%">
                            <img src="../img/cover4.jpg" width="100%">
                        </div>
                        <div class="imgcol">
                            <img src="../img/no-image-.png" width="100%">
                            <img src="../img/11.jpg" width="100%">
                            <img src="../img/cover2.jpg" width="100%">
                        </div>
                    </div>
                </div>
                <!-- end gallery-->

            </div>
        </div>
    </div>
    <!-- end sh. list -->

    <!-- start footer -->
    <footer>
        <div class="container py-4">
            <span class="copyright">&copy; 2019 ZFCon</span>
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
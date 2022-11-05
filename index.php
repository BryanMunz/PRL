<?php
require('./helpers/menu_portal.php');
require('./helpers/funciones_generales.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Library State</title>

    <!-- css files -->
    <link rel="stylesheet" href="./portal/Recources/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="./portal/Recources/css/main.css">
    <link rel="stylesheet" href="./portal/Recources/css/destacados/principal.css">
    <link rel="stylesheet" href="./portal/Recources/css/destacados.css">
    <link rel="stylesheet" href="./portal/Recources/css/nosotros.css">
</head>

<body>
    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow py-2 py-sm-0">
        <a class="navbar-brand" href="./index.php">
            <h5>Library State</h5>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container-fluid">
                <div class="row py-3">
                    <div class="col-lg-6 col-sm-12 mb-3 mb-sm-0">
                        <ul class="navbar-nav mr-auto">
                            <!-- always use single word for li -->
                            <li class="nav-item active">
                                <a class="nav-link" href="./index.php">Inicio<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Géneros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./portal/Pages/Accion.php">Acción</a>
                                    <a class="dropdown-item" href="./portal/Pages/educativo.php">Educación</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="./portal/Pages/otros_generos.php">Otros Géneros...</a>
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
                    <a class="dropdown-item" href="./portal/Pages/details.php">
                        <div class="row">
                            <div class="col"><img src="./portal/img/cover1.jpg" width="50"></div>
                            <div class="col">
                                <h5>One piece 1</h5>
                                <small>Anterior <span>VOL. 11</span></small>
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="./portal/Pages/details.php">
                        <div class="row">
                            <div class="col"><img src="./portal/img/cover1.jpg" width="50"></div>
                            <div class="col">
                                <h5>One piece 1</h5>
                                <small>Anterior <span>VOL. 11</span></small>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <a class="dropdown-item" href="./portal/Pages/otros_generos.php">Ver todos los libros guardados (3)</a>
                </div>
            </div>
            <div class="account">
                <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle fa-2x"></i><i class="fa fa-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="./Users/login.php">Iniciar Sesión</a>
                    <a href="./Users/registro.php" class="dropdown-item">Registrarse Ahora</a>
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- end navbar-->

    <!-- start slider -->
    <br>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="mangaslider" class="carousel slide" data-ride="carousel" class="container" class="col-sm-12">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./portal/img/11.jpg" alt="First slide" width="620px" height="500px">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="font-weight-bolder">One Piece</h2>
                                <a href="./portal/Pages/details.php"><button class="btn btn-danger">Leer Ahora</button></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./portal/img/EloJavaScript.jpg" alt="Second slide" width="620px" height="500px">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="font-weight-bolder">Eloquent JavaScript</h2>
                                <a href="./portal/Pages/details.php"><button class="btn btn-danger">Leer Ahora</button></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./portal/img/Clean_Code-portada.jpg" alt="Third slide" width="620px" height="500px">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="font-weight-bolder">Código Limpio</h2>
                                <a href="./portal/Pages/details.php"><button class="btn btn-primary">Leer Ahora</button></a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#mangaslider" role="button" data-slide="prev">
                        <div><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#mangaslider" role="button" data-slide="next">
                        <div><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider -->

    <!-- start lastest -->
    <div class="lastest container mt-4 mt-sm-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-weight-bolder float-left">Los libros más Nuevos</h2>
            </div>
            <div class="col-lg-6">
                <ul class="calendar list-unstyled list-inline float-right font-weight-bold mt-3 mt-sm-0">
            </div>
        </div>
        <div class="posts row">
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card mb-3">
                    <a href="./portal/Pages/details.php"><img src="./portal/img/cover1.jpg" class="card-img-top" alt=""></a>
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
                        <a class="reading btn" href="./portal/Pages/details.php">Empezar a leer el VOL. 1</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="./portal/Pages/details.php">One Piece</a></h5>
                        <p class=" card-text">CH. 2</p>
                        <p class="card-text"><small class="text-muted text-uppercase">Actualizado!</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card mb-3">
                    <a href="./portal/Pages/details.php"><img src="./portal/img/cover3.jpg" class="card-img-top" alt=""></a>
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
                        <a class="reading btn" href="./portal/Pages/details.php">Empezar a lee el VOL. 1</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="./portal/Pages/details.php">One Piece</a></h5>
                        <p class="card-text">CH. 2</p>
                        <p class="card-text"><small class="text-muted text-uppercase">Actualizado</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card mb-3">
                    <a href="./portal/Pages/details.php"><img src="./portal/img/eloquent.jpg" class="card-img-top" alt=""></a>
                    <div class="over text-center">
                        <div class="head text-left">
                            <h6>Eloquent JavaScript</h6>
                        </div>
                        <div class="about-list">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Genero:</th>
                                        <td>Programacion, Educacion</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Autor:</th>
                                        <td>Marijn Haverbeke</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Actualizado:</th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="about text-muted">
                            Este es un libro de JavaScript, programacion y las maravillas digitales.
                        </p>
                        <a class="reading btn" href="./portal/Pages/details.php">Empezar a leer el CAP. 1</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="./portal/Pages/details.php">Eloquent JavaScript</a></h5>
                        <p class="card-text">CH. 1</p>
                        <p class="card-text"><small class="text-muted text-uppercase">Terminado!</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="card mb-3">
                    <a href="./portal/Pages/details.php"><img src="./portal/img/cleancode.jpg" class="card-img-top" alt=""></a>
                    <div class="over text-center">
                        <div class="head text-left">
                            <h6>Codigo Limpio</h6>
                        </div>
                        <div class="about-list">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">Genero:</th>
                                        <td>Programacion, Educacion</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Autor:</th>
                                        <td>Robert Cecil Martin</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Terminado</th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="about text-muted">
                            Este es un libro sobre buenas practicas en programacion y desarrollo agil de software.
                        </p>
                        <a class="reading btn" href="./portal/Pages/details.php">Empezar a leer el CAP. 1</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="./portal/Pages/details.php">Codigo Limpio</a></h5>
                        <p class="card-text">CH. 1</p>
                        <p class="card-text"><small class="text-muted text-uppercase">Terminado!</small></p>
                    </div>
                </div>
            </div>
        </div>
        <section class="acerca-de-nosotros">
            <h2 class="titulo">Acerca de nosotros.</h2>
            <div class="nosotros">
                <p class="descripcion">
                    Somos un grupo dedicado a compartir conocimiento a traves de los libros. Conozcanos.
                </p>
            </div>
            <div class="personal">
                <img src="./portal//img/perfil/My Dress-Up Darling.png" alt="Perfil Daniel" class="imagen-perfil">
                <img src="./portal//img/perfil/FdsOQKKWAAAy54h.jpg" alt="Perfil 2" class="imagen-perfil">
                <img src="./portal//img/perfil/usuario.png" alt="Perfil 2" class="imagen-perfil">
                <img src="./portal//img/perfil/usuario.png" alt="Perfil 2" class="imagen-perfil">
                <img src="./portal//img/perfil/usuario.png" alt="Perfil 2" class="imagen-perfil">

            </div>
            <div class="personal nombre">
                <h5>Daniel Barba</h5>
                <h5>Marco Bryan</h5>
                <h5>Saraii </h5>
                <h5>Josue</h5>
                <h5>Guadalupe</h5>
            </div>


        </section>
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
        <script src="./portal/Recources/js/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="./portal/Recources/js/bootstrap.min.js"></script>
        <script src="./portal/Recources/js/main.js"></script>
</body>

</html>
<?php
    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Heladeria Frambuesa</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400&display=swap" rel="stylesheet">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="assets/css/templatemo-barber-shop.css" rel="stylesheet">


    </head>

    <body>

        <div class="container-fluid">
            <div class="row">

                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <nav id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block sidebar collapse p-0">

                    <div class="position-sticky sidebar-sticky d-flex flex-column justify-content-center align-items-center">
                        <a class="navbar-brand" href="#section_1">
                            <img src="assets/images/templatemo-barber-logo.png" class="logo-image img-fluid" align="">
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php?c=WebPage&a=home">INICIO</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll active" href="index.php?c=WebPage&a=perfil">PERFIL</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php?c=WebPage&a=products">PRODUCTOS</a>
                            </li>

                            <!--<li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">PRECIOS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">CONTACTO</a>
                            </li>-->
                        </ul>
                    </div>
                </nav>

                <div class="col-md-8 ms-sm-auto col-lg-9 p-0">
                    <section class="about-section section-padding" id="section_2">

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12 mx-auto">
                                    <h2 class="mb-4">Usuario : <?php echo $_SESSION['Usuario']['usuario'] ?> </h2>

                                    <div class="mt-5 pb-3 mb-5">
                                        <div class="row">
                                            <div class="col-md-6 mt-3 mb-3">
                                                <div class="col-lg-10 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                                                    <img src="assets/images/barber/epifanio.jpg" class="custom-block-bg-overlay-image img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Nombre : <?php echo $_SESSION['Usuario']['nombre'] . " " . $_SESSION['Usuario']['apellidos'] ?></p>
                                                <p>Fecha de Nacimieto : <?php echo $_SESSION['Usuario']['fecha_nac'] ?></p>
                                                <p>Correo : <?php echo $_SESSION['Usuario']['correo'] ?></p>
                                                <p>Telefono : <?php echo $_SESSION['Usuario']['telefono'] ?></p>
                                                <p>Token : <?php echo $_SESSION['token'] ?></p>
                                                <a href="index.php?c=WebPage&a=modificaPerfil" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Modificar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>






                </div>
            </div>
        </div>
        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/dom.js"></script>
        <script src="assets/js/agregarLista.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>
</html>

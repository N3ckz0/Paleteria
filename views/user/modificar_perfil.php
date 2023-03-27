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
                                    <div class="mt-5 pb-3 mb-5">
                                        <form action="index.php?c=usuarios&a=perfil_usuario" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                            <div class="text-center mb-5">
                                                <h2 class="mb-1">Modificar usuario</h2>
                                            </div>

                                            <div class="booking-form-body">
                                                <div class="row">
                                                        <input type="hidden" name="bb-id" id="bb-id" class="form-control" value="<?php echo $_SESSION['Usuario']['id']?>">
                                                    <div class="col-lg-6 col-12">
                                                        <label for="bb-name">Nombre</label>
                                                        <input type="text" name="bb-name" id="bb-name" class="form-control" value="<?php echo $_SESSION['Usuario']['nombre']?>" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <label for="bb-apellido">Apellido</label>
                                                        <input type="text" name="bb-apellido" id="bb-apellido" class="form-control" value="<?php echo $_SESSION['Usuario']['apellidos'] ?>" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <label for="bb-user">Usuario</label>
                                                        <input type="text" name="bb-user" id="bb-user" class="form-control" value="<?php echo $_SESSION['Usuario']['usuario'] ?>" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <label for="bb-phone">Telefono</label>
                                                        <input type="tel" class="form-control" name="bb-phone" value="<?php echo $_SESSION['Usuario']['telefono'] ?>" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required="">
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <label for="bb-correo">Correo</label>
                                                        <input type="mail" name="bb-correo" id="bb-correo" class="form-control" value="<?php echo $_SESSION['Usuario']['correo']?>" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <label for="bb-date">Fecha de nacimiento</label>
                                                        <input type="text" name="bb-date" id="bb-date" class="form-control" value="<?php echo $_SESSION['Usuario']['fecha_nac'] ?>" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <label for="bb-password">Contraseña</label>
                                                        <input type="password" name="bb-password" id="bb-password" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                    <button type="submit" class="form-control">Modificar</button>
                                                </div>
                                            </div>
                                        </form>
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

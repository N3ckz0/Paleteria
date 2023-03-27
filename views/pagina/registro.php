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
                        <a class="navbar-brand" href="index.php?c=WebPage&a=index">
                            <img src="assets/images/templatemo-barber-logo.png" class="logo-image img-fluid" align="">
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php?c=WebPage&a=index">INICIO</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="col-md-8 ms-sm-auto col-lg-9 p-0">

                    <section class="booking-section section-padding" id="booking-section">
                        <div class="container">
                            <div class="row" style="height: 80vh;">

                                <div class="col-lg-10 col-12 mx-auto">
                                    <form action="index.php?c=usuarios&a=registro" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                        <div class="text-center mb-5">
                                            <h2 class="mb-1">Registro</h2>

                                            <p>Por favor igresa correctamente los datos solicitados.</p>
                                        </div>

                                        <div class="booking-form-body">
                                            <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" name="bb-name" id="bb-name" class="form-control" placeholder="Nombre" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" name="bb-lastname" id="bb-lastname" class="form-control" placeholder="Apellidos" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="tel" class="form-control" name="bb-phone" placeholder="Telefono 22-29-16-68-94" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="date" name="bb-date" id="bb-date" class="form-control" placeholder="Date" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="text" name="bb-user" id="bb-user" class="form-control" placeholder="   Usuario" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="email" name="bb-correo" id="bb-correo" class="form-control" placeholder="Correo" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="password" name="bb-password" id="bb-password" class="form-control" placeholder="Contraseña" required>
                                                    </div>

                                                    <div class="col-lg-6 col-12">
                                                        <input type="password" name="bb-vpassword" id="bb-vpassword" class="form-control" placeholder="Verifica Contraseña" required>
                                                    </div>
                                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                        <button type="submit" class="form-control">Registrarse</button>
                                                    </div>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </section>
            </div>

        <!-- JAVASCRIPT FILES -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/click-scroll.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/dom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>
</html>
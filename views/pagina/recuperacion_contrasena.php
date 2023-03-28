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
                    <section class="booking-section d-flex justify-content-center align-items-center" style="height:100vh">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-12 mx-auto">
                                    <form action="index.php?c=usuarios&a=recupera" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                                        <div class="text-center mb-5">
                                            <h2 class="mb-1">Recuperacion de contraseña</h2>
                                            <p>Por favor ingresa un correo al que podamos mandar tu nueva contraseña</p>
                                        </div>
                                        <div class="booking-form-body">
                                            <div class="row">

                                                <div class="col-lg-6 col-12">
                                                    <input type="mail" name="bb-correo" id="bb-correo" class="form-control" placeholder="example@test.com" required>
                                                </div>

                                                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                    <button type="submit" class="form-control">Iniciar Sesion</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
        <script src="assets/js/click-scroll.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/dom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </body>
</html>
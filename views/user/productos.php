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
                                <a class="nav-link click-scroll active" href="index.php?c=WebPage&a=homeUser">INICIO</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php?c=WebPage&a=perfilUser">PERFIL</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.php?c=WebPage&a=productsUser">PRODUCTOS</a>
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
                    <!--Promociones-->

                    <section class="services-section section-padding">


                        <div class="container">
                            <div class="row">

                                <div class="col-lg-12 col-12 d-flex justify-content-around">
                                    <h2 class="mb-5">Productos</h2>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="assets/images/services/woman-cutting-hair-man-salon.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Frutal</h4>

                                            <button class="services-thumb-price">$36.00</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <div class="services-thumb">
                                        <img src="assets/images/services/hairdresser-grooming-their-client.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Marino</h4>

                                            <button class="services-thumb-price">$25.00</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                    <div class="services-thumb">
                                        <img src="assets/images/services/helado_familiar.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Familiar</h4>

                                            <button class="services-thumb-price">$30.00</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <img src="assets/images/services/boy-getting-haircut-salon-front-view.jpg" class="services-image img-fluid" alt="">

                                        <div class="services-info d-flex align-items-end">
                                            <h4 class="mb-0">Oreo</h4>

                                            <button class="services-thumb-price">$25.00</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <!--Perfil-->



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

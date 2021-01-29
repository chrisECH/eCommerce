<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/56dc3e6550.js" crossorigin="anonymous"></script>

    <title>WearWolf | Make Your Own Style</title>
</head>

<body>

    <?php

        include_once 'indexSession.php';
        if(isset($mensaje)){
            include_once 'layout/navbar-mensaje.php';
            include_once 'layout/regis-user.php';
         }
         
         include_once 'layout/navbar.html';
         
    ?>

    <!-- FIN DEL NAVBAR -->


    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="3000">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/slide1.jpg" class="d-block w-100" alt="..." style="height: 700px;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row justify-content-end text-right">
                            <div class="col-lg-8">
                                <p>NUEVA TEMPORADA</p>
                                <h1>Descubre lo nuevo que trae el invierno</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="..." style="height: 700px;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row justify-content-start text-left">
                            <div class="col-lg-8">
                                <p>REINVENTA TU ESTILO.</p>
                                <h1>Diseña tu propia imagen</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="..." style="height: 700px;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container justify-content-start text-left">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <p>TEMPORADA DE DESCUENTOS.</p>
                                <h1>Descubre las rebajas de hasta -50%</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/slide4.jpg" class="d-block w-100" alt="..." style="height: 700px;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row justify-content-end text-right">
                            <div class="col-lg-8">
                                <p>TODO LO QUE BUSCAS.</p>
                                <h1>Compras al alcance de tu mano.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/slide5.jpg" class="d-block w-100" alt="..." style="height: 700px;">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <div class="row justify-content-end text-right">

                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">

        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">

        </a>

    </div>

    <section class="sub">
        <div class="container">
            <div class="row">
                <div class="col justify-content-center text-center pt-5 subcat">
                    <h3>Compra con <span>Nosotros</span></h3>
                    <p>Productos seleccionados para ti.</p>
                    <div class="categorias d-flex">
                        <div class="row justify-content-around text-center">

                            <div class="col-lg-2 col-md-4 col-6 cat-img">
                                <img src="img/Bags.jpg" class="rounded-circle dot" alt="">

                                <h4><a href="">Bolsos/Mochilas</a></h4>

                            </div>
                            <div class="col-lg-2 col-md-4 col-6 cat-img">
                                <img src="img/watches.jpg" class="rounded-circle dot" alt="">
                                <h4><a href="">Relojes</a></h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 cat-img">
                                <img src="img/shoes.jpg" class="rounded-circle dot" alt="">
                                <h4><a href="">Calzado</a></h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 cat-img">
                                <img src="img/clothes.jpg" class="rounded-circle dot" alt="">
                                <h4><a href="">Ropa</a></h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 cat-img">
                                <img src="img/accessories.jpg" class="rounded-circle dot" alt="">
                                <h4><a href="">Accesorios</a></h4>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 cat-img">
                                <img src="img/fragance.jpg" class="rounded-circle dot" alt="">
                                <h4><a href="">Fragancias</a></h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-foto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12 foto">
                    <img src="img/foto-banner.jpg" alt="banner-nike" class="d-block w-100">
                </div>
                <div class="jordan-desc d-flex col-12  text-left ">
                    <div class="col-lg-10 col-md-5 col-6 titulos">
                        <h3>Nike</h3>
                        <h2>Air Jordan</h2>
                        <h5>Lo mejor en streetwear</h5>
                    </div>
                    <div class="col-lg-2 col-md-5 col-6 boton">
                        <button type="button" class="btn btn-outline-secondary px-5 py-3">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="main-container">
        <div class="articulos py-2">
            <div class="container">
                <h3 class="text-center">Compra con <span>Nosotros</span></h3>
                <p class="text-center">Productos seleccionados para ti.</p>
            </div>
            <div class="row main-articulos container-fluid">
                <div class="col-lg-3 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art1.jpg" alt="articulo1">
                        </div>
                        <div class="descripcion">
                            <h3><span>Nike</span> - Playera Jordan AJ1 </h3>
                            <p>$649.00 MXN</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art2.jpg" alt="articulo2">
                        </div>
                        <div class="descripcion">
                            <h3><span>Jordan</span> - Short Jordan Jumpman</h3>
                            <p>$799.00 MXN</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art3.jpg" alt="articulo3">
                        </div>
                        <div class="descripcion">
                            <h3><span>Jordan</span> - Tenis Air Jordan 1 Mind Laser Blue</h3>
                            <p>$2,599.00 MXN</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art4.jpg" alt="articulo4">
                        </div>
                        <div class="descripcion">
                            <h3><span>New Era</span> -Gorra New Era New York Yankees League </h3>
                            <p>$599.00 MXN</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art5.jpg" alt="articulo4">
                        </div>
                        <div class="descripcion">
                            <h3><span>Nixon</span> - Reloj Nixon Time Teller</h3>
                            <p>$2,799.00 MXN</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art6.jpg" alt="articulo4">
                        </div>
                        <div class="descripcion">
                            <h3><span>Kappa</span> - Chamarra Kappa Wanniston</h3>
                            <p>$1,299.00 MXN</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art7.jpg" alt="articulo4">
                        </div>
                        <div class="descripcion">
                            <h3><span>Nike</span> - Short Nike Sportswear</h3>
                            <p>$599.00 MXN</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contenido">
                        <div class="imagen">
                            <img class="img-fluid" src="img/art8.jpg" alt="articulo4">
                        </div>
                        <div class="descripcion">
                            <h3><span>Champion</span> - Tenis Champion Jersey RF Mid</h3>
                            <p>$2,799.00 MXN</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="pie">
        <div class="container">
            <div class="text row">
                <div class="left-side col-lg-4">
                    <h3>WearWolf</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, nesciunt cum distinctio quaerat tempore asperiores, cupiditate neque voluptatum sit fugit perferendis deserunt est exercitationem optio mollitia numquam, velit sed
                        culpa.
                    </p>
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fab fa-facebook fa-2x" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fab fa-twitter fa-2x" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fab fa-google-plus fa-2x" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fab fa-instagram fa-2x" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="right-side col-lg-8">
                    <h4>Descuentos de temporada de hasta -50% en productos seleccionados.</h4>
                    <div class="sub-column">
                        <div class="sub-one-left col-6">
                            <h6>Links utiles</h6>
                            <div class="footer-ul1 d-flex">
                                <ul>
                                    <li><a href="">Incio</a></li>
                                    <li><a href="">Acerca</a></li>
                                    <li><a href="">Comprar</a></li>
                                    <li><a href="">Contacto</a></li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="">Marcas</a>
                                    </li>
                                    <li>
                                        <a href="">Politica de privacidad</a>
                                    </li>
                                    <li>
                                        <a href="">Terminos y condiciones</a>
                                    </li>
                                    <li>
                                        <a href="">Soporte</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sub-two-right col-6">
                            <h6>Nuestra tienda</h6>
                            <p class="mb-6">Avenida Siempreviva 742, Springfield</p>
                            <h6>Aceptamos:</h6>
                            <ul>
                                <li>
                                    <a href="">
                                        <span class="fab fa-cc-visa fa-2x"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="fab fa-cc-mastercard fa-2x"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="fab fa-cc-paypal fa-2x"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="fab fa-cc-amex fa-2x"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="text-center">Ⓒ 2020 WearWolf. Todos los derechos reservados. Diseañdo por <span>ChrsitianECH</span></p>
            </div>

        </div>
    </footer>

    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
            window.onload = () => {
            const myInput = document.getElementById('txtcopia');
            myInput.onpaste = e => e.preventDefault();
            }
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
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
    <main class="main-container ">
        <div class="articulos py-2 mt-2">
            <div class="container">
                <h3 class="text-center">Contamos con las mejores <span>Marcas</span></h3>
                <p class="text-center">Amplia variedad en productos seleccionados</p>
            </div>
            <div class="row main-articulos container-fluid">
                
                    <?php
                    $response = json_decode(file_get_contents('http://localhost/ecommerce/api/productos/api-productos.php?get-all'), true);
                    if ($response['statuscode'] == 200) {
                        foreach ($response['items'] as $item) {
                            include('layout/items.php');
                        }
                    } 
                    ?>
            </div>
        </div>
    </main>

    <footer class="pie">
        <?php
            include('layout/footer.html');
        ?>
    </footer>
    <script src="js/app.js"></script>
    <script src="js/carrito.js"></script>
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
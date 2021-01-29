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
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-image">
                        <thead>
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Marca</th>  
                                <th scope="col">Costo</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            $userEmail = $user->getEmail();
                            $respuesta = file_get_contents('http://localhost/ecommerce/api/carro/api-carrito.php?get-all='.$userEmail);
                            $response = json_decode($respuesta, true);
                            if ($response['statuscode'] == 200) {
                                foreach ($response['items'] as $item) {
                                
                            ?>
                                <tr>
                                    <td class="w-25">
                                        <img src="img/productos/<?php echo $item['imagen']; ?>" class="img-fluid img-thumbnail" alt="Sheep">
                                    </td>
                                    <td><?php echo $item['nombre']; ?></td>
                                    <td><?php echo $item["marca"]; ?></td>
                                    <td><?php echo $item["precio"]; ?></td>
                                    <td><?php echo $item['usuario']; ?></td>
                                    <td>
                                        <a href="api/carro/api-carrito.php?Variable=<?php echo $item['id']; ?>" class="btn btn-danger">Eliminar</Em><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>

                            <?php
                                $total = $total + $item['precio'];
                                }
                            }
                            ?>
                            <tr>
                                <td><a href="catalogo.php" class="btn btn-primary"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
                                <td colspan="3"></td>
                                <td>
                                    <a href="api/carro/api-carrito.php?removeAll=<?php echo $user->getEmail(); ?>" class="btn btn-danger">Eliminar pedido<i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                                <td class="text-center"><strong>Total <?php echo '$' . $total . ' MX'; ?></strong></td>
                                <td>
                                    <a href="pago.php" class="btn btn-primary">Pagar<i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                                <?php ?>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


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
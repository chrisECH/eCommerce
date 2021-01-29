<?php
include_once 'api-carrito.php';

    $api = new ApiCarrito();

    $datos = [
        'id'            =>  $_POST['id'],
        'session'   =>  $_POST['session']
    ];

    $api->add($datos);
?>
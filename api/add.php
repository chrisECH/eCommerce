<?php
include_once 'api-registro.php';

    $api = new ApiRegistro();

    $datos = [
        'nombre'    =>  $_POST['nombre'],
        'curp'      =>  $_POST['curp'],
        'rfc'       =>  $_POST['rfc'],
        'direccion' =>  $_POST['direccion'],
        'email'     =>  $_POST['email'],
        'password'  =>  password_hash($_POST['password'],PASSWORD_BCRYPT)
    ];

    $api->add($datos);
?>
<?php
include_once 'registro.php';

class ApiRegistro{
    function add($datos){
        $registro = new Registro();

        $res = $registro->nuevoRegistro($datos);

        
        //$this->exito('Se ha registrado correctamente el usuario.');
    }

    function exito($mensaje){
        return $mensaje;
    }
}

?>
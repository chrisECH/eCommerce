<?php
include_once '../lib/db.php';
    class Registro extends DB {

        function nuevoRegistro($datos){
            $query = $this->connect()->prepare('INSERT INTO users (nombre, curp, rfc, direccion, email, password)
                                                VALUES(:nombre, :curp, :rfc, :direccion, :email, :password)');
            $query->execute([
                'nombre'    =>  $datos['nombre'],
                'curp'      =>  $datos['curp'],
                'rfc'       =>  $datos['rfc'],
                'direccion' =>  $datos['direccion'],
                'email'     =>  $datos['email'],
                'password'  =>  $datos['password']
            ]);
            return $query;
        }
    }
?>

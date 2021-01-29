<?php
include_once 'registro.php';


if(isset($_GET['get-all'])){
    $user = $_GET['get-all'];
    $productos = new Registro();
    $items = $productos->getAll($user);
    echo json_encode(['statuscode' => 200, 
                    'items' => $items]);

}else if(isset($_GET['Variable'])){
    $id = $_GET['Variable'];
    $productos = new Registro();
    $items = $productos->remove($id);
    echo json_encode(['statuscode' => 200, 
                    'items' => $items]);
    header('Location: ../../carrito.php');


}else if(isset($_GET['removeAll'])){
    $emailUser = $_GET['removeAll'];
    $productos = new Registro();
    $items = $productos->removeAll($emailUser);
    echo json_encode(['statuscode' => 200, 
                    'items' => $items]);
    header('Location: ../../carrito.php'); 
}

class ApiCarrito{
    

    function add($datos){
        $registro = new Registro();

        $res = $registro->nuevoRegistro($datos);

        header('Location: ../../catalogo.php');
        //$this->exito('Se ha registrado correctamente el usuario.');
    }

    function exito($mensaje){
        return $mensaje;
    }
}

?>
<?php

include_once 'productos.php';
if(isset($_GET['get-item'])){
        $id = $_GET['get-item'];

        if($id == ''){
                echo json_encode(['statuscode' => 400, 'response' => 'No hay valor para id']);
        }else{
                $productos = new Productos;
                $item = $productos->get($id);
                echo json_encode(['statuscode' => 200, 'item' => $item]);
        }
}else if(isset($_GET['get-all'])){
        $productos = new Productos();
        $items = $productos->getAll();
        echo json_encode(['statuscode' => 200, 
                        'items' => $items]);
}


?>
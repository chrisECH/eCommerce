<?php
include_once '../../lib/db.php';

class Productos extends DB{

    function __construct(){
        parent::__construct();
    }


    public function get($id){
        $query = $this->connect()->prepare('SELECT * FROM articulos WHERE id = :id LIMIT 0,12');
        $query->execute(['id' => $id]);

        $row = $query->fetch();
        return [
            'id'        =>  $row['id'],
            'nombre'    =>  $row['nombre'],
            'precio'    =>  $row['precio'],
            'imagen'    =>  $row['imagen'],
            'marca'     =>  $row['marca']
        ];
    }
    

    public function getAll(){
        $query = $this->connect()->prepare('SELECT * FROM articulos');
        $query->execute();

        $items = [];
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $item = [
                'id'        => $row['id'],
                'nombre'    => $row['nombre'],
                'precio'    => $row['precio'],
                'cantidad'  => $row['cantidad'],
                'imagen'    => $row['imagen'],
                'marca'     => $row['marca'],
                ];

                array_push($items,$item);
        }
        return $items;
    }

}

?>
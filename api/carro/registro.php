<?php
include_once '../../lib/db.php';
    class Registro extends DB {

        function nuevoRegistro($datos){
            $queryInsert = $this->connect()->prepare('INSERT INTO carrito (id_user, id_articulo) VALUES(:email, :id)');
            $queryInsert->execute([
                'email'     =>  $datos['session'],
                'id'        =>  $datos['id']
            ]);

            return $queryInsert;
        }

        
        public function getAll($user){
            
            $query = $this->connect()->prepare('SELECT art.id, art.nombre, art.marca, art.precio, art.imagen, art.marca, us.email FROM articulos art
             INNER JOIN carrito cart ON art.id = cart.id_articulo INNER JOIN users us ON us.email = cart.id_user
            WHERE cart.id_user = :email');
            $query->bindParam('email',$user);
            $query->execute();
                
            $items = [];
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $item = [
                    'id'        => $row['id'],
                    'imagen'    => $row['imagen'],
                    'nombre'    => $row['nombre'],
                    'marca'     => $row['marca'],
                    'precio'    => $row['precio'],
                    'usuario'   => $row['email']
                    ];

                    array_push($items,$item);
            }
            
            return $items; 
            
        }

        public function remove($id){
            $query = $this->connect()->prepare('DELETE FROM carrito WHERE id_articulo = :id');
            $query->bindParam('id',$id);

            $query->execute();
        }

        public function removeAll($emailUser){
            $row = $this->connect()->prepare('DELETE FROM carrito WHERE id_user = :email');
            $row->bindParam('email',$emailUser);

            $row->execute();
            
        }
    }
?>

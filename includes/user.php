<?php
include_once 'lib/db.php';
    class User extends DB{
        private $email;
        private $nombre;

        public function userExist($email, $password){
            
            
            $query = $this->connect()->prepare('SELECT nombre,email,password FROM users WHERE email = :mail');

            $query->bindParam(':mail', $email);
            
            $query->execute();
            $results = $query->fetch(PDO::FETCH_ASSOC);
            
            
            if($query->rowCount() > 0 && password_verify($password, $results['password'])){
                return true;    
            }else{
                return false;
            }


        }

        public function setUser($user){
            $query = $this->connect()->prepare('SELECT * FROM users WHERE email = :email');
            $query->execute(['email'=>$user]);

            foreach($query as $currentUser){
                $this->nombre = $currentUser['nombre'];
                $this->email = $currentUser['email'];
            }
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getEmail(){
            return $this->email;
        }
    }
?>
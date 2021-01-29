<?php
    class UserSession{

        private $session = NULL;

        public function __construct(){
            session_start();
            
        }

        public function setCurrentUser($user){
            $_SESSION['user'] = $user;
            $this->session = $user;
        }

        public function getCurrentUser(){
            return $_SESSION['user'];
        }

        public function closeSession(){
            session_unset();
            session_destroy();
        }
        
        public function setValue($value){
            $_SESSION[$this->session] = $value;
        }    

        public function getValue(){
            return $_SESSION[$this->session];
        }

        


    }
?>
<?php
    include_once 'includes/user.php';
    include_once 'includes/userSession.php';
    
    $userSession = new UserSession();
    $user = new User();

    if(isset($_SESSION['user'])){
        $user->setUser($userSession->getCurrentUser());
        include_once 'layout/navbar-user.php';

    }else if(isset($_POST['email']) && isset($_POST['password'])){
        $emailForm = $_POST['email'];
        $passwordForm = $_POST['password'];
        
        if($user->userExist($emailForm, $passwordForm)){
            $userSession -> setCurrentUser($emailForm);
            $user->setUser($emailForm);
            include_once 'layout/navbar-user.php';;
            
        }else{
            $mensaje = "Nombre de usuario o contraseña incorrectos";   
        }
    }else{
        include_once 'layout/regis-user.php';
    }
?>
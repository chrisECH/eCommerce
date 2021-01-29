<?php
include_once 'userSession.php';

    $userSession = new UserSession();
    $userSession->closeSession();
    $mensaje = "Se ha cerrado la sesión.";
    header("Location: ../index.php");
?>
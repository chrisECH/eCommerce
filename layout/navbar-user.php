
    <input type="hidden" id="session" name="session" value="<?php echo $user->getEmail(); ?>">
    <ul class="nav justify-content-end user-nav sticky-top">
    
            <li class="nav-item">
                <a href="" class="nav-link nav-user" role="button">
                
                    <?php echo $user->getNombre(); ?>
                </a>
            </li>
            <li class="nav-item">
                <a href="../carrito.php" type="submit" class="nav-link nav-carrito" role="button">Ver Carrito</a>
            </li>
            <li class="nav-item">
                <a href="includes/logout.php" class="nav-link nav-logout" role="button" >Cerrar sesión</a>
            </li>
        
    </ul>


<script src="../js/carrito.js"></script>
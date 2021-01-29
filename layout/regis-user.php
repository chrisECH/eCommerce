<ul class="nav justify-content-end register-nav sticky-top">
        <li class="nav-item">
            <a href="" class="nav-link nav-register" role="button" data-toggle="modal" data-target="#modalRegistro">Registrarse</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link nav-login" role="button" data-toggle="modal" data-target="#modalLogin">Iniciar sesión</a>
        </li>
</ul>


    <!-- INICIO MODAL REGISTRO-->
    <div class="modal fade modal-scrollable" id="modalRegistro" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRegistroLabel">Registrar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body ">
                    <form onsubmit="return validar()" action="api/add.php" method="POST" >

                        <div class="form-group">
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>

                        <div class="form-group">
                            <label for="curp">CURP</label>
                            <input type="text" class="form-control" id="curp" name="curp">
                        </div>
                        <div class="form-group">
                            <label for="rfc">RFC</label>
                            <input type="text" class="form-control" id="rfc" name="rfc">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electronico</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="check_pass">Confirme contraseña</label>
                            <input type="password" class="form-control" id="check_pass">
                        </div>
                        <?php
                            function codigo_captcha()
                            {

                                $k = "";
                                $paramentros = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                                $maximo = strlen($paramentros) - 1;

                                for ($i = 0; $i < 5; $i++) {

                                    $k .= $paramentros{
                                    mt_rand(0, $maximo)};
                                }

                                return $k;
                            }
                        ?>

                        <div class="form-group">
                            <label for="check_pass">Ingrese el captcha</label>
                            
                            <fieldset disabled class="d-flex">
                                 <input  type="text" name="captcha" id="captcha" class="captcha" size="4" readonly value=<?php echo codigo_captcha();?> >
                            </fieldset>
                            <input class="d-inline" type="text" name="txtcopia" id="txtcopia" size="10">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- FIN MODAL REGISTRO-->
                            
    <!-- INICIO MODAL LOGIN -->
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLoginLabel">Iniciar sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    
                    <form action="" method="POST">
                       
                        <div class="form-group">
                            <label for="email">Correo Electronico</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- FIN MODAL LOGIN -->
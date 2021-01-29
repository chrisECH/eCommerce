
<div class="col-lg-3 col-sm-6 contenedor">
    <div class="contenido">
        <form method="POST" action="../api/carro/add.php">
        <input type="hidden" id="id" name="id" value="<?php echo $item['id']; ?>">
        <input type="hidden" id="session" name="session" value="<?php echo $user->getEmail(); ?>">
        <div class="imagen">
            <img name="imagen" src="img/productos/<?php echo $item['imagen']; ?>" alt="">
        </div>
        <div class="descripcion">
            
            <h3>
            <span class="marca">
                <?php echo $item['marca'];?>
            </span>
              - <?php echo $item['nombre'];?>
            </h3>
            <p class="precio" name="precio">
                $<?php echo $item['precio'];?> MXN
            </p>
            <p>
                <span class="marca"> Cantidad: </span> <?php echo $item['cantidad'];?>
            </p>
            
        </div>
        <button type="submit" class="btn btn-success" role="button">Agregar al carrito</button>
        </form>
    </div>
    
</div>
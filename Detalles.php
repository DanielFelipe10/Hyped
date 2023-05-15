    <?php

    include_once 'php/Config.php';
    include_once 'php/Conexion.php';

    /*$id = isset($_GET['id']) ? $_GET['ID']:'';
    $token = isset($_GET['token']) ? $_GET['token']:'';

    if($id == '' || $token == ''){
        echo '<script>alert("Error al encontrar el producto")</script>';
        exit;
    }else{
        $token2 = hash_hmac('sha1',$id,KEY_TOKEN);
        if($token == $token2){

        }else{
            echo 'Error al procesar el producto';
        }
    }*/
    $id = isset($_GET['id']) ? $_GET['id']:'';

    $consultaP = "SELECT products.`ID_P`, products.`Nombre`, products.`Precio`, categoria.`Nombre` AS `Categoria`, products.`Descripcion`, products.`Imagen`, products.`Descuento`, products.`Disponibilidad`, products.`Pago`
    FROM `products`
    JOIN `categoria` ON products.`Categoria` = categoria.`ID`
    WHERE products.`ID_P` = '$id'";

    $resultadoP = mysqli_query($conexion, $consultaP);
    $registrosP = mysqli_num_rows($resultadoP);
    $datosP = mysqli_fetch_all($resultadoP, MYSQLI_ASSOC);

    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="styles/detallees.css">
        <link rel="stylesheet" type="text/css" href="styles/hamburgeer.css">
        <link rel="icon" href="media/icon.png">
        
        <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <?php
            foreach ($datosP as $row) {
        ?>
        <title><?= $row['Categoria']?> - <?= $row['Nombre']?></title>
        <?php
            }
        ?>

    </head>
    <body>

    <header>
        <div class="header_div header1">
            <div class="options">
                <a href=""><h1><?= $row['Categoria']?></h1></a>
            </div>
        </div>

        <div class="header_div header2"><a href="index.php" class="logop"><h1>Hyped</h1></a></div>

        <div class="header_div header3">
            <form action="">
                <img src="media/lupa_black.png" alt="" id="lupa">
                <input type="text" placeholder="Buscar">
            </form>
            <?php
            session_start();
            if (isset($_SESSION['Email'])) {
            $usuario = $_SESSION['Nombre'];
            echo "<p class='user_name'>$usuario</p>";
            echo "<a href='php/logoutUsers.php' title='Cerrar sesión'><i class='fa fa-sign-out' aria-hidden='true'></i></a>";
            ?>
            <?php
            }
            ?>
            <button class="buttons_header3 Hamburger"><img src="media/bag_black.png" alt=""  id="bag"><span>1</span></button>

            <!--Apartado de carrito (Vista)-->
            <div class="Menu active">
                <div class="close">
                    <img src="media/cruzar.png" alt="" id="cerrar">
                </div>
                <div class="Carrito">
                    <h1>Mi bolsa</h1>
                    <?php 
                        include_once 'carrito.php';
                        $carrito = new Carrito();
                        foreach ($carrito->obtenerProductos() as $producto): ?>
                        
                            <p><?php echo $producto['nombre']; ?></p>
                            <p><?php echo $producto['precio']; ?></p>
                        
                    <?php endforeach; ?>
                    <button>PAGAR</button>
                </div>
            </div>
            <div class="Shadow activeS"></div>
        </div>
    </header>

        <main>
            <?php
                foreach ($datosP as $row) {
            ?>
            <div class="Producto">

                <?php
                if ($row['Descuento']>0) {
                ?>
                <div class="Descuento">
                    <h1>-<?= $row['Descuento'] ?>%</h1>
                </div>
                <?php
                }
                ?>
                <div class="Imagen">
                    <img src="<?= $row['Imagen'] ?>" alt="<?= $row['Nombre']?>">
                </div>
                <div class="Descripcion">
                    <p class="ICategoria"><?= $row['Categoria']?></p>
                    <h1><?= $row['Nombre']?></h1>
                    <p><?= $row['Descripcion']?></p>
                    <?php
                    if ($row['Descuento']>0) {
                        $Desc = ($row['Precio']*$row['Descuento'])/100;
                        $PrecioDesc = $row['Precio'] -  $Desc;
                    ?>
                    <h5>$<?= number_format($row['Precio'],0,',','.')?></h5>
                    <h4>$<?= number_format($PrecioDesc,0,',','.')?></h4>
                    <?php
                    }else{
                    ?>
                    <h4>$<?= number_format($row['Precio'],0,',','.')?></h4>
                    <?php
                    }
                    ?>
                    <div class="Butts">
                        <a href="#" class="Buttons">
                            <h2>AGREGAR</h2>
                        </a>
                        <p><?= $row['Pago'] ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </main>
    </body>

    <script src="js/hamburger.js"></script>

    </html>


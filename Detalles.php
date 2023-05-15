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

        <link rel="stylesheet" type="text/css" href="styles/Detalles.css">
        <link rel="stylesheet" type="text/css" href="styles/hamburger.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">

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
        <a href="index.php">Hyped</a>
            <div class="Menu active">
                <div class="close">
                    <img src="media/cruzar.png" alt="" id="cerrar">
                </div>
                <div class="Carrito">
                    <h1>Mi bolsa</h1>
                    <button>PAGAR</button>
                </div>
            </div>
            <div class="Shadow activeS"></div>
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
                        <a href="#" class="Buttons">
                            <h2>COMPRAR</h2>
                        </a>
                        <p><?= $row['Pago'] ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>

            <div class="Prueba">


            </div>
        </main>
    </body>

    <script src="js/hamburger.js"></script>

    </html>


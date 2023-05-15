<?php
include_once 'php/Conexion.php';
include_once 'carrito.php';

//Consulta Categorias
$consultaC = "SELECT `ID`, `Nombre`, `Imagen` FROM `categoria`";
$resultadoC = mysqli_query($conexion, $consultaC);
$registrosC = mysqli_num_rows($resultadoC);
$datosC = mysqli_fetch_all($resultadoC, MYSQLI_ASSOC);

//Consulta Productos
$consultaP = "SELECT `ID_P`, `Nombre`, `Precio`, `Imagen`, `Disponibilidad` FROM `products` WHERE `Categoria`= ?";

if(isset($_GET['categoria'])) {
    $idCategoria = $_GET['categoria'];
} else {
    $idCategoria = $datosC[0]['ID'];
}
$resultadoP = $conexion->prepare($consultaP);
$resultadoP->bind_param('i', $idCategoria);
$resultadoP->execute();
$registrosP = $resultadoP->get_result();
$datosP = $registrosP->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="styles/products.css">
    <link rel="stylesheet" type="text/css" href="styles/hamburgeer.css">
    <link rel="icon" href="media/icon.png">

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">


    <title>Productos</title>
</head>
<body>
    <header>
        <div class="header_div header1">
            <div class="options">
                <a href=""><h1>PRODUCTOS</h1></a>
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
        <div class="Principal">
            <h1>CATEGORIAS</h1>
            <!--/*Mostrar las categorias con foreach-->
            <div class="Categorias">
                <?php
                    foreach ($datosC as $row) {
                ?>
                
                <a href="?categoria=<?= $row['ID'] ?>" class="Categoria">
                    <img src="<?= $row['Imagen'] ?>" alt="">
                </a>

                <?php
                    }
                ?>
            </div>
            <hr class="hr1">
            <!--/*Mostrar los productos con foreach-->
            <div class="Productos">
                <?php
                    foreach ($datosP as $row) {
                ?>

                <a href="detalles.php?id=<?= $row['ID_P']?>&hash=<?=hash_hmac('sha256',$row['ID_P'],'c5934//e93rhfd%&RFd')?>" class="card">
                    <div class="Imagen">
                        <img src="<?= $row['Imagen']?>" alt="<?= $row['Nombre']?>">
                    </div>
                    <div class="Contenido">
                        <h2><?= $row['Nombre']?></h2>
                        <p>$<?= number_format($row['Precio'],0,',','.')?></p>
                        <form method="post" class="cardButtons">
                            <input type="hidden" name="nombre" value="<?= $row['Nombre']?>">
                            <input type="hidden" name="precio" value="<?= $row['Precio']?>">
                            <button type="submit" name="agregar">Agregar</button>
                            <button class="liked"><img src="media/hearth.png" alt=""></button>
                        </form>
                    </div>

                </a>

                <?php
                    }
                ?>
            </div>
        </div>
    </main>
</body>

<script src="js/hamburger.js"></script>
<script src="js/dark_mode.js"></script>
<script src="js/login_modals.js"></script>

</html>

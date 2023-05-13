<?php
include_once 'php/Conexion.php';

/*session_start();
$usuario = $_SESSION['Email'];

echo "<h1>Bienvenido $usuario</h1>";
echo "<a href='php/logoutUsers.php'>Salir</a>";*/

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

    <link rel="stylesheet" href="styles/productos.css">
    <link rel="stylesheet" type="text/css" href="styles/hamburgeer.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">


    <title>Productos</title>
</head>
<body>
    <header>
        <a href="index.php">Hyped</a>
        <!--<button class="Hamburger">
            <img src="media/bagB.png" alt="Bag">
            <span>1</span>
        </button>-->
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
        <a href="upload_product.php" class="Create_product">
            <p>SUBIR PRODUCTO</p>
            <img src="media/subir.png" alt="">
        </a>
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

                <a href="Detalles.php?id=<?= $row['ID_P']?>&hash=<?=hash_hmac('sha256',$row['ID_P'],'c5934//e93rhfd%&RFd')?>" class="card">
                    <div class="Imagen">
                        <img src="<?= $row['Imagen']?>" alt="<?= $row['Nombre']?>">
                    </div>
                    <div class="Contenido">
                        <h2><?= $row['Nombre']?></h2>
                        <p>$<?= number_format($row['Precio'],0,',','.')?></p>
                        <form method="post" class="cardButtons">
                            <button>Agregar</button>
                            <button class="liked"><img src="media/hearth.png" alt=""></button>
                        </form>
                    </div>

                </a>

                <?php
                    }
                ?>
            </div>
        </div>
        <button id="mode_button">Dark mode</button>
    </main>
</body>

<script src="js/hamburger.js"></script>
<script src="js/dark_mode.js"></script>

</html>

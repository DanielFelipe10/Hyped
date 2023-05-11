<?php

include_once 'php/Config.php';
include_once 'php/Conexion.php';

$consulta = "SELECT `ID`, `Nombre`, `Precio`, `Descuento`, `Descripción`, `Imagen`, `Disponibilidad` FROM `productos` WHERE `Disponibilidad` = 1";

$resultado = mysqli_query($conexion, $consulta);
$registros = mysqli_num_rows($resultado);
$datos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styles/Tienda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-Commerce</title>

</head>
<body>
    
    <header>
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brad">
                    <strong>E-Commerce</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-header">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Catalogo</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Contactenos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Acerca de</a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary">Carrito</a>
                </div>
            </div>
        </div>
    </header>

    <main style="margin: 50px 0 50px 0;">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                    foreach ($datos as $row) {
                ?>
                <div class="col">

                <h4 style="position: absolute; background: green; color: white; z-index: 2; margin: 10 10 10 1; padding: 8px; font-size: 20px;"><?= $row['Descuento']?>%</h4>
                    <div class="card shadow-sm">

                        <img src="<?= $row["Imagen"] ?>" class="d-blog w-100" alt="<?= $row["Nombre"]?>" style="height: 250px;">

                        <div class="card-body">

                            <h5 class="card-title"><?= $row["Nombre"]?></h5>

                            <p class="card-text"><?= $row["Descripción"]?></p>

                            <p>COP $<?= $row["Precio"]?></p>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="Detalles.php?id<?= $row['ID']?>&token=<?= hash_hmac('sha1',$row['ID'],KEY_TOKEN)?>" class="btn btn-primary">Detalles</a>
                                </div>
                                <a href="#" class="btn btn-success">Carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


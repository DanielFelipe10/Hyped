<?php

include_once 'Carrito.php';

session_start();

$carrito = new Carrito();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['agregar'])) {
    $Categoria = $_POST['Categoria'];
    $Nombre = $_POST['Nombre'];
    $Precio = $_POST['Precio'];

    $carrito->agregarProducto($Categoria, $Nombre, $Precio);
}

?>
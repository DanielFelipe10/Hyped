<?php
/*class Carrito{
    session_start();

    // Verificar si el carrito de compras ya existe en la sesión
    if (!isset($_SESSION['carrito'])) {
    // Si no existe, inicializar el carrito como un array vacío
    $_SESSION['carrito'] = array();
    }

    // Agregar producto al carrito
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['agregar'])) {
    $idProducto = $_POST['id'];
    $nombreProducto = $_POST['nombre'];
    $precioProducto = $_POST['precio'];
    $cantidadProducto = 1; // Puedes establecer la cantidad por defecto o permitir que el usuario la seleccione en el formulario

    // Crear un array con los datos del producto
    $producto = array(
        'id' => $idProducto,
        'nombre' => $nombreProducto,
        'precio' => $precioProducto,
        'cantidad' => $cantidadProducto
    );

    // Agregar el producto al carrito
    array_push($_SESSION['carrito'], $producto);
    }
}
?>

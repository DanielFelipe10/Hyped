<?php

class Carrito {
    public function __construct() {
        // Verificar si el carrito de compras ya existe en la sesión
        if (!isset($_SESSION['carrito'])) {
            // Si no existe, inicializar el carrito como un array vacío
            $_SESSION['carrito'] = array();
        }
    }

    // Agregar producto al carrito
    public function agregarProducto($idProducto, $nombreProducto, $precioProducto, $cantidadProducto = 1) {
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

    public function obtenerProductos() {
        return $_SESSION['carrito'];
    }
    
}


<?php

$conexion = mysqli_connect("localhost", "root", "", "Tienda");

if(!$conexion){
    echo '<script>console.log("Error al conectar la BD")</script>';
} else{
    echo '<script>console.log("Conexión exitosa")</script>';
}

?>
<?php

$conexion = mysqli_connect("sql210.epizy.com", "epiz_34211780", "ZMVdCdAFIhj", "epiz_34211780_Tienda");

if(!$conexion){
    echo '<script>console.log("Error al conectar la BD")</script>';
} else{
    echo '<script>console.log("Conexión exitosa")</script>';
}

?>
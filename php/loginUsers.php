<?php

require './Conexion.php';

session_start();

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$consultar = "SELECT COUNT(*) AS contar, SUBSTRING_INDEX(Nombre, ' ', 1) FROM Usuarios WHERE Email = '$Email' AND Password = '$Password'";
$resultado = mysqli_query($conexion, $consultar);
$filas = mysqli_fetch_array($resultado);

if($filas['contar']>0){
    $_SESSION['Email'] = $Email;
    $_SESSION['Nombre'] = $filas[1];
    header("location: ../Productos.php");
}else{
    echo('<script>
            alert("La combinación de usuario es incorrecta. Intente nuevamente");
            window.history.go(-1);    
        </script>');
}

?>
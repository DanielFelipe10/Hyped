<?php

include_once "./Conexion.php";

$Email = $_POST['Email'];

$insertar = "INSERT INTO `suscribciones`(`Id`, `Email`) VALUES ('','$Email')";

$verificar_usuario = mysqli_query($conexion, "select * from suscribciones where Email = '$Email'");

if(mysqli_num_rows($verificar_usuario)>0){
    echo('<script>
            alert("El usuario ya esta suscrito");
            window.history.go(-1);    
        </script>');
    exit;
}else{
    $resultado = mysqli_query($conexion, $insertar);
    echo('<script>
            alert("Te has suscrito exitosamente");
            window.history.go(-1); 
        </script>');
}



?>
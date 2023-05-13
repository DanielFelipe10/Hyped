<?php

include_once "./Conexion.php";

$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Password2 = $_POST['Password2'];

$insertar = "INSERT INTO `Usuarios`(`user_ID`, `Nombre`, `Email`, `Password`, `rePassword) VALUES ('','$Nombre','$Email','$Password','$Password2')";

$verificar_usuario = mysqli_query($conexion, "select * from Usuarios where Email = '$Email'");

if(mysqli_num_rows($verificar_usuario)>0){
    echo('<script>
            alert("El usuario ya esta registrado");
            window.history.go(-1);    
        </script>');
    exit;
}else{
    $resultado = mysqli_query($conexion, $insertar);
    echo('<script>
            alert("El usuario se registro exitosamente");
            window.history.go(-1); 
        </script>');
}
mysqli_close($conexion);

?>
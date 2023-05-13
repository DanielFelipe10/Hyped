<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles/indx.css">
    <link rel="stylesheet" href="styles/hamburgeer.css">
    <link rel="stylesheet" href="styles/modal.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <title>Hyped | Home</title>
</head>
<body>
    
<?php

if (!isset($_COOKIE['modal_mostrado'])) {
    
?>
<div class="modal-container">
    <div class="modal">
        <div class="modal-image">
            <img  class="nike-img" src="media/nike_modal.png" alt="">
        </div>
        <div class="modal-text">
            <h1>¡Suscribete a nuestro newsletter!</h1>
            <p>Suscríbete para ser el primero en saber cuándo sale la colaboración. Además, obtén un <b>15%</b> de descuento en un artículo en tu primera compra.</p>
            <form action="POST">
                <input type="text" placeholder="Email" >
                <button>SUSCRIBIRME</button>
            </form>
        </div>
        <button class="close-button"><img src="media/cruzar.png" alt=""></button>
    </div>
</div>
<?php
setcookie('modal_mostrado', 'true', time()+3600*24*30);
}
?>  

<div class="main_view">
    <header>
        <div class="header_div header1">
            <div class="options">
                <h1>NOSOTROS</h1>
                <span></span>
                <h1>CONTACTENOS</h1>
            </div>
        </div>

        <div class="header_div header2"><h1>Hyped</h1></div>

        <div class="header_div header3">
            <form action="">
                <img src="media/lupa_black.png" alt="" id="lupa">
                <input type="text" placeholder="Buscar">
            </form>
            <?php
            session_start();
            if (isset($_SESSION['Email'])) {
            $usuario = $_SESSION['Nombre'];
            echo "<p class='user_name'>$usuario</p>";
            echo "<a href='php/logoutUsers.php'>Salir</a>";
            }
            ?>
            <button class="buttons_header3" id="userButton"><img src="media/index/user_black.png" alt="" id="user"></button>
            <button class="buttons_header3 Hamburger"><img src="media/bag_black.png" alt=""  id="bag"><span>1</span></button>

            <!--Apartado de carrito (Vista)-->
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
        </div>
    </header>

    <!--Modal de login-->
    <div class="user_login invisible">
        <!--<span></span>-->
        <form action="php/loginUsers.php" method="post">
            <h6>Bienvenido(a)</h6>
            <h1>Iniciar sesión</h1>
            <input type="email" name="Email" placeholder="Email">
            <input name="Password" id="password" placeholder="Password">
            <span class="eye1"><i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i></span>
            <button class="loginButton">ENTRAR</button>
        </form>
        <a href="">¿Olvidaste tu contraseña?</a>
        <button class="loginButton btnSignUp">REGISTRARME</button>
    </div>


    <!--<div class="user_login user_register">
        <form action="php/registerUsers.php" method="post">
            <h1>Registro</h1>
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="email" name="Email" placeholder="Email">
            <input type="password" name="Password" placeholder="Contraseña">
            <span class="eye2"><i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i></span>
            <input type="password" name="Password2" placeholder="Confirmar contraseña">
            <span class="eye3"><i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i></span>
            <button class="registerButton">REGISTRARME</button>
        </form>
    </div>-->

    <!--Contenido principal-->
    <div class="main_content">
        <div class="circle"></div>
        <div class="slider">
            <div class="slider_content">
                <img src="media/index/cap_main.png" alt="cap">
                <img src="media/index/shoes_main.png" alt="shoes">
                <img src="media/index/glasses_main.png" alt="glasses">
                <img src="media/index/hat.png" alt="hat">
            </div>
        </div>

        <!--Categorias en el main-->
        <div class="user_select">
            <a href="Productos.php" ><h1>GORRAS</h1></a>
            <a href=""><h1>GAFAS</h1></a>
            <a href="Productos.php?categoria=4"><h1>CHAQUETAS</h1></a>
            <a href=""><h1>SACOS</h1></a>
            <a href=""><h1>BASIC</h1></a>
        </div>

        <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere</p>
        </div>

        <div class="see_more"></div>
    </div>
</div>

<button id="mode_button"><img src="media/index/sun_black.png" alt="" id="sun"></button>

</body>

<script type="module" src="js/main.js"></script>
<script src="js/hamburger.js"></script>
<script src="js/slider.js"></script>
<script src="js/dark_mode.js"></script>
<script src="js/login_modals.js"></script>
<script src="js/show_password.js"></script>

</html>
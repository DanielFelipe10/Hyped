<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--scripts for highcharts-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    
    <link rel="stylesheet" href="styles/indx.css">
    <link rel="stylesheet" href="styles/hamburgeer.css">
    <link rel="stylesheet" href="styles/modal.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/highchart.css">
    <link rel="icon" href="media/icon.png">

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
                <a href="#about-us"><h1>NOSOTROS</h1></a>
                <span></span>
                <a href=""><h1>CONTACTENOS</h1></a>
            </div>
        </div>

        <div class="header_div header2"><h1 class="logo">Hyped</h1></div>

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
            echo "<a href='php/logoutUsers.php' title='Cerrar sesión'><i class='fa fa-sign-out' aria-hidden='true'></i></a>";
            }else{
                ?><button class="buttons_header3" id="userButton"><img src="media/index/user_black.png" alt="" id="user"></button>
            <?php
            }
            ?>
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
        <form action="php/loginUsers.php" method="post">
            <h6>Bienvenido(a)</h6>
            <h1>Iniciar sesión</h1>
            <input type="email" name="Email" placeholder="Email" required>
            <input type="password" name="Password" id="password" placeholder="Password" required>
            <span class="eye1"><i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i></span>
            <button class="loginButton">ENTRAR</button>
        </form>
        <a href="">¿Olvidaste tu contraseña?</a>
        <button class="loginButton btnSignUp" id="btnSignUp">REGISTRARME</button>

        <div class="user_login user_register invisible" id="user_register">
            <span class="arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
            <form action="php/registerUsers.php" method="post">
                <h1>Registro</h1>
                <input type="text" name="Nombre" placeholder="Nombre" required>
                <input type="email" name="Email" placeholder="Email" required>
                <input type="password" name="Password" id="passwordR" placeholder="Contraseña" required>
                <span class="eye2"><i class="fa fa-eye-slash" id="eye_r_password" aria-hidden="true"></i></span>
                <input type="password" name="Password2" id="passwordR2" placeholder="Confirmar contraseña" required>
                <span class="eye3"><i class="fa fa-eye-slash" id="eye_verify_password" aria-hidden="true"></i></span>
                <button class="registerButton">REGISTRARME</button>
            </form>
        </div>
    </div>

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

        <a href="#insights" class="arrow-down"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
    </div>

    <div class="about-us" id="about-us">
        <div class="us us2">
            <p>Somos <b class="logo">Hyped</b>, una tienda de ropa en línea que se especializa en ofrecer marcas <b>exclusivas</b> y <b>originales</b>. Nuestro objetivo es brindarte una selección <b>única</b> de prendas y accesorios que reflejen tu <b>estilo</b> personal y te hagan sentir <b>especial</b>. Explora nuestra página web y descubre las últimas <b>tendencias</b> de moda.</p>
        </div>
        <div class="us us1">
            <img src="https://media.giphy.com/media/jvQBUsZwIfwStBhBR0/giphy.gif" alt="">
        </div>
    </div>

    <div class="insights" id="insights">
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
        <?php
        include_once 'php/Conexion.php';
        $consultaC = "SELECT `Nombre`, `Ventas` FROM `Categoria`";
        $resultadoC = mysqli_query($conexion, $consultaC);
        $registrosC = mysqli_num_rows($resultadoC);
        $datosC = mysqli_fetch_all($resultadoC, MYSQLI_ASSOC);

        $datos_grafico = array();

        foreach ($datosC as $dato) {
            $datos_grafico[] = array($dato['Nombre'], intval($dato['Ventas']));
        }
        ?>
        <script type="text/javascript">
            Highcharts.chart('container', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45
                    },
                    style: {
                        backgroundColor: 'rgb(20,20,20)' 
                    }
                },
                title: {
                    text: 'NUESTRAS VENTAS',
                    align: 'center',
                    style: {
                        fontFamily: 'Poppins',
                        fontSize: '3rem',
                    }
                },
                subtitle: {
                    text: '2022 -2023',
                    align: 'center',
                    style: {
                        fontFamily: 'Raleway',
                        fontSize: '1.1rem',

                    }
                },
                plotOptions: {
                    pie: {
                        innerSize: 200,
                        depth: 80
                    }
                },
                series: [{
                    name: 'Ventas',
                    data: <?php echo json_encode($datos_grafico); ?>,
                    dataLabels: {
                        style: {
                            fontFamily: 'Poppins',
                            fontSize: '1.8rem'
                        }
                    }
                }]
            });
        </script>

    </div>

    <div class="contact">
        <h2 class="logo">Hyped</h2>
        <h1>PRONTO NUESTRA NUEVA SECCIÓN DE ZAPATOS</h1>
        <p>Regístrate ahora para nuestro boletín informativo y sé el primero en recibir actualizaciones sobre nuestro lanzamiento de la nueva sección. Obtén acceso exclusivo a noticias, ofertas especiales y promociones, y mantente al tanto de las últimas tendencias de la moda. ¡No te pierdas esta oportunidad única de estar un paso adelante en el mundo de la moda!</p>
        <form action="php/suscribe.php" method="post">
            <input type="email" placeholder="Email" name="Email" required><button>SUSCRIBIRME</button>
        </form>
    </div>

</div>

<button id="mode_button"><img src="media/index/sun_black.png" alt="" id="sun"></button>



<script type="module" src="js/main.js"></script>
<script src="js/hamburger.js"></script>
<script src="js/slider.js"></script>
<script src="js/dark_mode.js"></script>
<script src="js/login_modals.js"></script>
<script src="js/show_password.js"></script>



</html>
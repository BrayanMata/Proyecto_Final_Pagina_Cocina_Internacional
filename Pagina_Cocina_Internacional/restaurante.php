<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/estiloGeneral.css">
    <link rel="stylesheet" href="css/paletaColores.css">
    <link rel="stylesheet" href="css/estiloInicio.css">
    <link rel="stylesheet" href="css/estiloTarjetas.css">
    <link rel="stylesheet" href="css/estiloRestaurante.css">

    <title>Restaurante</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LJDVBNVLGD"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LJDVBNVLGD');
</script>

<body>
    <header>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="comentariosGenerales.php">Comentarios generales</a>
        </nav>

        <a href="index.php" class="logo">
            <img src="svg/Logo.svg" alt="logo">
        </a>

        <div>
            <?php if (isset($_SESSION['nombre_usuario'])): ?>
                <a href="php/cerrarSeccion.php">Cerrar sesión</a>
            <?php else: ?>
                <a href="crearCuenta.html">Crear cuenta</a>
                <a href="iniciarSeccion.html">Iniciar sesión</a>
            <?php endif; ?>
        </div>
    </header>

    <main>
        <div class="catalogo">
            <div class="titulo">
                <h3>Restaurantes Japoneses en Cd. Juarez</h3>
            </div>

            <div class="tarjetas">
                <a class="tarjeta" href="https://roji.mx" target="_blank">
                    <h2>Roji Japanese Bistro</h2>
                    <img src="jpg/Roji.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="https://raizdekeiichi.com" target="_blank">
                    <h2>Raíz de Keiichi</h2>
                    <img src="jpg/RaízKeiichi.png" alt="imagen">
                </a>

                <a class="tarjeta" href="https://ninjaramenmx.com" target="_blank">
                    <h2>Ninja Ramen Restaurant & Bar</h2>
                    <img src="jpg/NinjaRamen.png" alt="imagen">
                </a>

                <a class="tarjeta" href="https://www.ryudelivery.com" target="_blank">
                    <h2>Ryu Ramen House</h2>
                    <img src="jpg/RyuRamenHouse.png" alt="imagen">
                </a>

                <a class="tarjeta" href="https://katsurajuarez.com" target="_blank">
                    <h2>KATSURA</h2>
                    <img src="jpg/KATSURA.png" alt="imagen">
                </a>

                <a class="tarjeta" href="https://www.kabukisushi.com.mx" target="_blank">
                    <h2>Kabuki</h2>
                    <img src="jpg/Kabuki.png" alt="imagen">
                </a>

                <a class="tarjeta" href="www.facebook.com/KinsuiJrz" target="_blank">
                    <h2>Kinsui</h2>
                    <img src="jpg/Kinsui.png" alt="imagen">
                </a>

                <a class="tarjeta" href="https://www.eatyoko.com" target="_blank">
                    <h2>Yoko Asian Kitchen</h2>
                    <img src="jpg/YokoAsianKitchen.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="https://www.facebook.com/SushiLaEsquinaOriental" target="_blank">
                    <h2>La Esquina Oriental</h2>
                    <img src="jpg/EsquinaOriental.jpg" alt="imagen">
                </a>
            </div>
        </div>
    </main>

    <footer>
        <div class="sobresNosotros">
            <a href="quienesSomos.html"><h3>Quienes Somos</h3></a>
        </div>

        <div class="aviso">
            <p>
                <b>DISCLEIMER:</b> Este sitio web, es un proyecto universitario que está hecho solo 
                con fines educativos.
            </p>
        </div>

        <div class="datosP">
            <p><b>Alumno:</b> Brayan Mata Garay. -</p>
            <p><b>Matricula:</b> 208780. -</p>
            <p><b>Materia:</b> Programación Integral. -</p>
            <p><b>Docente:</b> Fernando Palacios Diaz.</p>
        </div>
    </footer>
</body>
</html>
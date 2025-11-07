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
    <link rel="stylesheet" href="css/estiloCarrusel.css">
    <link rel="stylesheet" href="css/estiloTarjetas.css">
    
    <title>Portada</title>
</head>
<body>
    
   <?php include('php/sesion.php'); ?>

    <nav class="barra-navegacion">
        <a href="#"><img src="svg/Logo.svg" alt="icono"></a>
        <a href="#1">Arroz y pescado</a>
        <a href="#2">Fideos</a>
        <a href="#3">Arroz sin sushi</a>
        <a href="#4">Parrilla o fritos</a>
        <a href="#5">Guisos y sopas</a>
        <a href="#6">Snacks y comidas callejeras</a>
    </nav>

    <main>
        <div class="carrusel">
            <div class="flechas flecha_Izquierda"> 
                <img src="svg/Flecha.svg" alt="flecha izquierda">
            </div>

            <div class="cello">
                <img src="svg/LogoSinFondo.svg" alt="logo">
            </div>

            <div class="contenedor">
                <div class="imagen_carrusel activo">
                    <img src="jpg/comidaJaponesa.jpg" alt="Imagen 1">
                </div>
                <div class="imagen_carrusel">
                    <img src="jpg/personasComiendo.jpg" alt="Imagen 2">
                </div>
                <div class="imagen_carrusel">
                    <img src="jpg/imagenCosina.jpg" alt="Imagen 3">
                </div>
                <div class="imagen_carrusel">
                    <img src="jpg/personaCosinando.jpg" alt="Imagen 4">
                </div>
            </div>

            <div class="flechas flecha_Derecha">
                <img src="svg/Flecha.svg" alt="flecha derecha">
            </div>
        </div>
        
        <div class="catalogo" id="1">
            <div class="titulo">
                <h3>Platos con arroz y pescado</h3>
            </div>
            
            <div class="tarjetas">
                <a class="tarjeta" href="comida.html">
                    <h2>Sushi 寿司</h2>
                    <img src="jpg/Sushi.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Sashimi 刺身</h2>
                    <img src="jpg/Sashimi.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Nigiri 握り寿司</h2>
                    <img src="jpg/Nigiri.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Maki 巻き寿司</h2>
                    <img src="jpg/Maki.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Chirashi ちらし寿司</h2>
                    <img src="jpg/Chirashi.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Temaki 手巻き</h2>
                    <img src="jpg/Temaki.jpg" alt="imagen">
                </a>
            </div>
        </div>

        <div class="catalogo" id="2">
            <div class="titulo">
                <h3>Platos de fideos</h3>
            </div>
            
            <div class="tarjetas">
                <a class="tarjeta" href="comida.html">
                    <h2>Ramen ラーメン</h2>
                    <img src="jpg/Ramen.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Udon うどん</h2>
                    <img src="jpg/Udon.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Soba そば</h2>
                    <img src="jpg/Soba.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Yakisoba 焼きそば</h2>
                    <img src="jpg/Yakisoba.jpg" alt="imagen">
                </a>
            </div>
        </div>

        <div class="catalogo" id="3">
            <div class="titulo">
                <h3>Platos con arroz (sin sushi)</h3>
            </div>
            
            <div class="tarjetas">
                <a class="tarjeta" href="comida.html">
                    <h2>Donburi 丼ぶり</h2>
                    <img src="jpg/Donburi.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Katsudon カツ丼</h2>
                    <img src="jpg/Katsudon.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Onigiri おにぎり</h2>
                    <img src="jpg/Onigiri.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Omurice オムライス</h2>
                    <img src="jpg/Omurice.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Curry japonés カレーライス</h2>
                    <img src="jpg/Curry.jpg" alt="imagen">
                </a>
            </div>
        </div>

        <div class="catalogo" id="4">
            <div class="titulo">
                <h3>Platos a la parrilla o fritos</h3>
            </div>
            
            <div class="tarjetas">
                <a class="tarjeta" href="comida.html">
                    <h2>Yakitori 焼き鳥</h2>
                    <img src="jpg/Yakitori.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Tonkatsu とんかつ</h2>
                    <img src="jpg/Tonkatsu.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Tempura 天ぷら</h2>
                    <img src="jpg/Tempura.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Karaage 唐揚げ</h2>
                    <img src="jpg/Karaage.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Takoyaki たこ焼き</h2>
                    <img src="jpg/Takoyaki.jpg" alt="imagen">
                </a>
            </div>
        </div>

        <div class="catalogo" id="5">
            <div class="titulo">
                <h3>Platos calientes (guisos y sopas)</h3>
            </div>
            
            <div class="tarjetas">
                <a class="tarjeta" href="comida.html">
                    <h2>Sukiyaki すき焼き</h2>
                    <img src="jpg/Sukiyaki.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Shabu-shabu しゃぶしゃぶ</h2>
                    <img src="jpg/Shabu-shabu.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Miso soup 味噌汁</h2>
                    <img src="jpg/Miso.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Nabe 鍋</h2>
                    <img src="jpg/Nabe.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Oden おでん</h2>
                    <img src="jpg/Oden.jpeg" alt="imagen">
                </a>
            </div>
        </div>

        <div class="catalogo" id="6">
            <div class="titulo">
                <h3>Snacks y comidas callejeras</h3>
            </div>
            
            <div class="tarjetas">
                <a class="tarjeta" href="comida.html">
                    <h2>Okonomiyaki お好み焼き</h2>
                    <img src="jpg/Okonomiyaki.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Taiyaki たい焼き</h2>
                    <img src="jpg/Taiyaki.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Dorayaki どら焼き</h2>
                    <img src="jpg/Dorayaki.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Dango 団子</h2>
                    <img src="jpg/Dango.jpg" alt="imagen">
                </a>

                <a class="tarjeta" href="comida.html">
                    <h2>Yaki onigiri 焼きおにぎり</h2>
                    <img src="jpg/Yaki-onigiri.jpg" alt="imagen">
                </a>
            </div>
        </div>
    </main>

    <footer>
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

    <script src="js/carrusel.js"></script>
    <script src="js/seleccionarPlatillo.js"></script>
    <script src="js/sesion.js"></script>

</body>

<?php
if (isset($_SESSION['mensaje'])) {
    echo "<script>alert('" . $_SESSION['mensaje'] . "');</script>";
    unset($_SESSION['mensaje']);
}
?>

</html>
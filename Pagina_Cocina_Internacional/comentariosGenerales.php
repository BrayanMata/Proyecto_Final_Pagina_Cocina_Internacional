<?php
    session_start();
    require_once "php/conexion.php";

    // Usuario logueado
    $usuarioLogueado = $_SESSION["nombre_usuario"] ?? "Invitado";

    // Consultar comentarios generales
    $sql = "SELECT r.*, u.nombre_usuario 
            FROM cocina_resenas r
            INNER JOIN cocina_usuarios u ON r.id_usuario = u.id_usuario
            WHERE r.platillo = 'General'";

    $resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/estiloGeneral.css">
    <link rel="stylesheet" href="css/paletaColores.css">
    <link rel="stylesheet" href="css/estiloComida.css">
    <link rel="stylesheet" href="css/estiloComentariosGeneral.css">

    <title>Comentarios Generales</title>
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
            <a href="restaurante.php">Restaurantes</a>
            <a href="index.php">Inicio</a>
        </nav>
        <a href="index.php" class="logo"><img src="svg/Logo.svg" alt="logo"></a>
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
        <div class="titulo">
            <h2>Reseñas del sitio web</h2>
        </div>

        <div class="con-comentarios">

            <?php
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        echo '
                        <div class="comentarios">
                            <div class="datoUsuario">
                                <h3>' . htmlspecialchars($fila["nombre_usuario"]) . '</h3>
                                <h3>Calificación: ' . $fila["calificacion"] . '/5</h3>
                            </div>

                            <div class="comentario">
                                <p>' . nl2br(htmlspecialchars($fila["comentario"])) . '</p>
                            </div>
                        </div>';
                    }
                }
            ?>

        </div>

        <?php if ($usuarioLogueado === "Invitado"): ?>

            <!-- Vista para invitados -->
            <a href="iniciarSeccion.html" class="avisoInvitado">
                <h3>Debes iniciar sesión para dejar una reseña</h3>
            </a>

        <?php else: ?>

            <!-- Formulario para usuarios logueados -->
            <form action="php/guardarReseña.php" method="POST" class="formularioComentario">

                <div class="datoUsuario">
                    <h3><?php echo htmlspecialchars($usuarioLogueado); ?></h3>

                    <h3>
                        <label for="calificacion">Calificación (1 a 5):</label>
                        <input type="number" name="calificacion" id="calificacion"
                               min="1" max="5" required>
                    </h3>
                </div>

                <div class="comentario">
                    <textarea name="comentario" id="comentario" required></textarea>
                </div>

                <!-- ESTE FORM NO ENVÍA PLATILLO -->
                <!-- guardarReseña.php le dará "General" por defecto -->

                <button type="submit">Enviar reseña</button>

            </form>

        <?php endif; ?>

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

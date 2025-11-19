<?php
    session_start();
?>

<header>
    <nav>
        <a href="restaurante.html">Restaurantes</a>
        <a href="#">Comentarios generales</a>
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocina Japonesa</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <h1>Sitio de Comida Japonesa</h1>

    <!-- Sección 1: Crear cuenta -->
    <section id="crear-cuenta">
        <h2>Crear cuenta</h2>
        <form action="php/crear_usuario.php" method="POST">
            <label>Nombre de usuario:</label>
            <input type="text" name="nombre_usuario" required>

            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Contraseña:</label>
            <input type="password" name="contrasena" required>

            <label>Tipo de usuario:</label>
            <select name="tipo_usuario" id="tipo_usuario" required onchange="mostrarCamposEstudiante()">
                <option value="">Seleccione...</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Docente">Docente</option>
                <option value="Externo">Externo</option>
            </select>

            <div id="campos_estudiante" style="display:none;">
                <label>Carrera:</label>
                <input type="text" name="carrera" id="carrera">

                <label>Matrícula:</label>
                <input type="text" name="matricula" id="matricula">
            </div>

            <button type="submit">Crear cuenta</button>
        </form>
    </section>

    <hr>

    <!-- Sección 2: Enviar reseña -->
    <section id="enviar-resena">
        <h2>Dejar una reseña</h2>
        <form action="php/enviar_resena.php" method="POST">
            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Contraseña:</label>
            <input type="password" name="contrasena" required>

            <label>Comentario:</label>
            <textarea name="comentario" required></textarea>

            <label>Calificación (1 a 5):</label>
            <input type="number" name="calificacion" min="1" max="5" required>

            <button type="submit">Enviar reseña</button>
        </form>
    </section>

    <hr>

    <!-- Sección 3: Mostrar datos -->
    <section id="mostrar-datos">
        <h2>Usuarios y reseñas</h2>
        <div id="contenedor-datos">
            <?php include("php/mostrar_datos.php"); ?>
        </div>
    </section>

    <script src="JS/js.js"></script>
</body>
</html>
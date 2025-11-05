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
        <form action="PHP/crear_usuario.php" method="POST" autocomplete="off">
            <label for="nombre_usuario">Nombre de usuario:</label>
            <input type="text" name="nombre_usuario" id="nombre_usuario" required>

            <label for="correo">Correo:</label>
            <input type="email" name="correo" id="correo" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" required>

            <label for="tipo_usuario">Tipo de usuario:</label>
            <select name="tipo_usuario" id="tipo_usuario" required onchange="mostrarCamposEstudiante()">
                <option value="">Seleccione...</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Docente">Docente</option>
                <option value="Externo">Externo</option>
            </select>

            <div id="campos_estudiante" style="display:none;">
                <label for="carrera">Carrera:</label>
                <input type="text" name="carrera" id="carrera">

                <label for="matricula">Matrícula:</label>
                <input type="text" name="matricula" id="matricula">
            </div>

            <button type="submit">Crear cuenta</button>
        </form>
    </section>

    <hr>

    <!-- Sección 2: Enviar reseña -->
    <section id="enviar-resena">
        <h2>Dejar una reseña</h2>
        <form action="PHP/enviar_resena.php" method="POST" autocomplete="off">
            <label for="correo_resena">Correo:</label>
            <input type="email" name="correo" id="correo_resena" required>

            <label for="contrasena_resena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena_resena" required>

            <label for="comentario">Comentario:</label>
            <textarea name="comentario" id="comentario" required></textarea>

            <label for="calificacion">Calificación (1 a 5):</label>
            <input type="number" name="calificacion" id="calificacion" min="1" max="5" required>

            <button type="submit">Enviar reseña</button>
        </form>
    </section>

    <hr>

    <!-- Sección 3: Mostrar datos -->
    <section id="mostrar-datos">
        <h2>Usuarios y reseñas</h2>
        <div id="contenedor-datos">
            <?php include("PHP/mostrar_datos.php"); ?>
        </div>
    </section>

    <script src="JS/js.js"></script>
    <script>
        function mostrarCamposEstudiante() {
            const tipo = document.getElementById('tipo_usuario').value;
            const campos = document.getElementById('campos_estudiante');
            if (tipo === 'Estudiante') {
                campos.style.display = 'block';
            } else {
                campos.style.display = 'none';
            }
        }
    </script>
</body>
</html>
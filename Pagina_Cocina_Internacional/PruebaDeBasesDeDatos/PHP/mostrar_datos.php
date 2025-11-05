<?php
    include("conexion.php");

    $sql = "SELECT u.nombre_usuario, u.tipo_usuario, r.comentario, r.calificacion
            FROM cocina_usuarios u
            LEFT JOIN cocina_resenas r ON u.id_usuario = r.id_usuario
            ORDER BY u.id_usuario DESC";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr><th>Usuario</th><th>Tipo</th><th>Comentario</th><th>Calificación</th></tr>";
        while ($row = $result->fetch_assoc()) {
            $nombre = htmlspecialchars($row['nombre_usuario']);
            $tipo = htmlspecialchars($row['tipo_usuario']);
            $comentario = htmlspecialchars($row['comentario']);
            $calificacion = htmlspecialchars($row['calificacion']);

            echo "<tr>
                    <td>{$nombre}</td>
                    <td>{$tipo}</td>
                    <td>{$comentario}</td>
                    <td>{$calificacion}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay usuarios ni reseñas registradas aún.</p>";
    }

    $conn->close();
    ?>
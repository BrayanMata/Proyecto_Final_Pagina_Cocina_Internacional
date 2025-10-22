<?php
    include("conexion.php");

    $sql = "SELECT u.nombre_usuario, u.tipo_usuario, r.comentario, r.calificacion
            FROM usuarios u
            LEFT JOIN resenas r ON u.id_usuario = r.id_usuario
            ORDER BY u.id_usuario DESC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr><th>Usuario</th><th>Tipo</th><th>Comentario</th><th>Calificación</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nombre_usuario']}</td>
                    <td>{$row['tipo_usuario']}</td>
                    <td>{$row['comentario']}</td>
                    <td>{$row['calificacion']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No hay usuarios ni reseñas registradas aún.</p>";
    }

    $conn->close();
?>
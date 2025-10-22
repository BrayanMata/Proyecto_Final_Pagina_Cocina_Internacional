<?php
    include("conexion.php");

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $comentario = $_POST['comentario'];
    $calificacion = $_POST['calificacion'];

    $result = $conn->query("SELECT * FROM usuarios WHERE correo = '$correo'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($contrasena, $user['contrasena'])) {
            $id_usuario = $user['id_usuario'];
            $sql = "INSERT INTO resenas (id_usuario, comentario, calificacion)
                    VALUES ($id_usuario, '$comentario', $calificacion)";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Reseña enviada con éxito'); window.location.href='../index.php';</script>";
            } else {
                echo "Error al enviar reseña: " . $conn->error;
            }
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location.href='../index.php';</script>";
        }
    } else {
        echo "<script>alert('Correo no encontrado'); window.location.href='../index.php';</script>";
    }

    $conn->close();
?>
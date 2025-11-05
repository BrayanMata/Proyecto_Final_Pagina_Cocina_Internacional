<?php
    include("conexion.php");

    if (isset($_POST['correo'], $_POST['contrasena'], $_POST['comentario'], $_POST['calificacion'])) {

        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        $comentario = $_POST['comentario'];
        $calificacion = (int)$_POST['calificacion'];

        if ($calificacion < 1 || $calificacion > 5) {
            echo "<script>alert('La calificación debe estar entre 1 y 5'); window.location.href='../index.php';</script>";
            exit;
        }

        $stmt = $conn->prepare("SELECT id_usuario, contrasena FROM cocina_usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($contrasena, $user['contrasena'])) {
                $id_usuario = $user['id_usuario'];

                $stmt2 = $conn->prepare("INSERT INTO cocina_resenas (id_usuario, comentario, calificacion) VALUES (?, ?, ?)");
                $stmt2->bind_param("isi", $id_usuario, $comentario, $calificacion);

                if ($stmt2->execute()) {
                    echo "<script>alert('Reseña enviada con éxito'); window.location.href='../index.php';</script>";
                } else {
                    echo "Error al enviar reseña: " . $stmt2->error;
                }

                $stmt2->close();
            } else {
                echo "<script>alert('Contraseña incorrecta'); window.location.href='../index.php';</script>";
            }
        } else {
            echo "<script>alert('Correo no encontrado'); window.location.href='../index.php';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Faltan datos requeridos'); window.location.href='../index.php';</script>";
    }

    $conn->close();
?>
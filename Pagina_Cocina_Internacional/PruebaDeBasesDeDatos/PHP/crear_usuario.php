<?php
    include("conexion.php");

    if (isset($_POST['nombre_usuario'], $_POST['correo'], $_POST['contrasena'], $_POST['tipo_usuario'])) {

        $nombre = $_POST['nombre_usuario'];
        $correo = $_POST['correo'];
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        $tipo = $_POST['tipo_usuario'];

        $stmt = $conn->prepare("INSERT INTO cocina_usuarios (nombre_usuario, correo, contrasena, tipo_usuario) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $correo, $contrasena, $tipo);

        if ($stmt->execute()) {
            $id_usuario = $stmt->insert_id;

            if ($tipo === "Estudiante" && isset($_POST['carrera'], $_POST['matricula'])) {
                $carrera = $_POST['carrera'];
                $matricula = $_POST['matricula'];

                $stmt2 = $conn->prepare("INSERT INTO cocina_estudiantes (id_usuario, carrera, matricula) VALUES (?, ?, ?)");
                $stmt2->bind_param("iss", $id_usuario, $carrera, $matricula);
                $stmt2->execute();
                $stmt2->close();
            }

            echo "<script>alert('Usuario creado con éxito'); window.location.href='../index.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Faltan datos requeridos.";
    }

    $conn->close();
?>
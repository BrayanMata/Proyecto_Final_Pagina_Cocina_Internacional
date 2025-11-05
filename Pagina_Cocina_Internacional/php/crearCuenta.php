<?php
    require_once "conexion.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre_usuario = $_POST["nombre_usuario"];
        $correo = $_POST["correo"];
        $contrasena = password_hash($_POST["contrasena"], PASSWORD_DEFAULT);
        $tipo_usuario = $_POST["tipo_usuario"];

        // Validar que no exista el correo
        $verificar = $conn->prepare("SELECT id_usuario FROM cocina_usuarios WHERE correo = ?");
        $verificar->bind_param("s", $correo);
        $verificar->execute();
        $verificar->store_result();

        if ($verificar->num_rows > 0) {
            echo "<script>alert('Este correo ya está registrado'); window.location='crearCuenta.html';</script>";
            exit();
        }

        // Insertar en cocina_usuarios
        $stmt = $conn->prepare("INSERT INTO cocina_usuarios (nombre_usuario, correo, contrasena, tipo_usuario) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre_usuario, $correo, $contrasena, $tipo_usuario);

        if ($stmt->execute()) {
            $id_usuario = $stmt->insert_id;

            // Si es estudiante, insertar también en cocina_estudiantes
            if ($tipo_usuario === "Estudiante") {
                $carrera = $_POST["carrera"];
                $matricula = $_POST["matricula"];

                $stmt2 = $conn->prepare("INSERT INTO cocina_estudiantes (id_usuario, carrera, matricula) VALUES (?, ?, ?)");
                $stmt2->bind_param("iss", $id_usuario, $carrera, $matricula);
                $stmt2->execute();
            }

            echo "<script>alert('Cuenta creada exitosamente'); window.location='../iniciarSeccion.html';</script>";
        } else {
            echo "Error al crear cuenta: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>
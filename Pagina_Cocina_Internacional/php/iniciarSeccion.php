<?php
    require_once "conexion.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];

        $stmt = $conn->prepare("SELECT id_usuario, nombre_usuario, contrasena, tipo_usuario FROM cocina_usuarios WHERE correo = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $usuario = $resultado->fetch_assoc();

            if (password_verify($contrasena, $usuario["contrasena"])) {
                $_SESSION["id_usuario"] = $usuario["id_usuario"];
                $_SESSION["nombre_usuario"] = $usuario["nombre_usuario"];
                $_SESSION["tipo_usuario"] = $usuario["tipo_usuario"];

                echo "<script>alert('Inicio de sesión exitoso'); window.location='../index.html';</script>";
            } else {
                echo "<script>alert('Contraseña incorrecta'); window.location='../iniciarSeccion.html';</script>";
            }
        } else {
            echo "<script>alert('Correo no registrado'); window.location='../iniciarSeccion.html';</script>";
        }

        $stmt->close();
        $conn->close();
    }
?>
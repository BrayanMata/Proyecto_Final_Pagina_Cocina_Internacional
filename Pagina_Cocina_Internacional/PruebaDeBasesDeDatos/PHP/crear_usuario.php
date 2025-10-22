<?php
    include("conexion.php");

    $nombre = $_POST['nombre_usuario'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo_usuario'];

    $sql = "INSERT INTO usuarios (nombre_usuario, correo, contrasena, tipo_usuario)
            VALUES ('$nombre', '$correo', '$contrasena', '$tipo')";

    if ($conn->query($sql) === TRUE) {
        $id_usuario = $conn->insert_id;

        if ($tipo === "Estudiante") {
            $carrera = $_POST['carrera'];
            $matricula = $_POST['matricula'];
            $conn->query("INSERT INTO estudiantes (id_usuario, carrera, matricula)
                        VALUES ($id_usuario, '$carrera', '$matricula')");
        }

        echo "<script>alert('Usuario creado con éxito'); window.location.href='../index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
?>
<?php
    session_start();
    require_once "conexion.php";

    // Si no hay usuario logueado → error
    if (!isset($_SESSION["id_usuario"])) {
        die("Debes iniciar sesión.");
    }

    $id_usuario = $_SESSION["id_usuario"];
    $platillo = $_POST["platillo"] ?? "General";
    $calificacion = $_POST["calificacion"] ?? "";
    $comentario = $_POST["comentario"] ?? "";

    // Validar datos
    if ($platillo === "" || $calificacion === "" || $comentario === "") {
        die("Faltan datos.");
    }

    // INSERT sin nombre_usuario
    $sql = "INSERT INTO cocina_resenas (id_usuario, platillo, calificacion, comentario)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isis", $id_usuario, $platillo, $calificacion, $comentario);

    if ($stmt->execute() && $platillo == "General") {
        header("Location: ../comentariosGenerales.php");
        exit;
    } else if ($stmt->execute()) {
        header("Location: ../comida.php?platillo=" . urlencode($platillo));
        exit;
    } else {
        echo "Error al guardar reseña.";
    }
?>
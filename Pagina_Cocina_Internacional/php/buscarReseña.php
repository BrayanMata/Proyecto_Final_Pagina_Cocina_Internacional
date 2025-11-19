<?php
session_start();
include "php/conexion.php";  // Tu conexión a la BD

// Validar platillo
if (!isset($_GET['platillo'])) {
    die("No se ha especificado ningún platillo.");
}

$platillo = $_GET['platillo'];

// Consulta a la base de datos
$sql = "SELECT r.*, u.nombre_usuario 
        FROM cocina_resenas r
        INNER JOIN cocina_usuarios u ON r.id_usuario = u.id_usuario
        WHERE r.platillo = ?";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("s", $platillo);
$stmt->execute();
$res = $stmt->get_result();

$reseñas = [];

while ($fila = $res->fetch_assoc()) {
    $reseñas[] = $fila;
}

// Cargar la vista
include "../comida.php";

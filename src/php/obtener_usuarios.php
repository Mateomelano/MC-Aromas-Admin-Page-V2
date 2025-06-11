<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php'; // Conexión a la base de datos


$sql = "SELECT id, nombre, mail FROM usuariosWeb";
$resultado = $conn->query($sql);

$usuarios = [];

while ($fila = $resultado->fetch_assoc()) {
    $usuarios[] = $fila;
}

header('Content-Type: application/json');
echo json_encode($usuarios);

$conn->close();
?>

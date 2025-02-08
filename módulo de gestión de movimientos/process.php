<?php
// process.php
$host = "localhost";
$dbname = "gestion_utiles";
$username = "root";
$password = "";

$conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);

$nombre_util = $_POST['nombre_util'];
$cantidad = $_POST['cantidad'];
$ubicacion = $_POST['ubicacion'];
$fecha_movimiento = $_POST['fecha_movimiento'];
$usuario_responsable = $_POST['usuario_responsable'];

$query = "INSERT INTO movimientos_utiles (nombre_util, cantidad, ubicacion, fecha_movimiento, usuario_responsable) VALUES (:nombre_util, :cantidad, :ubicacion, :fecha_movimiento, :usuario_responsable)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':nombre_util', $nombre_util);
$stmt->bindParam(':cantidad', $cantidad);
$stmt->bindParam(':ubicacion', $ubicacion);
$stmt->bindParam(':fecha_movimiento', $fecha_movimiento);
$stmt->bindParam(':usuario_responsable', $usuario_responsable);
$stmt->execute();

echo "Movimiento agregado exitosamente.";
?>

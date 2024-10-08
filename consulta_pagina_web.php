<?php
// Activar la visualización de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$servername = "fdb1034.awardspace.net"; 
$username = "4096282_android"; 
$password = "JuanCarlos2001"; 
$dbname = "4096282_android";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del pedido del formulario
if (isset($_GET['pedidoId'])) {
    $pedidoId = $_GET['pedidoId'];

    // Preparar y ejecutar la consulta
    $sql = "SELECT estado FROM seguimiento WHERE id_venta = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $pedidoId);
    $stmt->execute();
    $stmt->bind_result($estado);
    $stmt->fetch();

    // Verificar si se encontró el estado
    if ($estado) {
        // Redirigir a la página principal con el estado
        header("Location: index.php?estado=" . urlencode($estado));
        exit(); // Terminar la ejecución después de redirigir
    } else {
        // Si no se encuentra, redirigir con un mensaje de error
        header("Location: index.php?estado=" . urlencode("No Existe."));
        exit();
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>

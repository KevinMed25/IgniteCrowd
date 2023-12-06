<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "ignitecrowd";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}

$nombre = $_POST['usuario']['nombre'] ?? '';
$apellido_paterno = $_POST['usuario']['apellido_paterno'] ?? '';
$apellido_materno = $_POST['usuario']['apellido_materno'] ?? '';
$telefono = $_POST['usuario']['telefono'] ?? '';
$password = $_POST['usuario']['password'] ?? '';
$email = $_POST['usuario']['email'] ?? '';


$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

$response = array();

if ($result->num_rows > 0) {
    
    $response['existe'] = true;
} else {
    $sql_insert = "INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, telefono, email, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $passwordHasheado =password_hash($password, PASSWORD_BCRYPT);
    $stmt_insert->bind_param("ssssss", $nombre, $apellido_paterno, $apellido_materno, $telefono, $email, $passwordHasheado);

    if ($stmt_insert->execute()) {

        $response['existe'] = false;
    } else {

        $response['existe'] = true;
        $response['error'] = $stmt_insert->error;
    }

    $stmt_insert->close();
}

header('Content-Type: application/json');
echo json_encode($response);

$stmt->close();
$conn->close();

?>

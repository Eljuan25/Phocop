<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "photocop";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del carrito
$cart = json_decode(file_get_contents('php://input'), true);

// Insertar datos en la base de datos
foreach ($cart['cart'] as $item) {
    $name = $item['name'];
    $price = $item['price'];
    $sql = "INSERT INTO orders (item_name, item_price) VALUES ('$name', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "New record created successfully"]);
    } else {
        echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error]);
    }
}

$conn->close();
?>

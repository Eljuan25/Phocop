<?php
    // Conexión a la base de datos
    $conn = new mysqli("localhost", "root", "root","formulario");

    // Verificar conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para verificar el usuario y contraseña
    $sql = "SELECT id, username FROM usuarios WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Iniciar sesión y redirigir al usuario a otra página
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }

    $conn->close();
?>

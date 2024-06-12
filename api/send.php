<?php

include("api/conexion.php");

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conex, $_POST['name']);
    $phone = mysqli_real_escape_string($conex, $_POST['phone']);
    $email = mysqli_real_escape_string($conex, $_POST['email']);
    $massage = mysqli_real_escape_string($conex, $_POST['massage']);

    if(
        strlen($name) >= 1 &&
        strlen($phone) >= 1 &&
        strlen($email) >= 1 &&
        strlen($massage) >= 1
    ){
        // Validar el formato del correo electrónico
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "El correo electrónico ingresado no es válido.";
            exit();
        }

        // Validar el formato del número de teléfono (puedes implementar una validación más específica según tu necesidad)
        // Insertar los datos en la base de datos utilizando una consulta preparada
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conex);
        if(mysqli_stmt_prepare($stmt, $consulta)){
            mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $email, $massage);
            if(mysqli_stmt_execute($stmt)){
                echo "Datos insertados correctamente.";
            } else {
                echo "Error al insertar datos.";
            }
        } else {
            echo "Error en la preparación de la consulta.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}

?>


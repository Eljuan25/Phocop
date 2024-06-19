<?php

include("api/conexion.php");

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conex, $_POST['name']);
    $phone = mysqli_real_escape_string($conex, $_POST['phone']);
    $email = mysqli_real_escape_string($conex, $_POST['email']);
    $massage = mysqli_real_escape_string($conex, $_POST['massage']);
    $day = mysqli_real_escape_string($conex, $_POST['day']);

    // Insertar datos en la base de datos
    $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje, fecha) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conex);
    if(mysqli_stmt_prepare($stmt, $consulta)){
        mysqli_stmt_bind_param($stmt, "sssss", $name, $phone, $email, $massage, $day);
        if(mysqli_stmt_execute($stmt)){
            // Datos insertados correctamente, verificar y enviar correo electrónico si se proporcionó un correo válido
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $destinatario = "destinatario@example.com";
                $asunto = "Nueva cita programada";
                $cuerpoMensaje = "Hola,\n\nSe ha agendado una nueva cita con los siguientes detalles:\n\nNombre: $name\nTeléfono: $phone\nCorreo electrónico: $email\nDía y hora: $day\nDetalles de la cita: $massage";
                $headers = "From: ssss@email.com";

                // Enviar correo electrónico
                if(mail($destinatario, $asunto, $cuerpoMensaje, $headers)){
                    echo "Datos insertados correctamente. Se ha enviado un correo electrónico con los detalles de la cita.";
                } else {
                    echo "Error al enviar el correo electrónico.";
                }
            } else {
                echo "Datos insertados correctamente. No se ha proporcionado un correo electrónico válido, por lo tanto, no se enviará ningún correo.";
            }
        } else {
            echo "Error al insertar datos en la base de datos.";
        }
    } else {
        echo "Error en la preparación de la consulta.";
    }
    mysqli_stmt_close($stmt);
}

?>


<?php

include("conexion.php");

if(isset($_POST['send'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['massage']) >= 1
    ){
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $massage = trim($_POST['massage']);
        $consulta = "INSERT INTO datos(nombre,telefono,email,mensaje)
        VALUES ('$name','$phone','$email', '$massage')";
        $resultado = mysqli_query($conex, $consulta);
    }
}

?>

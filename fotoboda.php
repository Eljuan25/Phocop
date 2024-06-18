<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header class="header">
    <div class="menu container">
        <a href="index.php" class="logo">PhotoCop</a>
        <input type="checkbox" id="menu" />
        <label for="menu" class="hambuger">
            <img src="img/logos.webp" class="menu-icono" alt="This a menu">
            <i class="fas fa-bars"></i>
        </label>

        <div class="cart">
            <i class="fas fa-shopping-cart" onclick="showCart()"></i>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="index.php?section=inicio">Inicio</a></li>
                <li><a href="index.php?section=nosotros">Nosotros</a></li>
                <li><a href="index.php?section=servicios">Servicios</a></li>
                <li><a href="index.php?section=contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>
    <div id="cartModal" class="cart-modal">
            <div class="cart-modal-content">
                <span class="close" onclick="closeCart()">&times;</span>
                <h2>Carrito de Compras</h2>
                <ul id="cartItems">
                    <!-- Aquí se mostrarán los elementos del carrito -->
                </ul>
                <button onclick="checkout()">Checkout</button>
            </div>
        </div>
</header>
<div class="fotoxv">   
    <h1>Fotografias de Bodas</h1>
</div>


<?php
$section = isset($_GET['section']) ? $_GET['section'] : 'inicio';
?>

<section id="inicio" class="section" style="display: <?php echo $section == 'inicio' ? 'block' : 'none'; ?>;">
    <div class="header-content container">
        <div class="header-txt">
          
            <br />
            <h2>Sesión Preboda</h2>
            <br />
            <p>
            Captura la emoción y la magia del compromiso con una sesión de fotos en una ubicación especial. 
            Ideal para usar en invitaciones y decoraciones de la boda.
            </p>
            <br />
            <p>
             Precio: $300 - $600 incluye sesión de 2 horas y 30 fotos editadas
            </p>
            <div class="header-txt">
                <br />
                <h2>Cobertura Completa del Evento</h2>
                <br />
                <p>
                Desde los preparativos hasta la última canción de la fiesta, documenta 
                cada momento de tu gran día con una cobertura completa. Perfecto para no perder ningún detalle.
                </p>
                <br />
                <p>
                 Precio: $1500 - $3000 (incluye cobertura de 10-12 horas y 300 fotos editadas)
                </p>
                <br />
                <h2>Sesión de Postboda</h2>
                <br />
                <p>
                
                Relájate y toma fotos románticas en un lugar especial, días o semanas después de la boda. 
                Ideal para fotos más relajadas y artísticas sin la presión del día del evento.
                </p>
                <br />
                <p>
                    Precio: $400 - $800 incluye sesión de 2 horas y 40 fotos editadas
                </p>
                <br />
                <a href="index.php?section=informacion" class="btn-1">informacion</a>
            </div>
        </div>
        <div class="header-img">
            <img src="img/bodass.jpg" alt="this información for nosotros" width="450px" height="auto">
        </div>
    </div>


</body>
</html>

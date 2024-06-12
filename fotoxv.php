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
    <h1>Fotografia XV</h1>
</div>


<?php
$section = isset($_GET['section']) ? $_GET['section'] : 'inicio';
?>

<section id="inicio" class="section" style="display: <?php echo $section == 'inicio' ? 'block' : 'none'; ?>;">
    <div class="header-content container">
        <div class="header-txt">
          
            <br />
            <h2>Sesión en Exterior</h2>
            <br />
            <p>
                Captura los momentos más mágicos de tus XV años en un hermoso jardín o parque. Las fotos al aire libre,
                con luz natural, resaltarán tu belleza y el esplendor del vestido.
            </p>
            <br />
            <p>
                Precio: $300 - $500 incluye sesión de 2 horas y 30 fotos editadas
            </p>
            <div class="header-txt">
                <br />
                <h2>Sesión en Estudio</h2>
                <br />
                <p>
                    Disfruta de una sesión profesional en un estudio fotográfico con varios fondos y accesorios. Ideal para fotos más formales y artísticas.
                </p>
                <br />
                <p>
                    Precio: $200 - $400 incluye sesión de 1 hora y 20 fotos editadas
                </p>
                <br />
                <h2>Sesión Temática</h2>
                <br />
                <p>
                    Personaliza tu sesión de fotos con un tema especial, como vintage, princesa, boho, o lo que más te guste. Con accesorios y decoraciones a juego.
                </p>
                <br />
                <p>
                    Precio: $400 - $700 (incluye sesión de 3 horas, 40 fotos editadas y accesorios temáticos)
                </p>
                <br />
                <a href="index.php?section=informacion" class="btn-1">informacion</a>
            </div>
        </div>
        <div class="header-img">
            <img src="img/xv1.jpg" alt="this información for nosotros" width="500" height="auto">
        </div>
    </div>


</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .about {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px  0; 
        }

        .about-img {
            flex: 1;
            text-align: center;
        }

        .about-img img {
            max-width: 100%;
            height: auto;
            display: block; 
        }

        .about-txt {
            flex: 1;
            padding: 0 20px;
        }

        .about-txt h2,
        .about-txt h1 {
            text-align: center;
        }
    </style>
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

<?php
$section = isset($_GET['section']) ? $_GET['section'] : 'inicio';
?>

<section id="inicio" class="section" style="display: <?php echo $section == 'inicio' ? 'block' : 'none'; ?>;">

    <section class="about container">
        <div class="about-img">
            <img src="img/modelss.jpg" alt="stilye">
        </div>
        <div class="about-txt">
            <h2>Fotos Artisticas</h2>

            <div>
                <div>
                    <h1>Retrato en Blanco y Negro</h1>
                    <p>
                        Captura la esencia y la profundidad de la emoción humana con un 
                        retrato en blanco y negro. Las sombras y los contrastes agregan un toque de dramatismo a la imagen.
                        Precio: $200 - $400 (incluye sesión de 1 hora y 15 fotos editadas)
                    </p>
                </div>

                <div>
                    <h1>Fotografía de Arte Corporal</h1>
                    <p>
                        Celebra la belleza del cuerpo humano con una sesión de fotografía de arte corporal. Destaca las formas y líneas del cuerpo de manera artística y elegante.
                        Precio: $300 - $600 (incluye sesión de 2 horas y 20 fotos editadas)
                    </p>
                </div>

                <div>
                    <h1>Fotografía de Naturaleza Muerta</h1>
                    <p>
                        Crea composiciones visualmente impactantes con objetos inanimados en una sesión de fotografía de naturaleza muerta. Perfecto para exhibir en tu hogar como obras de arte.
                        Precio: $250 - $500 (incluye sesión de 1.5 horas y 10 fotos editadas)
                    </p>
                </div>
            </div>
        </div>
    </section>

    </section>




</body>
</html>

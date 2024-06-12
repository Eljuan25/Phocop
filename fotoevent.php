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
        <nav class="navbar">
            <ul>
                <li><a href="index.php?section=inicio">Inicio</a></li>
                <li><a href="index.php?section=nosotros">Nosotros</a></li>
                <li><a href="index.php?section=servicios">Servicios</a></li>
                <li><a href="index.php?section=contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<?php
$section = isset($_GET['section']) ? $_GET['section'] : 'inicio';
?>

<section id="inicio" class="section" style="display: <?php echo $section == 'inicio' ? 'block' : 'none'; ?>;">

    <section class="about container">
        <div class="about-img">
            <img src="img/event.jpg" alt="stilye">
        </div>
        <div class="about-txt">
            <h2>Fotos de Eventos</h2>

            <div>
                <div>
                    <h1>Cobertura de Conferencias y Seminario</h1>
                    <p>
                    Documenta las presentaciones, paneles y discusiones en conferencias y seminarios. 
                    Captura momentos clave, expresiones faciales y la interacción entre los asistentes.
                    Precio: $500 - $1000 (incluye cobertura de 6 horas y 100 fotos editadas)
                    </p>
                </div>

                <div>
                    <h1>Fotografía de Conciertos y Eventos Musicalesl</h1>
                    <p>
                    Captura la emoción y la energía de conciertos y eventos musicales. Desde primeros planos de artistas hasta imágenes del público disfrutando del espectáculo.
                    Precio: $600 - $1200 (incluye cobertura de 6 horas y 150 fotos editadas)

                    </p>
                </div>

                <div>
                    <h1>Eventos Corporativos</h1>
                    <p>
                     Documenta eventos corporativos como lanzamientos de productos, reuniones de equipo y cenas de gala. Captura momentos de networking, discursos inspiradores y momentos de camaradería.
                        Precio: $800 - $1500 (incluye cobertura de 8 horas y 200 fotos editadas)
                    </p>
                </div>
            </div>
        </div>
    </section>

    </section>




</body>
</html>

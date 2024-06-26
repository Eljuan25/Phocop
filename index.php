<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoCop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  href="path/to/your/fontawesome/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>

    <header class="header">
    <div class="menu container">
        <a href="#" class="logo">PhotoCop</a>

    
        <div class="cart">
            <i class="fas fa-shopping-cart" onclick="showCart()"></i>
        </div>

        <input type="checkbox" id="menu" />
        <label for="menu" class="hambuger">
            <img src="img/logos.webp" class="menu-icono" alt="This a menu">
            <i class="fas fa-bars"></i>
        </label>
        <div class="link">
            <nav class="navbar">
                <ul>
                    <li><a href="#" onclick="redirect('inicio')">Inicio</a></li>
                    <li><a href="#" onclick="redirect('nosotros')">Nosotros</a></li>
                    <li><a href="#" onclick="redirect('servicios')">Servicios</a></li>
                    <li><a href="#" onclick="redirect('contacto')">Contacto</a></li>
                </ul>
            </nav>
        </div>
  <!-- Modal del carrito de compras -->
        <div id="cartModal" class="cart-modal">
            <div class="cart-modal-content">
                <span class="close" onclick="closeCart()">&times;</span>
                <h2>Carrito de Compras</h2>
                <ul id="cartItems">

                    <i>Fotos de Bodas 500$</i><br />
                    <i>Fotos Artisticas 600$</i><br />
                    <i>Fotos de Eventos 700$</i><br />
                    <i>Fotos de XV  900$</i><br >
                </ul>
                <button onclick="checkout()" >Checar</button>
            </div>
        </div>
            
    
    
    </div>
        <div class="header-content container" id="inicio" class="services">
            <div class="header-txt">
                <h1>Creatividad FotoGrafica</h1>
                <p>
                    En PhotoCop, creemos firmemente que cada imagen tiene el poder de contar una historia única y emotiva. Para nosotros, 
                    la fotografía no es solo una técnica, sino una forma de arte que permite capturar 
                    la esencia de los momentos más preciosos y transformarlos en recuerdos duraderos. 
                    Nuestra pasión por la fotografía nos impulsa a buscar y capturar los momentos más significativos de la vida, ya sean grandes eventos o pequeños detalles del día a día, 
                    y a transformar lo cotidiano en algo extraordinario.

                </p>



                <br />
                <p>

                    Nuestro enfoque se basa en una combinación de técnicas tradicionales y contemporáneas, utilizando tanto la luz natural 
                    como la artificial para crear imágenes que son visualmente impactantes y emocionalmente
                     resonantes. Ya sea a través de la fotografía de bodas, donde cada sonrisa, lágrima y abrazo es inmortalizado, o 
                     en la fotografía de productos, donde cada detalle es destacado para resaltar su singularidad y calidad, nos comprometemos a ofrecer resultados que superen 
                     las expectativas de nuestros clientes.


                </p>
                <br />
                <a href="#" class="btn-1">informacion</a>
            </div>
        </div>
        <div class="header-img">
            <img src="img/model.jpg" alt="this información for nosotros" width="350" head="auto" >
        </div>
    </header>

    <section class="about container"  >
        
        <div class="about-img">
            <br />
            <img src="img/this.jpg" alt="stilye">
        </div>
        <div class="about-txt">
        <br />
            <h2>Nuestro Servicios</h2>
            
           <p>  
            En PhotoCop , nos especializamos en un enfoque artístico y documental. Nuestro objetivo es capturar
             emociones genuinas y momentos espontáneos, creando imágenes que sean tanto estéticamente bellas 
             como emocionalmente resonantes. Nos enorgullece ofrecer un estilo que es a la 
             vez moderno y atemporal, asegurando que tus fotos serán tesoros que perdurarán por generaciones.
           </p> 

           <br />

           <p>

            Nos enorgullece ofrecer un estilo que es a la vez moderno y atemporal, fusionando 
            las últimas tendencias de la fotografía con técnicas clásicas y probadas.
             Este equilibrio nos permite producir fotos que no solo se destacan en el presente, sino que también mantendrán su encanto y relevancia con el paso del tiempo. Nos esforzamos por asegurarnos de que cada imagen que entregamos se convierta en 
            un tesoro personal, capaz de evocar memorias y emociones cada vez que se mire.
          
        </p>
    </section>


    <section clas = "about container">


    <div class="about-text">
            <br />
        <h2>Hacerca de Nosotros</h2>   
        <p>
        Nuestro equipo está compuesto por fotógrafos apasionados y profesionales 
        con años de experiencia en una amplia variedad de estilos y técnicas fotográficas. Ya sea que estés buscando retratos 
        familiares, cobertura de eventos, sesiones de moda, fotografía de productos o imágenes artísticas, 
        estamos aquí para transformar tus ideas en realidad visual.
        </p>
        <br />
        <p>
        <i>Además, nos destacamos en la meticulosa fotografía de productos, donde cada detalle 
        cuenta para transmitir la calidad y el atractivo de tus productos. 
        También exploramos el ámbito de las imágenes artísticas, buscando siempre nuevas formas 
        de expresión visual que impacten y emocionen.</i>

        <i>Nos enorgullece transformar tus ideas en realidades visuales memorables. 
        Con un enfoque creativo y un compromiso inquebrantable con la excelencia, 
        nos aseguramos de superar tus expectativas en cada proyecto. 
        Estamos aquí para capturar la esencia de tu visión y convertirla en imágenes que perduren en el tiempo, 
        reflejando la calidad y la pasión que nos define como fotógrafos.</i>
       </p>
    </div>
 
       <br /> 
    <div class = "nostro-img">
        <img src="img/panoramic.jpg" alt = "description">
    </div>


        <div class="about-text">
            <h2>¿Por qué elegir Photocop?</h2>
        <br /> 

        <ul>
            <li>Calidad Superior: Utilizamos equipos de última generación y técnicas avanzadas para asegurar que cada fotografía sea impecable y memorable.</li>
            <br /> 
            <li>Creatividad y Originalidad: Nos esforzamos por ofrecer un enfoque fresco e innovador en cada sesión fotográfica, adaptándonos a tus necesidades y deseos.</li>
            <br />
            <li>Experiencia Personalizada: Entendemos que cada cliente es único, por lo que personalizamos nuestros servicios para reflejar tu estilo y personalidad.</li>
            <br />
            <li>Compromiso y Profesionalismo: Desde la planificación hasta la entrega final, nuestro compromiso es brindarte una experiencia profesional y sin contratiempos.</li>
        </ul>
        </div>

    </section>
    
    <main class="services" id="servicios" class="section">
        <br />        
        <h2>Servicios</h2>
        <div class="services-content container">
            
            <div class = "services-1">
                <i></i>
                <i class="fa-solid fa-object-group" onclick="redirectTopagge()"></i>
                    <h3>Fotografia Artistica</h3>
            </div>

            <div class = "services-1">
                <i></i>
                <i class="fa-solid fa-object-group" onclick="redirectTope()"></i>
                    <h3>Fotografia de Bodas</h3>
            </div>
            
            <div class = "services-1">
                <i></i>
                <i class="fa-solid fa-object-group" onclick="redirectEvent()" ></i>
                    <h3>Fotografia de Eventos</h3>
            </div>

            <div class = "services-1" onclick="redirectTopage()">
                <i></i>
                <i class="fa-solid fa-object-group"></i>
                    <h3>Fotografia de XV</h3>
            </div>


        </div>

    </main>


    <section class="formulario container" id="contacto">
        <form method="post" autocomplete="off" id="contactForm" onsubmit="handleSubmit(event)">
            <h2>Agenda tu cita con nosotros</h2>
            <div class="input-grup">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Teléfono Celular" required>
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <input type="day" name="day" placeholder="Dia y Hora" required>
                    <i class="fa-solid fa-certificate"></i>
                </div>

                <div class="input-container">
                    <textarea name="massage" placeholder="Detalles de la cita" required></textarea>
                </div>
                <input type="submit" name="send" class="btn">
            </div>
        </form>
    </section>
    
    <footer class="footer">
        <div class="footer-content container">
            <div class="links">
                <a href="#" class="logo">PhotoCop</a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="#" onclick="redirect('inicio')">Inicio</a></li>
                    <li><a href="#" onclick="redirect('nosotros')">Nosotros</a></li>
                    <li><a href="#" onclick="redirect('servicios')">Servicios</a></li>
                    <li><a href="#" onclick="redirect('contacto')">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>
    </footer>


    <script src="js/scripts.js"></script>
    
    <?php
        include("api/send.php");
    ?>

</body>
</html>
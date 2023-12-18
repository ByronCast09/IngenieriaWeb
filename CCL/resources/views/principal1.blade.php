<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Camara de Comercio Loja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:ital@0;1&family=Poppins:ital,wght@0,500;0,600;1,600&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    @vite(['resources/css/principal.css'])

</head>

<body>

    <header class="cabecera">

        <div class="logo">
            <img src="{{ asset('images/camaraC.jpg') }}">
            <div class="titulo">
                CÁMARA <br />COMERCIO <br />DE LOJA</div>
        </div>

        <nav class="navegacion">
            <a class="nav-link" href="#">Capacitación</a>
            <a class="nav-link" href="#">Beneficios</a>
            <a class="nav-link" href="#">Guía Comercial</a>
            <a class="nav-link" href="#">Contactos</a>
            <a class="nav-link" href="#">Afiliate</a>
        </nav>

    </header>

    <div class="box1"><img class="decore1" src="{{ asset('images/decore1.png') }}" /></div>

    <section class="label">
        <p class="titulo">Capacítate con<br />los mejores <br />economistas del<br />país</p>
        <img src="{{ asset('images/topImg.svg') }}">
    </section>

    <section class="postLabel">

        <p>Impulsa tu carrera con nuestra formación<br /> de calidad</p>

        <div class="buttons">
            <button class="btn btn-primary m">Más Información</button>
            <a href="#" class="btn btn-primary rounded-circle">
                <i class="fas fa-play"></i>
            </a>
            <h6>Prueba Gratuita</h6>
        </div>

    </section>

    <div class="box2"><img class="decore2" src="{{ asset('images/decore2.png') }}" /></div>

    <div class="subtitulo">
        <h2>Conoce los temas para ser parte de la Cámara de Comercio</h2>
    </div>

    <section class="cards">

        <article class="card">
            <div class="card-content">
                <img src="{{ asset('images/card1.png') }}" alt="Imagen de la tarjeta">
            </div>
            <h2>Mercadeo y Ventas</h2>
            <button class="btn btn-primary m">Más Información</button>
        </article>

        <article class="card">
            <div class="card-content">
                <img src="{{ asset('images/card2.png') }}" alt="Imagen de la tarjeta">
            </div>
            <h2>Producción y Calidad</h2>
            <button class="btn btn-primary m">Más Información</button>
        </article>

        <article class="card">
            <div class="card-content">
                <img src="{{ asset('images/card3.png') }}" alt="Imagen de la tarjeta">
            </div>
            <h2>Legal y Normativo</h2>
            <button class="btn btn-primary m">Más Información</button>
        </article>

    </section>

    <section class="contact-section">

        <div class="contact-box">

            <div class="contact-btn">
                <a class="btn btn-primary rounded-circle">
                    <i class="fa-solid fa-paper-plane"></i>
                </a>
            </div>

            <h1>Suscríbete a nuestros boletínes</h1>

            <p>Mantente al día con las novedades de nuestro gremio, suscríbete a nuestros boletines y recibe información
                directamente en tu bandeja de entrada</p>

            <section class="email-section">

                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-regular fa-envelope"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Tu Email" aria-label=""
                        aria-describedby="basic-addon1">
                </div>

                <button class="btn btn-primary">Suscríbete</button>
            </section>
        </div>

    </section>

    <hr class="separador">

    <footer class="footer">

        <section class="section-1">

            <div class="logo">
                <img src="{{ asset('images/camaraC.jpg') }}">
                <div class="titulo">
                    CÁMARA <br />COMERCIO <br />DE LOJA</div>
            </div>

            <p>
                Como gremio buscamos siempre el progreso y beneficio para todos nuestros socios, seguimos trabajando
                para el
                engrandecimiento de nuestra ciudad provincia y país.
            </p>

            <div class="social-icons">
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>

        </section>

        <section class="section-2">

            <h3>Enlaces Rápidos</h3>
            <hr class="mini-separador">
            <a class="nav-link" href="#">Nosotros</a>
            <a class="nav-link" href="#">Nuestros Socios</a>
            <a class="nav-link" href="#">Beneficios</a>
            <a class="nav-link" href="#">Noticias</a>
            <a class="nav-link" href="#">Contactos</a>
            <a class="nav-link" href="#">Guia Comercial</a>

        </section>

        <section class="section-3">

            <h3>Páginas de Interés</h3>
            <hr class="mini-separador">
            <a class="nav-link" href="#">Bomberos</a>
            <a class="nav-link" href="#">ECU 911</a>
            <a class="nav-link" href="#">Municipio de Loja</a>
            <a class="nav-link" href="#">Cámara de Comercio Quito</a>
            <a class="nav-link" href="#">SRI</a>

        </section>

        <section class="section-4">

            <h3>Horario de Atención</h3>
            <div class="horarios">
                <i class="fa-solid fa-clock"></i>
                <p>
                    08h30 a 12h30 <br />
                    14h00 a 18h00 <br />
                    Lunes a Viernes <br />
                </p>
            </div>
            <p>
                Estamos gustosos de <br />
                atender cada una de <br />
                tus consultas
            </p>

        </section>

    </footer>

    <div class="box3"><img class="decore3" src="{{ asset('images/decore3.png') }}" /></div>

</body>

</html>
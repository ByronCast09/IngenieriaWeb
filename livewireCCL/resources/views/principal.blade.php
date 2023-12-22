<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    @vite(['resources/css/app.css'])

</head>

<body>

    <header class="flex justify-between items-center p-2 mb-16">
        <div class="flex items-center z-10">
            <img class="w-20 h-20 mr-3 " src="{{ asset('images/camaraC.jpg') }}">
            <h4 class="text-sm font-bold font-roboto italic text-azullogo leading-relaxed">CÁMARA <br />COMERCIO
                <br />DE LOJA
            </h4>
        </div>

        <nav
            class="flex md:flex-row flex-col md:items-center justify-end items-end font-inter text-xs font-semibold z-10">
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110" href="#">Capacitación</a>
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110" href="#">Beneficios</a>
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110" href="#">Guía Comercial</a>
            <a class="nav-link md:mr-12 sm:mt-0 mb-2 hover:scale-110" href="#">Contactos</a>
            <a class="nav-link md:mr-12 sm:mt-0 hover:scale-110" href="#">Afiliate</a>
        </nav>
    </header>

    <div class="absolute top-0 right-0 z-0">
        <img class="" src="{{ asset('images/decore1.png') }}" />
    </div>

    <section class="flex justify-between items-center mb-12">

        <p
            class="sm:ml-20 font-volkhov font-bold text-azulccl lg:text-titulo1 text-3xl tracking-tighter leading-titulo1 z-10">
            Capacítate con<br />los mejores <br />economistas del<br />país</p>

        <img class="sm:mr-72 mr-10 z-10 sm:w-auto sm:h-full h-60 w-60" src="{{ asset('images/topImg.svg') }}">

    </section>

    <section class="sm:ml-20 flex flex-col sm:items-start items-center">
        <p class="font-poppins text-black sm:text-subtitulo1 not-italic font-semibold leading-normal mb-8">
            Impulsa tu carrera con nuestra formación<br /> de calidad</p>

        <div class="flex items-center sm:justify-start justify-center">

            <button
                class="btn btn-primary sm:w-44 sm:h-16 sm:mr-32 mr-3 bg-cremaccl border-none rounded-xl font-poppins text-sm shadow-masInfo hover:bg-hcremaccl">
                Más Información
            </button>

            <a href="#"
                class="btn btn-primary rounded-circle w-12 h-12 flex justify-center items-center bg-playbtn border-none shadow-splaybtn hover:bg-hplaybtn">
                <i class="fas fa-play text-base"></i>
            </a>

            <h6 class="ml-5 text-pg font-poppins font-medium text-gris">
                Prueba Gratuita
            </h6>

        </div>
    </section>

    <div class="mt-36 z-0 absolute">
        <img class="" src="{{ asset('images/decore2.png') }}" />
    </div>

    <div class="mt-24 text-center mb-20">
        <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal">
            Conoce los temas para ser parte de la Cámara de Comercio
        </h2>
    </div>

    <section class="flex md:flex-row flex-col justify-center mb-64">

        <article class="z-10 m-12 text-center flex flex-col justify-center items-center">
            <img class="rounded-lg hover:animate-escalar" src="{{ asset('images/card1.png') }}">
            <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal mt-12">
                Mercadeo y Ventas
            </h2>
            <button
                class="btn btn-primary mt-10 w-40 h-9 rounded-lg bg-cremaccl border-none font-poppins text-sm shadow-smasInfo hover:bg-hcremaccl">
                Más Información
            </button>
        </article>

        <article class="z-10 m-12 text-center flex flex-col justify-center items-center">
            <img class="rounded-lg hover:animate-escalar" src="{{ asset('images/card2.png') }}">
            <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal mt-12">
                Producción y Calidad
            </h2>
            <button
                class="btn btn-primary mt-10 w-40 h-9 rounded-lg bg-cremaccl border-none font-poppins text-sm shadow-smasInfo hover:bg-hcremaccl">Más
                Información</button>
        </article>

        <article class="z-10 m-12 text-center flex flex-col justify-center items-center">
            <img class="rounded-lg hover:animate-escalar" src="{{ asset('images/card3.png') }}">
            <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal mt-12">
                Legal y Normativo
            </h2>
            <button
                class="btn btn-primary mt-10 w-40 h-9 rounded-lg bg-cremaccl border-none font-poppins text-sm shadow-smasInfo hover:bg-hcremaccl">Más
                Información</button>
        </article>

    </section>

    <section class="flex justify-center">
        <div class="flex flex-col w-w1170 h-auto rounded-rcontactbox bg-bcontactbox shadow-scontactbox text-center">

            <div class="absolute flex self-end">
                <a
                    class="btn btn-primary rounded-circle md:w-w70 md:h-h70 w-10 h-10 flex items-center justify-center mr-10 mt-2 bg-playbtn border-none shadow-splaybtn hover:bg-hplaybtn hover:animate-escalar">
                    <i class="fa-solid fa-paper-plane md:text-aiplanebtn"></i>
                </a>
            </div>

            <h1 class="text-azulccl font-poppins lg:text-3xl text-sm font-semibold leading-10 p-10">
                Suscríbete a nuestros boletínes
            </h1>

            <p class="text-pcontactbox font-poppins lg:text-2xl text-xs font-semibold leading-normal">
                Mantente al día con las novedades de nuestro gremio, suscríbete a nuestros <br> boletines y recibe
                información
                directamente en tu bandeja de entrada
            </p>

            <section class="flex justify-center p-16">
                <div class="input-group border-none md:w-w420 md:h-h70 md-auto h-auto">
                    <span class="input-group-text border-none bg-white rounded-lg">
                        <i class="fa-regular fa-envelope text-icontactbox text-sm"></i>
                    </span>
                    <input type="text"
                        class="form-control font-montserrat border-none placeholder:text-icontactbox rounded-lg"
                        placeholder="Tu Email">
                </div>

                <button
                    class="btn btn-primary md:w-w180 md:h-h70 border-none rounded-xl ml-5 bg-bcontactbtn1 hover:bg-bcontactbtn2 font-poppins text-sbtn font-normal leading-normal text-black">
                    Suscríbete
                </button>
            </section>

        </div>
    </section>

    <div class="flex justify-center mt-24">
        <hr class="border-t-2 border-black w-11/12">
    </div>

    <footer class="flex md:flex-row flex-col md:justify-around md:items-start items-center mt-20 mb-8">
        <section class="md:w-w20p flex flex-col items-center text-justify z-10">

            <div class="flex items-center z-10">
                <img class="w-20 h-20 mr-3" src="{{ asset('images/camaraC.jpg') }}">
                <h4 class="text-sm font-bold font-roboto italic text-azullogo leading-relaxed">CÁMARA <br />COMERCIO
                    <br />DE
                    LOJA
                </h4>
            </div>

            <p class="p-3 text-black font-poppins text-sm font-semibold leading-normal">
                Como gremio buscamos siempre el progreso y beneficio para todos nuestros socios, seguimos trabajando
                para el
                engrandecimiento de nuestra ciudad provincia y país.
            </p>

            <div class="flex justify-center text-xl">
                <i class="fa-brands fa-x-twitter mr-5"></i>
                <i class="fa-brands fa-facebook mr-5"></i>
                <i class="fa-brands fa-instagram mr-5"></i>
            </div>

        </section>

        <section class="md:w-w20p md:text-left z-10">

            <h3 class="text-black font-poppins text-xl font-semibold leading-normal">
                Enlaces Rápidos
            </h3>
            <hr class="w-full mt-2 mb-2 border-t-2 border-black">
            <div class="text-black font-inter text-sm font-semibold leading-normal">
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Nosotros</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Guia Comercial</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Nuestros Socios</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Beneficios</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Noticias</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Contactos</a>
            </div>

        </section>

        <section class="md:w-w20p md:text-left z-10">

            <h3 class="text-black font-poppins text-xl font-semibold leading-normal">
                Páginas de Interés
            </h3>
            <hr class="w-full mt-2 mb-2 border-t-2 border-black">
            <div class="text-black font-inter text-sm font-semibold leading-normal">
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Bomberos</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">ECU 911</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Municipio de Loja</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">Cámara de Comercio Quito</a>
                <a class="nav-link mb-3 hover:text-hcremaccl" href="#">SRI</a>
            </div>

        </section>

        <section class="md:w-w20p text-center z-10 flex flex-col">

            <h3 class="text-black font-poppins text-xl font-semibold leading-normal">
                Horario de Atención
            </h3>
            <div class="flex items-center justify-center mb-2">
                <i class="fa-solid fa-clock text-4xl leading-normal mr-4"></i>
                <p class="p-3 text-black font-poppins text-sm font-semibold leading-normal">
                    08h30 a 12h30 <br />
                    14h00 a 18h00 <br />
                    Lunes a Viernes <br />
                </p>
            </div>
            <p class="p-3 text-black font-poppins text-sm font-semibold leading-normal">
                Estamos gustosos de <br />
                atender cada una de <br />
                tus consultas
            </p>

        </section>
    </footer>

    <div class="relative">
        <img class="absolute right-0 bottom-0 z-0" src="{{ asset('images/decore3.png') }}" />
    </div>

</body>

</html>
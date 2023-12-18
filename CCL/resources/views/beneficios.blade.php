<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Beneficios</title>

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
            <img class="w-20 h-20 mr-3 " src="{{ asset('images/principal/camaraC.jpg') }}">
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

    <section class="flex justify-between items-center mb-28">
        <p
            class="sm:ml-40 font-volkhov font-bold text-azulccl lg:text-titulo1 text-3xl tracking-tighter leading-titulo1 z-10">
            Beneficios <br> para afiliados
        </p>

        <img class="lg:mr-96 mr-10 z-10 sm:w-auto md:h-full h-40 w-40" src="{{ asset('images/topImg1.png') }}">
    </section>

    <section class="flex flex-col ml-20 mr-20 justify-center">

        <article
            class="flex md:flex-row flex-col md:justify-center items-center w-full md:h-h220 rounded-3xl bg-bcardbnfcs z-10 mt-12 hover:animate-escalar">
            <div class="flex flex-col justify-center w-10/12">
                <h3 class="text-azulccl font-poppins lg:text-4xl mb-6 font-semibold leading-normal">
                    Mayor Competencia Contable
                </h3>

                <p class="text-black text-justify font-poppins text-sm lg:text-sbtn leading-normal font-semibold mr-5">
                    Los participantes adquirirán un sólido conjunto de habilidades y conocimientos en contabilidad
                    básica.
                    Esto les permitirá comprender y aplicar conceptos contables esenciales, como el registro de
                    transacciones,
                    el manejo de estados financieros y la interpretación de informes financieros.
                    La competencia contable mejorada facilitará una toma de decisiones más precisa y estratégica en la
                    gestión financiera de sus negocios.
                </p>
            </div>

            <div class="flex flex-col justify-center items-center">
                <img class="md:h-full md:w-full h-36 w-36" src="{{ asset('images/bcard1.png') }}"">
            </div>
        </article>

        <article
            class=" flex md:flex-row flex-col md:justify-center items-center w-full md:h-h220 rounded-3xl
                    bg-bcardbnfcs z-10 mt-12 hover:animate-escalar">
            <div class="flex flex-col justify-center w-10/12">
                <h3 class="text-azulccl font-poppins lg:text-4xl mb-6 font-semibold leading-normal">
                    Cumplimiento Normativo
                </h3>

                <p class="text-black text-justify font-poppins text-sm lg:text-sbtn leading-normal font-semibold mr-5">
                    La formación les proporcionará a los empresarios una comprensión detallada de las leyes y
                    regulaciones contables y fiscales en Ecuador. Esto les permitirá cumplir con los requisitos
                    legales y fiscales de manera efectiva. Al estar al tanto de las normativas vigentes, podrán
                    presentar declaraciones de impuestos precisas y oportunas, evitando sanciones y multas que
                    podrían afectar negativamente sus finanzas.
                </p>
            </div>

            <div class="flex flex-col justify-center items-center">
                <img class="md:h-full md:w-full h-36 w-36" src="{{ asset('images/bcard2.png') }}"">
            </div>
        </article>

        <article
            class=" flex md:flex-row flex-col md:justify-center items-center w-full md:h-h220 rounded-3xl
                bg-bcardbnfcs z-10 mt-12 hover:animate-escalar">
            <div class="flex flex-col justify-center w-10/12">
                <h3 class="text-azulccl font-poppins lg:text-4xl mb-6 font-semibold leading-normal">
                    Reducción de Riesgos Financieros
                </h3>

                <p class="text-black text-justify font-poppins text-sm lg:text-sbtn leading-normal font-semibold mr-5">
                    Al mejorar la comprensión contable, los participantes estarán en una mejor posición para
                    evitar errores en la documentación tributaria y financiera. Esto reducirá significativamente
                    los riesgos financieros, incluyendo la posibilidad de incurrir en pérdidas debido a informes
                    financieros incorrectos o incumplimiento de las obligaciones fiscales.
                </p>
            </div>

            <div class="flex flex-col justify-center items-center">
                <img class="md:h-36 md:w-11/12 h-36 w-36" src="{{ asset('images/bcard3.png') }}"">
            </div>
        </article>

        <article
            class=" flex md:flex-row flex-col md:justify-center items-center w-full md:h-h220 rounded-3xl
                bg-bcardbnfcs z-10 mt-12 hover:animate-escalar">
            <div class="flex flex-col justify-center w-10/12">
                <h3 class="text-azulccl font-poppins lg:text-4xl mb-6 font-semibold leading-normal">
                    Autonomía Empresarial
                </h3>

                <p class="text-black text-justify font-poppins text-sm lg:text-sbtn leading-normal font-semibold mr-5">
                    La formación empoderará a los empresarios al proporcionarles las herramientas y
                    conocimientos necesarios para tomar decisiones financieras más informadas y
                    estratégicas. La autonomía empresarial significa que podrán gestionar sus finanzas y
                    contabilidad de manera independiente, sin depender en gran medida de terceros, lo que
                    les permitirá tomar el control de sus negocios y sus resultados financieros.
                </p>
            </div>

            <div class="flex flex-col justify-center items-center">
                <img class="md:h-44 md:w-11/12 h-36 w-36" src="{{ asset('images/bcard4.png') }}"">
            </div>
        </article>

        <article
            class=" flex md:flex-row flex-col md:justify-center items-center w-full md:h-h220 rounded-3xl
                bg-bcardbnfcs z-10 mt-12 hover:animate-escalar">
            <div class="flex flex-col justify-center w-10/12">
                <h3 class="text-azulccl font-poppins lg:text-4xl mb-6 font-semibold leading-normal">
                    Crecimiento Sostenible
                </h3>

                <p class="text-black text-justify font-poppins text-sm lg:text-sbtn leading-normal font-semibold mr-5">
                    La mejora de la eficiencia operativa y el cumplimiento de las normativas contables y
                    fiscales sienta las bases para el crecimiento sostenible de los negocios afiliados.
                    Al comprender y aplicar de manera efectiva los conceptos contables, los empresarios
                    pueden tomar decisiones financieras que promuevan la estabilidad y la expansión de
                    sus empresas a lo largo del tiempo.
                </p>
            </div>

            <div class="flex flex-col justify-center items-center">
                <img class="md:h-full md:w-11/12 h-36 w-36" src="{{ asset('images/bcard5.png') }}"">
            </div>
        </article>

        <article
            class=" flex md:flex-row flex-col md:justify-center items-center w-full md:h-h220 rounded-3xl
            bg-bcardbnfcs z-10 mt-12 hover:animate-escalar">
            <div class="flex flex-col justify-center w-10/12">
                <h3 class="text-azulccl font-poppins lg:text-4xl mb-6 font-semibold leading-normal">
                    Aprendizaje Continuo
                </h3>

                <p class="text-black text-justify font-poppins text-sm lg:text-sbtn leading-normal font-semibold mr-5">
                    El portal web educativo proporciona recursos prácticos y casos hipotéticos que
                    fomentan el aprendizaje continuo. Los empresarios pueden acceder a información
                    actualizada y recursos educativos relevantes para mantenerse al día con las
                    últimas tendencias y cambios en la contabilidad y la fiscalidad, lo que les
                    permite seguir creciendo y mejorando sus habilidades.
                </p>
            </div>

            <div class="flex flex-col justify-center items-center">
                <img class="md:h-36 md:w-11/12 h-36 w-36" src="{{ asset('images/bcard6.png') }}"">
            </div>
        </article>

    </section>

    <div class="flex justify-center mt-24">
        <hr class="border-t-2 border-black self-center w-11/12">
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

        <section class="md:w-w20p text-left z-10">

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

        <section class="md:w-w20p text-left z-10">

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

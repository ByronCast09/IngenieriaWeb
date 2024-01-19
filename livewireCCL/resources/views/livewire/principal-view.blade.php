<div>

    <section class="flex justify-between items-center mb-12">

        <p
            class="sm:ml-20 font-volkhov font-bold text-azulccl lg:text-titulo1 text-3xl tracking-tighter leading-titulo1 z-10 animate-fade">
            Capacítate con<br />los mejores <br />economistas del<br />país</p>

        <img class="sm:mr-72 mr-10 z-10 sm:w-auto sm:h-full h-60 w-60 animate-fadeInUp"
            src="{{ asset('images/topImg.webp') }}">

    </section>

    <section class="sm:ml-20 flex flex-col sm:items-start items-center  animate-fade">
        <p class="font-poppins text-black sm:text-subtitulo1 not-italic font-semibold leading-normal mb-8">
            Impulsa tu carrera con nuestra formación<br /> de calidad</p>

        <div class="flex items-center sm:justify-start justify-center">

            <button
                class="sm:w-44 sm:h-16 sm:mr-32 mr-3 bg-cremaccl text-white border-none rounded-xl font-poppins text-sm shadow-masInfo hover:bg-hcremaccl active:bg-acremaccl">
                Más Información
            </button>

            <a 
                class="rounded-full w-12 h-12 flex justify-center items-center bg-playbtn text-white border-none shadow-splaybtn hover:bg-hplaybtn active:bg-aplaybtn">
                <i class="fas fa-play text-base"></i>
            </a>

            <h6 class="ml-5 text-pg font-poppins font-medium text-gris">
                Prueba Gratuita
            </h6>

        </div>
    </section>

    <livewire:mancha-mid />

    <div class="mt-24 text-center mb-20">
        <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal">
            Conoce los temas para ser parte de la Cámara de Comercio
        </h2>
    </div>

    <section class="flex md:flex-row flex-col justify-center mb-64">

        <article class="z-10 m-12 text-center flex flex-col justify-center items-center">
            <img class="rounded-lg transition ease-linear delay-150 hover:-translate-y-1 hover:scale-110 duration-200"
                src="{{ asset('images/card1.webp') }}">
            <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal mt-12">
                Mercadeo y Ventas
            </h2>
            <button
                class="mt-10 w-40 h-10 rounded-lg bg-cremaccl text-white border-none font-poppins text-sm shadow-smasInfo hover:bg-hcremaccl active:bg-acremaccl">
                Más Información
            </button>
        </article>

        <article class="z-10 m-12 text-center flex flex-col justify-center items-center">
            <img class="rounded-lg transition ease-linear delay-150 hover:-translate-y-1 hover:scale-110 duration-200"
                src="{{ asset('images/card2.webp') }}">
            <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal mt-12">
                Producción y Calidad
            </h2>
            <button
                class="mt-10 w-40 h-10 rounded-lg bg-cremaccl text-white border-none font-poppins text-sm shadow-smasInfo hover:bg-hcremaccl active:bg-acremaccl">Más
                Información</button>
        </article>

        <article class="z-10 m-12 text-center flex flex-col justify-center items-center">
            <img class="rounded-lg transition ease-linear delay-150 hover:-translate-y-1 hover:scale-110 duration-200"
                src="{{ asset('images/card3.webp') }}">
            <h2 class="text-azulccl font-poppins text-2xl font-semibold leading-normal mt-12">
                Legal y Normativo
            </h2>
            <button
                class="mt-10 w-40 h-10 rounded-lg bg-cremaccl text-white border-none font-poppins text-sm shadow-smasInfo hover:bg-hcremaccl active:bg-acremaccl">Más
                Información</button>
        </article>

    </section>

    <section class="flex justify-center">
        <div class="flex flex-col w-w1170 h-auto rounded-rcontactbox bg-bcontactbox shadow-scontactbox text-center">

            <div class="absolute flex self-end">
                <a
                    class="rounded-full md:w-w70 md:h-h70 w-10 h-10 flex items-center justify-center mr-10 mt-2 bg-playbtn text-white border-none shadow-splaybtn hover:bg-hplaybtn active:bg-aplaybtn">
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
                    class="md:w-w180 md:h-h70 border-none rounded-xl ml-5 bg-bcontactbtn hover:bg-bcontactbtnh active:bg-bcontactbtna font-poppins text-sbtn font-normal leading-normal text-black">
                    Suscríbete
                </button>
            </section>

        </div>
    </section>

</div>

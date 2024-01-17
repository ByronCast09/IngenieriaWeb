<div>

    <section class="flex justify-between items-center mb-m35">

        <p
            class="sm:ml-20 font-volkhov font-bold text-azulccl lg:text-titulo1 text-3xl tracking-tighter leading-titulo1 z-10  animate-fade">
            Cursos y <br> Práctica de <br> Contabilidad</p>

        <img class="lg:mr-96 mr-10 z-10 sm:w-auto md:h-60 h-36 w-36 animate-fadeInUp" src="{{ asset('images/topImg2.png') }}">

    </section>

    <div class="flex sm:justify-end justify-center sm:mr-52 mb-3">
        <form action="" class="relative">
            <input type="search"
                class="peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-azulccl focus:pl-16 focus:pr-4" />
            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-azulccl px-3.5 peer-focus:border-azulccl peer-focus:stroke-azulccl"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </form>
    </div>

    <section class="mx-20 grid 2xl:grid-cols-2 gap-5 justify-items-center animate-fadeInUp">

        @foreach ($cursos as $curso)
            <article class="flex md:flex-row flex-col bg-cremaccl sm:w-4/6 h-auto rounded-lg bg-opacity-15 z-10">
                <img class="sm:h-full w-auto rounded-lg" src="{{ asset('images/ccard.png') }}" alt="">

                <div class="m-4 flex flex-col justify-center items-center">
                    <h3 class="md:text-xl text-sm font-poppins leading-normal mb-2 self-start">
                        {{ $curso->titulo }}
                    </h3>

                    <p class="font-inter text-justify md:text-sm text-xs leading-normal">
                        {{ $curso->descripcion }}
                    </p>
                </div>
            </article>
        @endforeach

    </section>

</div>

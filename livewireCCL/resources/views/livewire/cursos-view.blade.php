<div>

    <section class="flex justify-between items-center mb-12">

        <p
            class="sm:ml-20 font-volkhov font-bold text-azulccl lg:text-titulo1 text-3xl tracking-tighter leading-titulo1 z-10">
            Cursos y <br> Práctica de <br> Contabilidad</p>

        <img class="lg:mr-96 mr-10 z-10 sm:w-auto md:h-60 h-36 w-36" src="{{ asset('images/topImg2.png') }}">

    </section>

    <div class="flex justify-end mr-20">
        <form action="" class="relative">
            <input type="search"
                class="peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-azulccl focus:pl-16 focus:pr-4" />
            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-azulccl peer-focus:stroke-azulccl"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </form>
    </div>

    <section class="mx-20 mt-10 grid grid-cols-2 gap-4 justify-items-center">

        @foreach ($cursos as $curso)
            <article class="flex flex-row bg-cremaccl w-4/6 h-80 rounded-lg bg-opacity-15 z-10">
                <img class="h-full w-4/5 rounded-lg" src="{{ asset('images/ccard.png') }}" alt="">

                <div class="m-4 flex flex-col justify-center items-center">
                    <h3 class="text-xl font-poppins leading-normal mb-2 self-start">
                        {{ $curso->titulo }}
                    </h3>

                    <p class="font-inter text-justify text-sm leading-normal">
                        {{ $curso->descripcion }}
                    </p>
                </div>
            </article>
        @endforeach

    </section>

</div>

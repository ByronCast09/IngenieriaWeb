<div>

    <section class="flex justify-between items-center">

        <p
            class="sm:ml-20 font-volkhov font-bold text-azulccl lg:text-[80px] text-3xl tracking-tighter leading-titulo1 z-10  animate-fade">
            Cursos y <br> Práctica de <br> Contabilidad</p>

        <img class="lg:mr-96 mr-10 z-10 sm:w-auto md:h-[240px] h-36 w-36 animate-fadeInUp"
            src="{{ asset('images/topImg2.webp') }}">

    </section>

    <div class="flex sm:justify-between justify-center sm:mr-20 mb-3">

        @auth
            <h4 class="ml-20 my-4 text-3xl font-figtree font-semibold">
                Tus Cursos
            </h4>
        @endauth

        @guest
            <h4 class="ml-20 my-4 text-3xl font-figtree font-semibold animate-fade">
                Cursos Disponibles
            </h4>
        @endguest

        <div class="animate-fade">
            <form action="" class="relative" wire:submit.prevent>
                <input type="search" wire:model.live.debounce.500ms="search"
                    class="peer cursor-pointer relative z-10 h-12 w-12 rounded-full border bg-transparent pl-12 outline-none focus:w-full focus:cursor-text focus:border-azulccl focus:pl-16 focus:pr-4" />
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-azulccl px-3.5 peer-focus:border-azulccl peer-focus:stroke-azulccl"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </form>
        </div>

    </div>

    @auth

        <section class="mx-20 grid 2xl:grid-cols-2 gap-5 justify-items-center animate-fadeInUp">
            @foreach ($cursos as $index => $curso)
                <a href="{{ route('curso.view', ['id' => $curso->id]) }}"
                    class="flex md:flex-row flex-col bg-cremaccl sm:w-4/6 h-auto w-auto rounded-lg bg-opacity-15 z-10 no-underline">
                    <img class="sm:h-full w-auto rounded-lg" src="{{ asset('images/ccard' . $index % 2 . '.webp') }}"
                        alt="">

                    <main class="grid grid-flow-row">
                        <div class="m-4 flex flex-col justify-center items-center text-black">
                            <h3 class="md:text-xl text-sm font-poppins leading-normal mb-2 self-start font-semibold">
                                {{ $curso->titulo }}
                            </h3>

                            <h3 class="md:text-lg text-sm text-azulccl font-poppins leading-normal mb-2 self-start">
                                {{ $curso->categoria }}
                            </h3>

                            <p class="font-inter text-justify md:text-sm text-xs leading-normal">
                                {{ $curso->descripcion }}
                            </p>

                        </div>
                    </main>
                </a>
            @endforeach
        </section>

        <div class="flex justify-center mt-24 mb-[65px]">
            <hr class="border-[2px] border-black w-[90%]">
        </div>

        <h4 class="ml-20 mb-[65px] text-3xl font-figtree font-semibold">
            Cursos Disponibles
        </h4>

        <section class="mx-20 grid 2xl:grid-cols-2 gap-5 justify-items-center">

            @foreach ($cursosNoInscritos as $index => $curso)
                <a href="{{ route('curso.view', ['id' => $curso->id]) }}"
                    class="flex md:flex-row flex-col bg-cremaccl sm:w-4/6 h-auto w-auto rounded-lg bg-opacity-15 z-10 no-underline">
                    <img class="sm:h-full w-auto rounded-lg" src="{{ asset('images/ccard' . $index % 2 . '.webp') }}"
                        alt="">

                    <main class="grid grid-flow-row">
                        <div class="m-4 flex flex-col justify-center items-center text-black">
                            <h3 class="md:text-xl text-sm font-poppins leading-normal mb-2 self-start font-semibold">
                                {{ $curso->titulo }}
                            </h3>

                            <h3 class="md:text-lg text-sm text-azulccl font-poppins leading-normal mb-2 self-start">
                                {{ $curso->categoria }}
                            </h3>

                            <p class="font-inter text-justify md:text-sm text-xs leading-normal">
                                {{ $curso->descripcion }}
                            </p>

                        </div>
                        <div class="flex justify-end mr-6 mb-3">
                            <button type="button" wire:click="inscribirse({{ $curso->id }})"
                                class="h-10 w-24 rounded-xl text-white text-[15px] bg-gradient-to-l font-inter from-azulccl to-gazulccl hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <h2 class="m-2">
                                    Inscríbete
                                </h2>
                            </button>
                        </div>
                    </main>
                </a>
            @endforeach
        </section>

    @endauth

    @guest
        <section class="mx-20 grid 2xl:grid-cols-2 gap-5 justify-items-center animate-fadeInUp">
            @foreach ($cursos as $index => $curso)
                <a href="{{ route('curso.view', ['id' => $curso->id]) }}"
                    class="flex md:flex-row flex-col bg-cremaccl sm:w-4/6 h-auto w-auto rounded-lg bg-opacity-15 z-10 no-underline">
                    <img class="sm:h-full w-auto rounded-lg" src="{{ asset('images/ccard' . $index % 2 . '.webp') }}"
                        alt="">

                    <main class="grid grid-flow-row">
                        <div class="m-4 flex flex-col justify-center items-center text-black">
                            <h3 class="md:text-xl text-sm font-poppins leading-normal mb-2 self-start font-semibold">
                                {{ $curso->titulo }}
                            </h3>

                            <h3 class="md:text-lg text-sm text-azulccl font-poppins leading-normal mb-2 self-start">
                                {{ $curso->categoria }}
                            </h3>

                            <p class="font-inter text-justify md:text-sm text-xs leading-normal">
                                {{ $curso->descripcion }}
                            </p>

                        </div>
                    </main>
                </a>
            @endforeach
        </section>
    @endguest

</div>

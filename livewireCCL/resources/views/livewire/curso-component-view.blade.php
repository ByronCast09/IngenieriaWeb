<div class="mx-5">
    <article class="grid grid-flow-col grid-cols-12">
        <div class="col-span-8">

            <section class="w-[1024px] h-[576px] sticky">
                @if (!empty($videoInfo))
                    <iframe class="rounded-3xl z-20" width="1024" height="576"
                        src="https://www.youtube.com/embed/{{ $videoInfo[$currentVideoIndex]->id }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                @endif
            </section>

            @if (count($videoLinks) > 1)
                <div class="flex justify-center items-center mt-4 mr-10">
                    <button type="button" wire:click="previousVideo"
                        class="w-12 h-12 mr-2 rounded-full flex justify-center items-center text-white bg-gradient-to-l from-azulccl to-gazulccl hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="26" height="26" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </button>

                    <button type="button" wire:click="nextVideo"
                        class="w-12 h-12 ml-2 rounded-full flex justify-center items-center text-white bg-gradient-to-r from-azulccl to-gazulccl hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="26" height="26" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" transform="rotate(180)">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            <p class="my-[30px] font-poppins text-[16px] text-pretty font-medium">
                {{ $curso->descripcion }}
            </p>
        </div>

        <div class="col-span-4 z-10">
            <h1 class="font-volkhov font-bold text-azulccl lg:text-7xl text-3xl tracking-tighter">
                {{ $curso->titulo }}
            </h1>

            <h2 class="font-figtree font-bold text-amber-900 lg:text-3xl mt-7">
                {{ $curso->categoria }}
            </h2>

            <section>
                <div class="flex justify-between mb-1 mt-[20px]">
                    <span class="font-poppins text-[24px] font-semibold text-black">Progreso del curso:</span>
                    <span class="font-poppins text-[24px] font-semibold text-black">45%</span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-4 animate-progressBar">
                    <div class="bg-gradient-to-r from-azulccl to-gazulccl h-4 rounded-full" style="width: 45%"></div>
                </div>

                <div class="flex items-center mb-4 mt-3">
                    <input id="curso-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-gazulccl bg-gray-200 border-gray-400 rounded focus:ring-azulccl focus:ring-2">
                    <label for="curso-checkbox" class="ms-2 font-poppins font-semibold text-[16px]">Marcar clase como
                        completada</label>
                </div>

                <div class="grid grid-cols-3 gap-2 font-figtree font-bold">

                    @foreach ($curso->archivos as $archivo)
                        @php
                            $extension = pathinfo($archivo->nombre, PATHINFO_EXTENSION);
                            $fileUrl = Storage::url($archivo->path);
                        @endphp

                        @if ($extension == 'pdf')
                            <!-- boton pdf -->
                            <a href="{{ $fileUrl }}" target="_blank"
                                class="flex justify-center items-center bg-orange-100 hover:bg-orange-200 h-10 w-auto rounded-3xl border-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-type-pdf mx-1.5 text-red-500"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                        <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                        <path d="M17 18h2" />
                                        <path d="M20 15h-3v6" />
                                        <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                    </svg>
                                </div>
                                <h5 class="block mr-3 truncate text-xs">
                                    {{ $archivo->nombre }}
                                </h5>
                            </a>
                        @elseif ($extension == 'txt')
                            <!-- boton txt -->
                            <a href="{{ $fileUrl }}" target="_blank"
                                class="flex justify-center items-center bg-green-100  hover:bg-green-200 h-10 w-auto rounded-3xl border-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-type-txt mx-1.5 text-green-600"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M16.5 15h3" />
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                        <path d="M4.5 15h3" />
                                        <path d="M6 15v6" />
                                        <path d="M18 15v6" />
                                        <path d="M10 15l4 6" />
                                        <path d="M10 21l4 -6" />
                                    </svg>
                                </div>
                                <h5 class="block mr-3 truncate text-xs">
                                    {{ $archivo->nombre }}</h5>
                            </a>
                        @elseif ($extension == 'docx')
                            <!-- boton docx -->
                            <a href="{{ $fileUrl }}" download
                                class="flex justify-center items-center bg-blue-100  hover:bg-blue-200 h-10 w-auto rounded-3xl border-gray-200 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-type-docx mx-1.5 text-blue-600"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                        <path d="M2 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                        <path d="M17 16.5a1.5 1.5 0 0 0 -3 0v3a1.5 1.5 0 0 0 3 0" />
                                        <path
                                            d="M9.5 15a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1 -3 0v-3a1.5 1.5 0 0 1 1.5 -1.5z" />
                                        <path d="M19.5 15l3 6" />
                                        <path d="M19.5 21l3 -6" />
                                    </svg>
                                </div>
                                <h5 class="block mr-3 truncate text-xs">
                                    {{ $archivo->nombre }}</h5>
                            </a>
                        @endif
                    @endforeach
                </div>
            </section>
        </div>
    </article>

    <main>

        @foreach ($cursosRelated as $curso)
            <livewire:curso-category-component :curso="$curso" :key="$curso->id" />
        @endforeach

    </main>
</div>

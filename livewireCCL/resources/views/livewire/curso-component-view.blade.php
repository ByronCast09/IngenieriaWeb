<div class="mx-5">
    <article class="sm:grid sm:grid-flow-col sm:grid-cols-12 flex flex-col-reverse">
        <div class="sm:col-span-8 sm:block flex flex-col justify-center items-center">

            <section class="sticky">
                @if (!empty($videoInfo) && $videoInfo[0] !== false)
                    <iframe class="rounded-3xl 2xl:w-[1024px] 2xl:h-[576px] z-20"
                        src="https://www.youtube.com/embed/{{ $videoInfo[$currentVideoIndex]->id }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                @endif
            </section>

            @if (count($videoLinks) > 1)
                <div class="flex justify-center items-center flex-wrap mt-4 mr-10 animate-fadeInUp">
                    @foreach ($videoLinks as $index => $item)
                        <button type="button" wire:click="selectVideo({{ $index }})"
                            class="w-[38px] h-[38px] ml-[13px] mb-2 rounded-full flex justify-center items-center text-white bg-gradient-to-b from-azulccl to-gazulccl hover:scale-125 transition ease-in-out focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <h3 class="font-inter font-bold text-[18px]">
                                {{ $index + 1 }}
                            </h3>
                        </button>
                    @endforeach
                </div>
            @endif

            <p class="my-[30px] font-poppins text-[16px] text-pretty sm:mr-10 font-medium">
                {{ $curso->descripcion }}
            </p>

            @auth
                @if (auth()->user()->cursos->contains($curso->id) && $curso->pruebas->count() > 0)
                    <div class="mt-6">
                        <h2 class="text-2xl font-figtree font-bold mb-6">Pruebas</h2>
                        <div class="flex items-center flex-wrap mb-4">
                            @foreach ($curso->pruebas as $prueba)
                                <a href="/mostrar-prueba/{{ $prueba->id }}" target="_blank"
                                    class="flex justify-center w-fit mr-[13px] mb-2 items-center bg-gradient-to-l from-yellow-100 to-amber-300 hover:bg-gradient-to-bl text-slate-950 h-10 rounded-3xl border-gray-200 focus:ring-2 focus:outline-none focus:ring-blue-300">
                                    <h2 class="font-figtree py-3 pl-3">
                                        {{ $prueba->titulo }}
                                    </h2>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-school mb-[4px] ml-[5px] mr-[10px]"
                                        width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                                        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                                    </svg>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endauth
        </div>

        <div class="sm:col-span-4 z-10">
            <h1 class="font-volkhov font-bold text-azulccl lg:text-7xl text-5xl tracking-tighter animate-fade">
                {{ $curso->titulo }}
            </h1>

            <h2 class="font-figtree font-bold text-amber-900 lg:text-3xl mt-7 animate-fade">
                {{ $curso->categoria }}
            </h2>

            <section>

                @auth
                    @if (auth()->user()->cursos->contains($curso->id))
                        <livewire:progress-bar wire:model.live :progress="auth()
                            ->user()
                            ->cursos()
                            ->where('curso_id', $this->curso->id)
                            ->first()->pivot->progreso" />

                        <div class="flex items-center mt-3">
                            <input id="curso-checkbox" type="checkbox" value="" wire:change="toggleCompletion"
                                class="w-4 h-4 text-gazulccl bg-gray-200 border-gray-400 rounded focus:ring-azulccl focus:ring-2">
                            <label for="curso-checkbox" class="ms-2 font-poppins font-semibold text-[16px]">Marcar curso
                                como completado</label>
                        </div>
                    @endif
                @endauth

                <div class="grid grid-cols-3 gap-2 font-figtree font-bold sm:mb-0 mb-4 mt-4 animate-fadeInUp">

                    @foreach ($curso->archivos as $archivo)
                        @php
                            $extension = pathinfo($archivo->nombre, PATHINFO_EXTENSION);
                            $fileUrl = Storage::url($archivo->path);
                        @endphp

                        @if ($extension == 'pdf')
                            <!-- boton pdf -->
                            <a wire:click="openFile({{ $loop->index }})" href="{{ $fileUrl }}" target="_blank"
                                class="flex justify-center items-center bg-gradient-to-r from-red-500 to-orange-500 hover:bg-gradient-to-l text-white h-10 w-auto rounded-3xl border-gray-200 focus:ring-2 focus:outline-none focus:ring-blue-300">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-type-pdf mx-1.5 text-white"
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
                            <a wire:click="openFile({{ $loop->index }})" href="{{ $fileUrl }}" target="_blank"
                                class="flex justify-center items-center bg-gradient-to-r from-green-500 to-cyan-500 hover:bg-gradient-to-l text-white h-10 w-auto rounded-3xl border-gray-200 focus:ring-2 focus:outline-none focus:ring-blue-300">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-type-txt mx-1.5 text-white"
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
                            <a wire:click="openFile({{ $loop->index }})" href="{{ $fileUrl }}" download
                                class="flex justify-center items-center bg-gradient-to-r from-sky-500 to-indigo-500 hover:bg-gradient-to-l text-white h-10 w-auto rounded-3xl border-gray-200 focus:ring-2 focus:outline-none focus:ring-blue-300">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-type-docx mx-1.5 text-white"
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

    @php
        $cursoClone = clone $curso;
    @endphp

    <main>
        @foreach ($cursosRelated as $cursoClone)
            <livewire:curso-category-component :href="$cursoClone->href" :curso="$cursoClone" :key="$cursoClone->id" />
        @endforeach
    </main>

    @auth
        @if (auth()->user()->cursos->contains($curso->id))
            <div class="flex justify-center mt-20">
                <button type="button" wire:click="cancelarInscripcion({{ $curso->id }})"
                    class="h-10 w-auto rounded-3xl text-white text-[15px] bg-slate-950 font-inter hover:bg-slate-800  focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <h2 class="m-[10px]">
                        Cancelar Inscripción
                    </h2>
                </button>
            </div>
        @endif
    @endauth

</div>

<div>

    <article class="flex flex-col justify-center bg-white w-auto h-auto rounded-lg shadow-md">

        <section class="m-6">
            <div class="flex flex-row justify-between items-center my-1">
                <div class="flex flex-col">
                    <h1 class="font-figtree text-2xl font-medium text-slate-950">
                        {{ $curso->titulo }}
                    </h1>
                    <p class="font-figtree text-lg font-medium mt-1 text-blue-900">
                        {{ $curso->categoria }}
                    </p>
                </div>

                <div class="flex flex-row self-start">
                    <button data-bs-toggle="modal" data-bs-target="#editModal{{ $curso->id }}"
                        class="flex justify-center items-center w-6 h-6 ml-10 bg-slate-950 hover:bg-slate-700 text-xs text-white rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="17"
                            height="17" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                            <path d="M16 5l3 3" />
                        </svg>
                    </button>

                    <!-- maiki aqui creo el botón "Crear Prueba" -->
                    <button wire:click.="crearPrueba({{ $curso->id }})"
                        class="flex justify-center items-center w-6 h-6 ml-2 bg-emerald-600 hover:bg-emerald-700 text-sm text-white rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-table-plus"
                            width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12.5 21h-7.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                            <path d="M3 10h18" />
                            <path d="M10 3v18" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                        </svg>
                    </button>

                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{ $curso->id }}"
                        class="flex justify-center items-center w-6 h-6 ml-2 bg-red-600 hover:bg-red-700 text-sm text-white rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="18"
                            height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <p class="font-figtree text-justify text-sm leading-normal">
                {{ $curso->descripcion }}
            </p>

            <div class="grid grid-cols-3 gap-2 mt-2">

                @foreach ($curso->archivos as $archivo)
                    @php
                        $extension = pathinfo($archivo->nombre, PATHINFO_EXTENSION);
                        $fileUrl = Storage::url($archivo->path);
                    @endphp

                    @if ($extension == 'pdf')
                        <!-- boton pdf -->
                        <a href="{{ $fileUrl }}" target="_blank"
                            class="flex justify-center items-center bg-orange-500 bg-opacity-o7 h-10 w-auto rounded-3xl hover:bg-opacity-15">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-file-type-pdf mx-1.5 text-red-500"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            class="flex justify-center items-center bg-green-500 bg-opacity-o7 h-10 w-auto rounded-3xl hover:bg-opacity-15">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-file-type-txt mx-1.5 text-green-600"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                            class="flex justify-center items-center bg-blue-500 bg-opacity-o7 h-10 w-auto rounded-3xl hover:bg-opacity-15">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-file-type-docx mx-1.5 text-blue-600"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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

    </article>

    <!-- Delete Modal-->

    <div class="modal fade" id="deleteModal{{ $curso->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content font-figtree font-bold">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Curso</h1>
                </div>
                <div class="modal-body">
                    Seguro que desea eliminar el curso?
                </div>

                <div class="modal-footer">
                    <x-primary-button type="button" data-bs-dismiss="modal">{{ __('Cancelar') }}</x-primary-button>

                    <x-primary-button wire:click="eliminarCurso({{ $curso->id }})"
                        class="bg-red-500 hover:bg-red-600 active:bg-red-800 focus:bg-red-800" type="button"
                        data-bs-dismiss="modal">{{ __('Eliminar') }}</x-primary-button>
                </div>

            </div>
        </div>
    </div>

    <!-- Edit Modal-->

    <div wire:ignore.self class="modal fade" id="editModal{{ $curso->id }}" tabindex="-1"
        aria-labelledby="editCursoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content font-figtree font-bold">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editCursoModalLabel">
                        Editar Curso: {{ $curso->titulo }}
                    </h1>
                    <button
                        class="flex justify-center items-center w-6 h-6 ml-2 bg-red-600 hover:bg-red-700 text-sm text-white rounded-md"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <form wire:submit.prevent="editarCurso({{ $curso->id }})" class="mt-6 space-y-6 ">

                        <!-- titulo -->
                        <div>
                            <x-input-label for="titulo" :value="__('Título del Curso')" />
                            <x-text-input wire:model="titulo" id="titulo" name="titulo" type="text"
                                class="mt-1 block w-full" required autofocus />
                        </div>

                        <!-- categoria -->
                        <x-input-label for="editCategoria" :value="__('Categoría del Curso')" />
                        <select wire:model="categoria" id="editCategoria"
                            class="mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 rounded-md w-full shadow-sm font-medium placeholder:font-medium"
                            required>
                            <option selected>Selecciona una Categoría</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Tributación">Tributación</option>
                            <option value="Impuestos">Impuestos</option>
                            <option value="Manejo de activos">Manejo de activos</option>
                            <option value="Manejo de pasivos">Manejo de pasivos</option>
                        </select>

                        <!-- descripcion -->
                        <div>
                            <x-input-label for="descripcion" :value="__('Descripción del Curso')" />
                            <textarea wire:model="descripcion" id="descripcion" name="descripcion" class="mt-1 block w-full" rows="1"
                                required></textarea>
                        </div>

                        <!-- video_links -->
                        <div>
                            <x-input-label for="video_links" :value="__('Enlace al Video del Curso')" />

                            @forelse ($video_links as $index => $video_link)
                                <section class="flex justify-center items-center">
                                    <x-text-input wire:model="video_links.{{ $index }}"
                                        id="video_link_{{ $index }}" name="video_link_{{ $index }}"
                                        type="text" class="mt-1 block w-full" />
                                    @if ($index === 0)
                                        <button wire:click="addVideoLink" type="button"
                                            class="flex flex-row justify-center items-center w-10 h-10 ml-1 bg-gray-800 hover:bg-gray-700 text-white rounded-md">
                                            +
                                        </button>
                                    @endif
                                </section>
                            @empty
                                <section class="flex justify-center items-center">
                                    <x-text-input wire:model="video_links.0" id="video_link_0" name="video_link_0"
                                        type="text" class="mt-1 block w-full" />
                                    <button wire:click="addVideoLink" type="button"
                                        class="flex flex-row justify-center items-center w-10 h-10 ml-1 bg-gray-800 hover:bg-gray-700 text-white rounded-md">
                                        +
                                    </button>
                                </section>
                            @endforelse
                        </div>

                        <!-- Subir Archivos -->
                        <x-input-label for="editInputFile" :value="__('Actualizar recursos del Curso')" />
                        <input wire:model="archivos"
                            class="block w-full mt-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none"
                            id="editInputFile" type="file" multiple>

                        @if (!$curso->archivos->isEmpty())
                            <!-- Mostrar Archivos -->
                            <x-input-label :value="__('Recursos del Curso')" />
                            <div class="grid grid-cols-12 justify-center items-center gap-2 mt-2">

                                @foreach ($curso->archivos as $archivo)
                                    @php
                                        $fileUrl = Storage::url($archivo->path);
                                    @endphp

                                    <!-- boton archivo -->
                                    <a href="{{ $fileUrl }}" target="_blank"
                                        class="col-span-10 flex justify-center items-center bg-azulccl bg-opacity-o7 h-10 w-auto rounded-3xl hover:bg-opacity-15">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-file-smile mx-1.5 text-slate-800"
                                                width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path
                                                    d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2zm-7 -7h.01m3.99 0h.01" />
                                                <path d="M10 17a3.5 3.5 0 0 0 4 0" />
                                            </svg>
                                        </div>
                                        <h5 class="block mr-3 truncate text-xs">
                                            {{ $archivo->nombre }}
                                        </h5>
                                    </a>

                                    <button wire:click="eliminarArchivo({{ $archivo->id }})"
                                        class="col-span-2 flex justify-center text-slate-800 items-center w-15 h-10 bg-red-600 bg-opacity-15 rounded-3xl hover:bg-opacity-90 hover:text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                            width="20" height="20" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M18 6l-12 12" />
                                            <path d="M6 6l12 12" />
                                        </svg>
                                    </button>
                                @endforeach
                            </div>
                        @endif

                        <!-- Enviar Formulario -->
                        <div class="flex items-center justify-end gap-4">
                            <x-primary-button type="submit"
                                data-bs-dismiss="modal">{{ __('Guardar') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

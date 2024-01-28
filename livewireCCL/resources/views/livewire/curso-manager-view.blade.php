<div class="no-underline">

    <x-slot name="header">
        <div class="flex flex-row items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mr-3">
                {{ __('Cursos') }}
            </h2>

            <button
                class="flex flex-row justify-center items-center w-7 h-7 bg-slate-950 hover:bg-slate-700 text-white rounded-md"
                data-bs-toggle="modal" data-bs-target="#createModal">
                +
            </button>

        </div>
    </x-slot>

    <div class="sm:mx-10 mx-5 my-10 grid lg:grid-cols-3 gap-4 justify-items-center items-center">

        @php
            $cursosClone = clone $cursos;
        @endphp

        @foreach ($cursosClone as $curso)
            <livewire:curso-card :curso="$curso" :key="$curso->id" />
        @endforeach

    </div>

    <!-- Create Modal-->

    <div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createCursoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content font-figtree font-bold">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createCursoModalLabel">
                        Crear Curso
                    </h1>
                    <button
                        class="flex justify-center items-center w-6 h-6 ml-2 bg-red-600 hover:bg-red-700 text-sm text-white rounded-md"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <form wire:submit.prevent="crearCurso" class="mt-6 space-y-6">

                        <!-- titulo -->
                        <div>
                            <x-input-label for="titulo" :value="__('Título del Curso')" />
                            <x-text-input wire:model="titulo" id="titulo" name="titulo" type="text"
                                class="mt-1 block w-full" required autofocus />
                        </div>

                        <!-- categoria -->
                        <x-input-label for="createCategoria" :value="__('Categoría del Curso')" />
                        <select wire:model="categoria" id="createCategoria"
                            class="mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 rounded-md w-full shadow-sm font-medium placeholder:font-medium"
                            required>
                            <option selected disabled>Selecciona una Categoría</option>
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

                            <!-- input inicial con boton "+" -->
                            <section class="flex justify-center items-center">
                                <x-text-input wire:model="video_links.1" id="video_link_1" name="video_link_1"
                                    type="text" class="mt-1 block w-full" />
                                <button wire:click="addVideoLink" type="button"
                                    class="flex flex-row justify-center items-center w-10 h-10 ml-1 bg-gray-800 hover:bg-gray-700 text-white rounded-md">
                                    +
                                </button>
                            </section>

                            <!-- inputs nuevos aquí -->
                            @foreach ($video_links as $index => $video_link)
                                @if ($index > 1)
                                    <x-text-input wire:model="video_links.{{ $index }}"
                                        id="video_link_{{ $index }}" name="video_link_{{ $index }}"
                                        type="text" class="mt-1 block w-full" />
                                @endif
                            @endforeach
                        </div>

                        <!-- Subir Archivos -->
                        <div class="flex items-center justify-center w-full">
                            <label for="create-curso-dropzone-file"
                                class="flex flex-col items-center justify-center w-full h-40 border-2 {{ $archivos ? 'border-blue-600' : 'border-gray-300' }} border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 {{ $archivos ? 'text-blue-600' : 'text-gray-500' }} "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click para subir
                                            recurso</span> o arrastra y suelta el recurso aquí</p>
                                    <p class="text-xs text-gray-500">PDF, TXT, DOCX</p>
                                </div>
                                <input wire:model="archivos" id="create-curso-dropzone-file" type="file" multiple
                                    class="hidden" />
                            </label>
                        </div>

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

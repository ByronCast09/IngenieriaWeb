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

                <div class="flex flex-row">
                    <button data-bs-toggle="modal" data-bs-target="#editModal{{ $curso->id }}"
                        class="flex justify-center items-center w-6 h-6 ml-10 bg-slate-950 hover:bg-slate-700 text-xs text-white rounded-md">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </button>

                    <button data-bs-toggle="modal" data-bs-target="#deleteModal{{ $curso->id }}"
                        class="flex justify-center items-center w-6 h-6 ml-2 bg-red-600 hover:bg-red-700 text-sm text-white rounded-md">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>

            <p class="font-figtree text-justify text-sm leading-normal">
                {{ $curso->descripcion }}
            </p>

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
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 text-slate-700 rounded-md w-full shadow-sm font-medium placeholder:font-medium"
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

<div>

    <article class="flex flex-col justify-center bg-white w-auto h-auto rounded-lg shadow-md">

        <section class="m-6">
            <div class="flex flex-row justify-between items-center my-1">
                <h3 class="text-2xl font-figtree leading-normal">
                    {{ $curso->titulo }}
                </h3>

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

            <a href="{{ $curso->video_link }}" class="text-pretty text-xs text-blue-600">
                {{ $curso->video_link }}
            </a>
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
                    <x-primary-button type="button"
                        data-bs-dismiss="modal">{{ __('Cancelar') }}</x-primary-button>

                    <x-primary-button wire:click="eliminarCurso({{ $curso->id }})"
                        class="bg-red-500 hover:bg-red-600 active:bg-red-800 focus:bg-red-800" type="button"
                        data-bs-dismiss="modal">{{ __('Eliminar') }}</x-primary-button>
                </div>

            </div>
        </div>
    </div>

    <!-- Edit Modal-->

    <div class="modal fade" id="editModal{{ $curso->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content font-figtree font-bold">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Editar Curso: {{ $curso->titulo }}
                    </h1>
                    <button
                        class="flex justify-center items-center w-6 h-6 ml-2 bg-red-600 hover:bg-red-700 text-sm text-white rounded-md"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <form wire:submit.prevent="editarCurso({{ $curso->id }})" wire:submit.prevent="$refresh"
                        class="mt-6 space-y-6 ">
                        <div>
                            <x-input-label for="titulo" :value="__('Título del Curso')" />
                            <x-text-input wire:model="titulo" id="titulo" name="titulo" type="text"
                                class="mt-1 block w-full" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('titulo')" />
                        </div>

                        <div>
                            <x-input-label for="descripcion" :value="__('Descripción del Curso')" />
                            <textarea wire:model="descripcion" id="descripcion" name="descripcion" class="mt-1 block w-full" rows="3"
                                required></textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('descripcion')" />
                        </div>

                        <div>
                            <x-input-label for="video_link" :value="__('Enlace al Video del Curso')" />
                            <x-text-input wire:model="video_link" id="video_link" name="video_link" type="text"
                                class="mt-1 block w-full" />
                            <x-input-error class="mt-2" :messages="$errors->get('video_link')" />
                        </div>

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

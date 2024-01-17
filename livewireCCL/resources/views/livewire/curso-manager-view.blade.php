<div>

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

    <div class="sm:mx-10 mx-5 mt-10 grid lg:grid-cols-3 gap-4 justify-items-center">

        @foreach ($cursos as $curso)
            <livewire:curso-card :curso="$curso" :key="$curso->id" />
        @endforeach

    </div>

    <!-- Create Modal-->

    <div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content font-figtree font-bold">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
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

                        <!-- Subir Archivo -->
                        <div class="h-44 my-4">
                            <main class="flex items-center justify-center bg-gray-100 font-figtree">
                                <label for="dropzone-create"
                                    class="mx-auto cursor-pointer flex w-full max-w-lg flex-col items-center rounded-xl border-2 border-dashed {{ $archivo ? 'border-blue-600' : 'border-slate-300' }} bg-white p-6 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                    </svg>

                                    <h2 class="mt-4 text-xl font-bold text-slate-900 tracking-wide">Recursos</h2>

                                    <p class="mt-2 text-gray-500">
                                        Sube o arrastra tu recurso PDF, TXT o DOCX</p>

                                    <input id="dropzone-create" type="file" class="hidden" wire:model="archivo" />
                                </label>
                            </main>
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

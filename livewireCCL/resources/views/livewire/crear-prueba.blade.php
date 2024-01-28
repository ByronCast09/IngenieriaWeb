<div class="container mt-8 max-w-3xl mx-auto bg-white p-8 rounded shadow-md">

    <h1 class="text-3xl font-bold mb-6 text-primary-700">Crear Prueba</h1>

    <form wire:submit.prevent="guardarPrueba">

        <div class="mb-6">
            <label for="titulo" class="block text-gray-700 text-sm font-semibold mb-2">Título de la Prueba:</label>
            <input type="hidden" id="cursoId" wire:model="cursoId" value="{{ $cursoId }}">
            <input type="text" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-primary-700"
                id="titulo" wire:model="titulo">
            @error('titulo')
                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-4 text-primary-700">Preguntas:</h2>

            @foreach ($preguntas as $index => $pregunta)
                <div class="mb-6 border p-4 rounded-md bg-gray-100">

                    <label for="pregunta{{ $index }}"
                        class="block text-gray-700 text-sm font-semibold mb-2">Pregunta {{ $index + 1 }}:</label>
                    <input type="text"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-primary-700"
                        id="pregunta{{ $index }}" wire:model="preguntas.{{ $index }}.contenido">
                    @error("preguntas.{$index}.contenido")
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror

                    @foreach ($pregunta['respuestas'] as $respuestaIndex => $respuesta)
                        <div class="mt-2 flex items-center">
                            <input class="mr-2" type="radio" name="respuesta{{ $index }}"
                                id="respuesta{{ $index }}_{{ $respuestaIndex }}"
                                wire:model="preguntas.{{ $index }}.respuesta_seleccionada"
                                value="{{ $respuestaIndex }}">
                            <input type="text"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-primary-700"
                                wire:model="preguntas.{{ $index }}.respuestas.{{ $respuestaIndex }}.contenido">
                            @error("preguntas.{$index}.respuestas.{$respuestaIndex}.contenido")
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    @endforeach

                    <div class="flex mt-4 space-x-4">
                        
                        <x-curso-manager-button wire:click="agregarRespuesta({{ $index }})"
                            class="bg-cyan-600 hover:bg-cyan-700 focus:ring-slate-300 px-3 py-2 normal-case tracking-normal">
                            Agregar Respuesta
                        </x-curso-manager-button>

                        <x-curso-manager-button wire:click="eliminarPregunta({{ $index }})"
                            class="bg-red-700 hover:bg-red-800 focus:ring-slate-300 px-3 py-1 normal-case tracking-normal">
                            Eliminar Pregunta
                        </x-curso-manager-button>

                    </div>
                </div>
            @endforeach

            <x-curso-manager-button wire:click="agregarPregunta"
                class="bg-sky-800 hover:bg-sky-900 focus:ring-slate-300 px-4 py-2">
                Agregar Pregunta
            </x-curso-manager-button>

        </div>

        <x-curso-manager-button type="submit" class="h-10 bg-emerald-600 hover:bg-emerald-700 focus:ring-slate-300 px-4">
            Guardar Prueba
        </x-curso-manager-button>

    </form>

</div>

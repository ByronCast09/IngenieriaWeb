<div class="container mt-4">
    <h1 class="mb-4">Crear Prueba</h1>

    <form wire:submit.prevent="guardarPrueba">

        <div class="mb-3">
            <label for="titulo" class="form-label">Título de la Prueba:</label>
            <input type="hidden" id="cursoId" wire:model="cursoId" value={{ $cursoId }}>
            <input type="text" class="form-control" id="titulo" wire:model="titulo">
            @error('titulo') 
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <h2 class="mb-3">Preguntas:</h2>

            @foreach($preguntas as $index => $pregunta)
                <div class="mb-4 border p-3 rounded">

                    <label for="pregunta{{ $index }}" class="form-label">Pregunta {{ $index + 1 }}:</label>
                    <input type="text" class="form-control mb-2" id="pregunta{{ $index }}" wire:model="preguntas.{{ $index }}.contenido">
                    @error("preguntas.{$index}.contenido") 
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror

                    <button type="button" class="btn btn-secondary btn-sm mb-2" wire:click="agregarRespuesta({{ $index }})">Agregar Respuesta</button>

                    @foreach($pregunta['respuestas'] as $respuestaIndex => $respuesta)
                        <div class="mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="respuesta{{ $index }}" id="respuesta{{ $index }}_{{ $respuestaIndex }}" wire:model="preguntas.{{ $index }}.respuesta_seleccionada" value="{{ $respuestaIndex }}">
                                <label class="form-check-label" for="respuesta{{ $index }}_{{ $respuestaIndex }}">
                                    Respuesta {{ $respuestaIndex + 1 }}:
                                </label>
                                <input type="text" class="form-control ml-2" wire:model="preguntas.{{ $index }}.respuestas.{{ $respuestaIndex }}.contenido">
                                @error("preguntas.{$index}.respuestas.{$respuestaIndex}.contenido") 
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    @endforeach

                    @if(count($pregunta['respuestas']) > 0)
                        @error("preguntas.{$index}.respuesta_seleccionada") 
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    @endif

                    <button type="button" class="btn btn-danger btn-sm" wire:click="eliminarPregunta({{ $index }})">Eliminar Pregunta</button>
                </div>
            @endforeach

            <button type="button" class="btn btn-primary" wire:click="agregarPregunta">Agregar Pregunta</button>
        </div>

        <button type="submit" class="btn btn-success mt-3">Guardar Prueba</button>
    </form>
</div>

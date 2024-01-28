<div class="container mx-auto mt-8 p-6 font-inter bg-white rounded-md shadow-lg max-w-5xl w-115 sticky">
    <h1 class="text-3xl font-bold mb-6">{{ $prueba->titulo }}</h1>

    <form wire:submit.prevent="enviarRespuestas">
        @foreach($prueba->preguntas as $index => $pregunta)
            <div class="mb-8 p-6 rounded-md bg-cremaccl bg-opacity-20">
                <h3 class="text-lg font-semibold mb-4">Pregunta {{ $index + 1 }}:</h3>
                <p class="text-gray-800">{{ $pregunta->contenido }}</p>

                <ul class="space-y-2 mt-2">
                    @foreach($pregunta->respuestas as $respuesta)
                        <li>
                            <label class="flex items-center space-x-2 cursor-pointer">
                                <input wire:model.defer="respuestas.{{ $pregunta->id }}" class="form-radio text-indigo-600" type="radio" name="respuesta_{{ $pregunta->id }}" value="{{ $respuesta->id }}">
                                <span class="text-gray-800">{{ $respuesta->contenido }}</span>
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach

        <button type="submit" class="w-full h-12 bg-cremaccl text-white rounded-full font-semibold shadow-md hover:bg-hcremaccl active:bg-acremaccl">
            Enviar Respuestas
        </button>
    </form>

    @if($respuestasEnviadas)
        <div class="mt-8">
            <h2 class="text-lg font-semibold mb-4">Resultados:</h2>

            <div class="alert alert-success bg-green-100 text-green-800 border-green-200 p-4 rounded-md mb-4">
                <strong>Preguntas contestadas correctamente:</strong>
                <ul>
                    @foreach($preguntasCorrectas as $preguntaCorrecta)
                        <li>{{ $preguntaCorrecta }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="alert alert-danger bg-red-100 text-red-800 border-red-200 p-4 rounded-md">
                <strong>Preguntas contestadas incorrectamente:</strong>
                <ul>
                    @foreach($preguntasIncorrectas as $preguntaIncorrecta)
                        <li>{{ $preguntaIncorrecta }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>

<div class="container mt-4">
    <h1 class="mb-4 display-4 font-weight-bold">{{ $prueba->titulo }}</h1>

    <form wire:submit.prevent="enviarRespuestas">
        @foreach($prueba->preguntas as $pregunta)
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title">{{ $pregunta->contenido }}</h3>

                    <ul class="list-group">
                        @foreach($pregunta->respuestas as $respuesta)
                            <li class="list-group-item">
                                <div class="form-check">
                                    <input wire:model.defer="respuestas.{{ $pregunta->id }}" class="form-check-input" type="radio" name="respuesta_{{ $pregunta->id }}" value="{{ $respuesta->id }}">
                                    <label class="form-check-label">{{ $respuesta->contenido }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach

        <button type="submit" class="sm:w-44 sm:h-16 sm:mr-32 mr-3 bg-cremaccl
         text-white border-none rounded-xl font-poppins text-sm shadow-masInfo
          hover:bg-hcremaccl active:bg-acremaccl">
          Enviar Respuestas</button>
    </form>

    @if($respuestasEnviadas)
        <div class="mt-4">
            <h2 class="mb-3">Resultados:</h2>

            <div class="alert alert-success">
                <strong>Preguntas contestadas correctamente:</strong>
                <ul>
                    @foreach($preguntasCorrectas as $preguntaCorrecta)
                        <li>{{ $preguntaCorrecta }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="alert alert-danger">
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

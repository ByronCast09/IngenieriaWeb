<?php


namespace App\Livewire;

use App\Models\Prueba;
use Livewire\Component;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class CrearPrueba extends Component
{
    public $titulo;
    public $preguntas = [];

    public $cursoId; 

    public function mount($cursoId)
    {
        $this->cursoId = $cursoId;
    }


    public function render()
    {
        return view('livewire.crear-prueba');
    }

    public function agregarPregunta()
    {
        $this->preguntas[] = [
            'contenido' => '',
            'respuestas' => [['contenido' => '', 'correcta' => false]],
        ];
    }

    public function agregarRespuesta($preguntaIndex)
    {
        $this->preguntas[$preguntaIndex]['respuestas'][] = [
            'contenido' => '',
            'correcta' => false,
        ];
    }

    public function guardarPrueba()
    {
        $this->validate([
            'titulo' => 'required',
            'cursoId' => 'required',
            'preguntas.*.contenido' => 'required',
            'preguntas.*.respuestas.*.contenido' => 'required',
            'preguntas.*.respuesta_seleccionada' => 'required',
        ], [
            'preguntas.*.respuesta_seleccionada.required' => 'Selecciona al menos una respuesta para cada pregunta.',
        ]);
        
        $prueba = Prueba::create([
            'titulo' => $this->titulo,
            'curso_id' => $this->cursoId,
        ]);

        foreach ($this->preguntas as $pregunta) {
            $nuevaPregunta = $prueba->preguntas()->create([
                'contenido' => $pregunta['contenido'],
            ]);

            foreach ($pregunta['respuestas'] as $respuestaIndex => $respuesta) {
                $nuevaRespuesta = $nuevaPregunta->respuestas()->create([
                    'contenido' => $respuesta['contenido'],
                    'correcta' => $respuestaIndex == $pregunta['respuesta_seleccionada'],
                ]);
            }
        }

        // Restablecer los datos después de guardar
        $this->reset(['titulo', 'preguntas']);
        return redirect('/cursos-manager');
    }


    public function eliminarPregunta($index)
    {
        if (isset($this->preguntas[$index])) {
            // Eliminar la pregunta y sus respuestas asociadas
            unset($this->preguntas[$index]);
            // Restablecer los índices para mantener la secuencia numérica
            $this->preguntas = array_values($this->preguntas);
        }
    }
    
}
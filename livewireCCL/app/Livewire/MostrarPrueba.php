<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Prueba;
use Illuminate\Support\Facades\DB;

class MostrarPrueba extends Component
{
    public $prueba;
    public $respuestas = [];
    public $respuestasEnviadas = false;
    public $preguntasCorrectas = [];
    public $preguntasIncorrectas = [];

    public function mount($pruebaId)
    {
        $this->prueba = Prueba::with('preguntas.respuestas')->find($pruebaId);
    }

    public function render()
    {
        return view('livewire.mostrar-prueba');
    }

    public function enviarRespuestas()
    {
        // Obtener las respuestas correctas de la base de datos
        $respuestasCorrectas = DB::table('respuestas')
            ->whereIn('id', $this->getRespuestasCorrectasIds())
            ->where('correcta', true)
            ->pluck('id')
            ->toArray();

        $this->analizarRespuestas($respuestasCorrectas);

        $this->respuestasEnviadas = true;
    }

    private function getRespuestasCorrectasIds()
    {
        return array_column($this->prueba->preguntas->flatMap->respuestas->toArray(), 'id');
    }

    private function analizarRespuestas($respuestasCorrectas)
    {
        foreach ($this->respuestas as $preguntaId => $respuestaSeleccionada) {
            $mensaje = "Pregunta $preguntaId: ";
            if (in_array($respuestaSeleccionada, $respuestasCorrectas)) {
                $this->preguntasCorrectas[] = $mensaje . 'Correcta';
            } else {
                $this->preguntasIncorrectas[] = $mensaje . 'Incorrecta';
            }
        }
    }
}
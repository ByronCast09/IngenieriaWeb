<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Curso;
use Livewire\Attributes\On;

class CursoCard extends Component
{
    public $curso;
    public $titulo;
    public $descripcion;
    public $video_link;

    public function mount()
    {
        $this->titulo = $this->curso->titulo;
        $this->descripcion = $this->curso->descripcion;
        $this->video_link = $this->curso->video_link;
    }

    public function eliminarCurso($cursoId)
    {
        $curso = Curso::find($cursoId);
        if ($curso) {
            $curso->delete();
            $this->dispatch('curso-event');
        }
    }

    public function editarCurso($cursoId)
    {
        $curso = Curso::find($cursoId);
        if ($curso) {
            $curso->update([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'video_link' => $this->video_link,
            ]);
            $this->dispatch('edit-curso');
        }
    }

    #[On('edit-curso')]
    public function render()
    {
        return view('livewire.curso-card');
    }
}

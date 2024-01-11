<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Curso;
use Livewire\Attributes\On;

#[Layout('layouts.app')]
class CursoManagerView extends Component
{
    public $cursos;
    public $titulo;
    public $descripcion;
    public $video_link;

    public function crearCurso()
    {
        Curso::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'video_link' => $this->video_link,
        ]);

        $this->dispatch('curso-event');
        $this->reset(['titulo', 'descripcion', 'video_link']);
    }

    #[On('curso-event')]
    public function refrescarCursos()
    {   
        $this->cursos = Curso::all();
        
    }

    public function mount()
    {
        $this->cursos = Curso::all();
    }

    public function render()
    {
        return view('livewire.curso-manager-view');
    }
}

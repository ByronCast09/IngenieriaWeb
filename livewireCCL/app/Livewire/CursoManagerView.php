<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Curso;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class CursoManagerView extends Component
{
    use WithFileUploads;

    public $cursos;
    public $titulo;
    public $descripcion;
    public $video_link;
    public $archivo;

    public function crearCurso()
    {
        $this->validate([
            'archivo' => 'nullable|mimes:pdf,txt,docx|max:10240',
        ]);

        
        $archivoNombre = null;
        if ($this->archivo) {
            $randomId = \Illuminate\Support\Str::random(25);
            $extension = $this->archivo->extension();
            $archivoNombre = $this->archivo->storeAs('pdfs', $randomId . '.' . $extension, 'public');
            $this->archivo->delete();
        }

        Curso::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'video_link' => $this->video_link,
            'recurso_path' => $archivoNombre,
        ]);

        $this->dispatch('curso-event');
        $this->reset(['titulo', 'descripcion', 'video_link', 'archivo']);
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

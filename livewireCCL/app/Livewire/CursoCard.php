<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Curso;
use Livewire\Attributes\On;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CursoCard extends Component
{

    use WithFileUploads;

    public $curso;
    public $titulo;
    public $descripcion;
    public $video_link;
    public $archivo;

    public function mount()
    {
        $this->titulo = $this->curso->titulo;
        $this->descripcion = $this->curso->descripcion;
        $this->video_link = $this->curso->video_link;
        $this->archivo = $this->curso->pdf_path;
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
        $this->validate([
            'archivo' => 'nullable|mimes:pdf,txt,docx|max:10240',
        ]);
        
        $archivoNombre = null;
        if ($this->archivo) {
            $randomId = Str::random(25);
            $extension = $this->archivo->getClientOriginalExtension();
            $archivoNombre = $this->archivo->storeAs('pdfs', $randomId . '.' . $extension, 'public');
            $this->archivo->delete();
        }

        $curso = Curso::find($cursoId);
        if ($curso) {

            $oldFile = $curso->pdf_path;

            if ($oldFile && Storage::disk('public')->exists($oldFile)) {
                Storage::disk('public')->delete($oldFile);
            }

            $curso->update([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'video_link' => $this->video_link,
                'recurso_path' => $archivoNombre,
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

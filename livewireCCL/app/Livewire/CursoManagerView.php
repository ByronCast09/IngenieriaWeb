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
    public $categoria;
    public $archivos;
    public $video_links = ['1' => ''];
    public $hash;

    public function crearCurso()
    {
        $this->validate([
            'archivos.*' => 'nullable|mimes:pdf,txt,docx|max:10240',
            'video_links.*' => 'nullable|url',
        ]);

        $curso = Curso::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'categoria' => $this->categoria,
        ]);

        if ($this->archivos) {
            foreach ($this->archivos as $archivo) {
                $randomId = \Illuminate\Support\Str::random(25);
                $extension = $archivo->extension();
                $archivoNombre = $archivo->storeAs('resources', $randomId . '.' . $extension, 'public');
                $nombreOriginal = $archivo->getClientOriginalName();
                $hash = hash_file('sha256', $archivo->getRealPath());
                $curso->archivos()->create(['nombre' => $nombreOriginal, 'path' => $archivoNombre, 'hash' => $hash]);
            }
        }

        if ($this->video_links) {
            foreach ($this->video_links as $video_link) {
                if ($video_link) {
                    $curso->videoLinks()->create(['url' => $video_link]);
                }
            }
        }

        $this->dispatch('curso-event');
        $this->reset(['titulo', 'descripcion', 'categoria', 'video_links', 'archivos']);
    }

    public function addVideoLink()
    {
        array_push($this->video_links, '');
    }

    #[On('curso-event')]
    public function refrescarCursos()
    {
        $this->cursos = Curso::all();

    }

    public function mount()
    {
        $this->cursos = Curso::all();
        $this->categoria = 'Contabilidad';
    }

    public function render()
    {
        return view('livewire.curso-manager-view');
    }
}

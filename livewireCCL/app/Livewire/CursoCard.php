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
    public $categoria;
    public $video_links;
    public $archivos;

    public function mount()
    {
        $this->titulo = $this->curso->titulo;
        $this->descripcion = $this->curso->descripcion;
        $this->categoria = $this->curso->categoria;
        $this->video_links = $this->curso->videoLinks->pluck('url')->toArray();
    }

    public function addVideoLink()
    {
        array_push($this->video_links, '');
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
            'archivos.*' => 'nullable|mimes:pdf,txt,docx|max:10240',
            'video_links.*' => 'nullable|url',
        ]);

        $curso = Curso::find($cursoId);
        if ($curso) {

            $existingFiles = $curso->archivos->pluck('hash', 'nombre')->toArray();

            // Actualizar los datos del curso
            $curso->update([
                'titulo' => $this->titulo,
                'descripcion' => $this->descripcion,
                'categoria' => $this->categoria,
            ]);

            // Agregar los nuevos archivos
            if ($this->archivos) {
                foreach ($this->archivos as $archivo) {
                    $newFileHash = hash_file('sha256', $archivo->getRealPath());
                    if (!isset($existingFiles[$archivo->getClientOriginalName()]) || $existingFiles[$archivo->getClientOriginalName()] !== $newFileHash) {
                        $randomId = Str::random(25);
                        $extension = $archivo->extension();
                        $archivoNombre = $archivo->storeAs('resources', $randomId . '.' . $extension, 'public');
                        $nombreOriginal = $archivo->getClientOriginalName();
                        $curso->archivos()->create(['nombre' => $nombreOriginal, 'path' => $archivoNombre, 'hash' => $newFileHash]);
                    }
                }
            }

            // Obtener los enlaces de video actuales
            $currentVideoLinks = $curso->videoLinks->pluck('url')->toArray();

            // Agregar los nuevos enlaces de video
            if ($this->video_links) {
                foreach ($this->video_links as $video_link) {
                    if ($video_link && !in_array($video_link, $currentVideoLinks)) {
                        $curso->videoLinks()->create(['url' => $video_link]);
                    }
                }
            }

            // Eliminar los enlaces de video que ya no existen
            foreach ($curso->videoLinks as $videoLink) {
                if (!in_array($videoLink->url, $this->video_links)) {
                    $videoLink->delete();
                }
            }

            $this->dispatch('edit-curso');
        }
    }

    public function crearPrueba($cursoId)
    {
        return redirect()->to("/crear-prueba/{$cursoId}");
    }

    public function eliminarArchivo($archivoId)
    {
        $archivo = \App\Models\Archivo::find($archivoId);
        if ($archivo) {
            Storage::disk('public')->delete($archivo->path);
            $archivo->delete();
        }
    }

    #[On('edit-curso')]
    public function render()
    {
        return view('livewire.curso-card');
    }
}

<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;
use Alaouy\Youtube\Facades\Youtube;
use Illuminate\Support\Facades\Auth;

class CursoComponentView extends Component
{
    public $curso;
    public $cursosRelated;
    public $videoLinks;
    public $videoInfo;
    public $currentVideoIndex = 0;
    public $openedFilesCount = 0;
    public $completedTestsCount = 0;

    public function completeTest($index)
    {
        $this->completedTestsCount = min($this->completedTestsCount + 1, count($this->curso->pruebas));
        $this->updateUserProgress();
    }

    public function openFile($index)
    {
        $this->openedFilesCount = min($this->openedFilesCount + 1, count($this->curso->archivos));
        $this->updateUserProgress();
    }

    protected function updateUserProgress()
    {
        $user = Auth::user();

        if ($user) {
            $cursoUser = $user->cursos()->where('curso_id', $this->curso->id)->first();

            if ($cursoUser) {
                $totalItems = count($this->videoLinks) + count($this->curso->archivos) + count($this->curso->pruebas);
                $completedItems = $this->currentVideoIndex + 1 + $this->openedFilesCount + $this->completedTestsCount; // Contamos el video actual, los archivos abiertos y las pruebas completadas como completados

                $progress = ($completedItems / $totalItems) * 100;

                if ($progress > $cursoUser->pivot->progreso) {
                    $user->cursos()->updateExistingPivot($this->curso->id, ['progreso' => $progress]);
                }
            }
        }
    }

    public function toggleCompletion()
    {
        if (auth()->user()) {
            $cursoUser = auth()->user()->cursos()->where('curso_id', $this->curso->id)->first();
            if ($cursoUser) {
                $completado = $cursoUser->pivot->completado;
                $progreso = $completado ? 0 : 100;
                $completado = !$completado;
                auth()->user()->cursos()->updateExistingPivot($this->curso->id, ['progreso' => $progreso, 'completado' => $completado]);
            }
        }
    }

    public function cancelarInscripcion($cursoId)
    {
        if (auth()->user()) {
            auth()->user()->cursos()->detach($cursoId);
            return redirect()->route('cursos');
        }
    }

    public function mount($id)
    {
        $this->curso = Curso::find($id);

        $this->cursosRelated = Curso::where('categoria', $this->curso->categoria)
            ->where('id', '!=', $this->curso->id)->get();

        foreach ($this->cursosRelated as $curso) {
            $curso->href = route('curso.view', ['id' => $curso->id]);
        }

        $this->videoLinks = $this->curso->videoLinks->pluck('url')->toArray();

        $this->videoInfo = [];
        foreach ($this->videoLinks as $videolink) {
            $videoId = Youtube::parseVidFromURL($videolink);
            $this->videoInfo[] = Youtube::getVideoInfo($videoId);
        }
        $this->updateUserProgress();
    }

    public function selectVideo($index)
    {
        if ($index >= 0 && $index < count($this->videoLinks)) {
            $this->currentVideoIndex = $index;
            $this->updateUserProgress();
        }
    }

    public function render()
    {
        return view('livewire.curso-component-view');
    }
}

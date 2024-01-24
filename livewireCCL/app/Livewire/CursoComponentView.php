<?php

namespace App\Livewire;

use App\Models\Curso;
use Livewire\Component;
use Alaouy\Youtube\Facades\Youtube;

class CursoComponentView extends Component
{
    public $curso;
    public $cursosRelated;
    public $videoLinks;
    public $videoInfo;
    public $currentVideoIndex = 0;

    public function mount($id)
    {
        $this->curso = Curso::find($id);

        $this->cursosRelated = Curso::where('categoria', $this->curso->categoria)
            ->where('id', '!=', $this->curso->id)->get();
        $this->videoLinks = $this->curso->videoLinks->pluck('url')->toArray();

        $this->videoInfo = [];
        foreach ($this->videoLinks as $videolink) {
            $videoId = Youtube::parseVidFromURL($videolink);
            $this->videoInfo[] = Youtube::getVideoInfo($videoId);
        }
    }

    public function nextVideo()
    {
        if ($this->currentVideoIndex < count($this->videoLinks) - 1) {
            $this->currentVideoIndex++;
        } else {
            $this->currentVideoIndex = 0; 
        }
    }

    public function previousVideo()
    {
        if ($this->currentVideoIndex > 0) {
            $this->currentVideoIndex--;
        } else {
            $this->currentVideoIndex = count($this->videoLinks) - 1; 
        }
    }

    public function render()
    {
        return view('livewire.curso-component-view');
    }
}

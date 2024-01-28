<?php

namespace App\Livewire;

use Livewire\Component;
use Alaouy\Youtube\Facades\Youtube;

class CursoCategoryComponent extends Component
{
    public $curso;
    public $titulo;
    public $href;
    public $videoInfo = [];

    public function mount($curso)
    {
        $this->curso = $curso;
        $this->titulo = $curso->titulo;
        $videolink = $this->curso->videoLinks->pluck('url')->first();
        $videoId = Youtube::parseVidFromURL($videolink);
        $videoInfo = Youtube::getVideoInfo($videoId);
        if (!empty($videoInfo) && $videoInfo !== false) {
            $this->videoInfo = [
                'info' => $videoInfo,
                'thumbnail' => $videoInfo->snippet->thumbnails->medium->url
            ];
        }
        
    }

    public function render()
    {
        return view('livewire.curso-category-component');
    }
}

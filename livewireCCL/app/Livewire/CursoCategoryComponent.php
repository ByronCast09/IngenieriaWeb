<?php

namespace App\Livewire;

use Livewire\Component;
use App\Support\YoutubeVideo;

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
        if (!$videolink) {
            return;
        }

        $videoInfo = YoutubeVideo::info($videolink);
        if (!empty($videoInfo)) {
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

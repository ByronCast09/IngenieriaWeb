<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Curso;

class CursosView extends Component
{
    public $cursos;

    public function mount()
    {
        $this->cursos = Curso::all();
    }

    public function render()
    {
        return view('livewire.cursos-view');
    }
}

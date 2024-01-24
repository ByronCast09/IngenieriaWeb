<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Curso;

class CursosView extends Component
{
    public $cursos;
    public $search = '';

    public function mount()
    {
        $this->cursos = Curso::all();
    }

    public function updatingSearch($value)
    {
        $this->cursos = Curso::where('titulo', 'like', '%' . $value . '%')->get();
    }

    public function render()
    {
        return view('livewire.cursos-view');
    }
}
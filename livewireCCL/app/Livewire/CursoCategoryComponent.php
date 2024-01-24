<?php

namespace App\Livewire;

use Livewire\Component;

class CursoCategoryComponent extends Component
{
    public $curso;
    public $titulo;

    
    public function mount($curso)
    {
        $this->curso = $curso;
        $this->titulo = $curso->titulo;
    }
    
    public function render()
    {
        return view('livewire.curso-category-component');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Curso;

class CursosView extends Component
{
    public $cursos;
    public $search = '';
    public $cursosNoInscritos;

    public function inscribirse($cursoId)
    {
        $curso = Curso::find($cursoId);

        // Asegúrate de que el curso existe y de que el usuario está autenticado
        if ($curso && auth()->user()) {
            // Añade el curso a la lista de cursos del usuario
            auth()->user()->cursos()->attach($cursoId);
        }
    }

    public function mount()
    {
        if (auth()->user()) {
            $this->cursos = auth()->user()->cursos;
            $this->cursosNoInscritos = Curso::all()->diff($this->cursos);
        } else {
            $this->cursos = Curso::all();
        }
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
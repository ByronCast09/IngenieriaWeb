<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;


class BeneficiosView extends Component
{
    
    //#[Layout('components.layouts.layout')]
    public function render()
    {
        return view('livewire.beneficios-view');
        
    }
}

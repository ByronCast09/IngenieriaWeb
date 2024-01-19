<?php

namespace App\Livewire;

use Livewire\Component;

class ManchaTop extends Component
{
    public function render()
    {
        return <<<'HTML'

        <div class="absolute top-0 right-0 z-0">
            <img class="animate-fade" src="{{ asset('images/decore1.webp') }}" />
        </div>
        
        HTML;
    }
}

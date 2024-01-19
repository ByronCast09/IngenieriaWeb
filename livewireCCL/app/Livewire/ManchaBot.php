<?php

namespace App\Livewire;

use Livewire\Component;

class ManchaBot extends Component
{
    public function render()
    {
        return <<<'HTML'

        <div class="relative">
            <img class="absolute right-0 bottom-0 z-0" src="{{ asset('images/decore3.webp') }}" />
        </div>
        
        HTML;
    }
}

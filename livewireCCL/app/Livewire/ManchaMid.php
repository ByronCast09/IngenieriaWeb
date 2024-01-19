<?php

namespace App\Livewire;

use Livewire\Component;

class ManchaMid extends Component
{
    public function render()
    {
        return <<<'HTML'

        <div class="mt-36 z-0 absolute">
            <img class="" src="{{ asset('images/decore2.webp') }}" />
        </div>

        HTML;
    }
}

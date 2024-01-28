<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class ProgressBar extends Component
{
    #[Reactive]
    public $progress;

    public function render()
    {
        return view('livewire.progress-bar');
    }
}

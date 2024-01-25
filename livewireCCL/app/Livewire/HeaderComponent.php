<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class HeaderComponent extends Component
{
    public function render()
    {
        return view('livewire.header-component');
    }

    public function backHome()
    {
        return redirect()->to('/');
    }

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}

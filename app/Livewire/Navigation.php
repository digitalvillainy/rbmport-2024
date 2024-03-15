<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Navigation extends Component
{
    public bool $active = false;

    public bool $current;

    // Content created in alpine
    public function userSelected(): void
    {
    }

    public function render(): View
    {
        return view('livewire.navigation');
    }
}

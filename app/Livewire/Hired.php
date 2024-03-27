<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Lazy;
use Livewire\Component;

class Hired extends Component
{
    public function render(): View
    {
        return view('livewire.hired');
    }
}

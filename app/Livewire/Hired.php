<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Hired A Full Stack Developer | Red Banner Media, LLC Can build Your Website')]
class Hired extends Component
{
    public function render(): View
    {
        return view('livewire.hired');
    }
}

<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use \Illuminate\View\View;

#[Title('Home | Red Banner Media, LLC Can build Your Website')]
class Home extends Component
{
    public function render(): View
    {
        return view('livewire.home');
    }
}

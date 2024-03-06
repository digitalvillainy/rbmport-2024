<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact Us | Red Banner Media, LLC Can build Your Website')]
class Contact extends Component
{
    public function render(): View
    {
        return view('livewire.contact');
    }
}

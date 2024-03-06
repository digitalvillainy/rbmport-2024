<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Blog | Red Banner Media, LLC Can build Your Website')]
class Blog extends Component
{
    public function render(): View
    {
        return view('livewire.blog');
    }
}

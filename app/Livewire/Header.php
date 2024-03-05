<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Header extends Component
{
    public string $color;

    public function mount()
    {
        $path = Route::current()->uri;
        $this->color = [
            '/' => '#FFCC00',
            'hire-a-dev' => '#AA0000',
            'contact' => '#662E8D',
            'blog' => 'white'
        ][$path];
    }

    public function render(): View
    {
        return view('livewire.header', [
            'headerColor' => $this->color
        ]);
    }
}

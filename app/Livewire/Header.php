<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Header extends Component
{
    public string $path;
    public string $locationTitle;

    public array $banner;


    public function mount(): void
    {
        $this->path = Route::current()->uri;
        $title = str_contains($this->path, '/') ? 'build-a-site' : $this->path;
        $this->locationTitle = strtoupper(str_replace('-', ' ', $title));
    }


    public function render(): View
    {
        return view('livewire.header', [
            'path' => $this->path,
            'title' => $this->locationTitle
        ]);
    }
}

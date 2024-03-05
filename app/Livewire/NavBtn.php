<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class NavBtn extends Component
{
    public string $title;
    public string $routeToCurrent;
    public string $btnName;

    public bool $active;
    public string $color;
    public string $path;
    public function mount(): void
    {
        $this->routeToCurrent = str_contains($this->title, 'build-a-site') ? '/' : "/{$this->title}";
        $this->path = Route::current()->uri;
        $this->active = $this->path === $this->title || $this->path === $this->routeToCurrent;
        $this->btnName = ucwords(str_replace('-', ' ', $this->title));
    }

    public function render(): View
    {
        return view('livewire.nav-btn', [
            'routeHref' => $this->routeToCurrent,
            'active' => $this->active,
            'btnName' => $this->btnName,
            'current' =>  $this->path
        ]);
    }
}

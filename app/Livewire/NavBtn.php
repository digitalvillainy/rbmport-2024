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

    public function mount(): void
    {
        $this->routeToCurrent = str_contains($this->title, 'build-a-site') ? '/' : "/{$this->title}";
        $path = Route::current()->uri;
        $this->active = $path === $this->title || $path === $this->routeToCurrent;
        $this->btnName = ucwords(str_replace('-', ' ', $this->title));
        $this->color = [
            '/' => '#FFCC00',
            'hire-a-dev' => '#AA0000',
            'contact' => '#662E8D',
            'blog' => '#ffffff'
        ][$path];
    }

    public function render(): View
    {
        return view('livewire.nav-btn', [
            'routeHref' => $this->routeToCurrent,
            'active' => $this->active,
            'btnName' => $this->btnName,
            'color' => $this->color
        ]);
    }
}

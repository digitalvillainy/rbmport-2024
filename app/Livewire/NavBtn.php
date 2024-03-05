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
            '/' => 'bg-[#21222D] rounded-xl border-2 border-[#FFCC00] shadow-2xl',
            'hire-a-dev' => 'bg-[#21222D] rounded-xl border-2 border-[#AA0000] shadow-2xl',
            'contact' => 'bg-[#21222D] rounded-xl border-2 border-[#662E8D] shadow-2xl',
            'blog' => 'bg-[#21222D] rounded-xl border-2 border-white shadow-2xl'
        ][$path];
    }

    public function render(): View
    {
        return view('livewire.nav-btn', [
            'routeHref' => $this->routeToCurrent,
            'active' => $this->active,
            'btnName' => $this->btnName,
            'current' => $this->color
        ]);
    }
}

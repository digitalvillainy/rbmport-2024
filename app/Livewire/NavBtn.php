<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class NavBtn extends Component
{
    public string $title;
    public string $routeHref;
    public string $btnName;

    public bool $active;

    public string $path;
    public function mount(): void
    {
        /*
         * TODO: /hired should be going to href=#hired
         * TODO: /contact should be going to href=#faq
         *
         * */
//        $current = str_contains($this->title, 'build-a-site') ? '/' : "/{$this->title}";
        $this->path = Route::current()->uri;
//        $this->active = $this->path === $this->title || $this->path === $current;
        $this->btnName = ucwords(str_replace('-', ' ', $this->title));
    }

    public function render(): View
    {
        return view('livewire.nav-btn');
    }
}

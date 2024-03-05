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

    #[Computed(persist: true, cache: true)]
    public function bannerContent(string $current): array
    {
        return [
            '/' => [
                'title' => 'WE MAKE WEBSITES',
                'msg' => 'Whether that’s building from scratch or augmenting your current team.'
            ],
            'hire-a-dev' => [
                'title' => 'WE CAN AUGMENT YOUR TEAM',
                'msg' => 'Does your project need a boost? Hire one of our developers.'
            ],
            'contact' => [
                'title' => 'CONTACT US TODAY',
                'msg' => 'Have a question about our services or have a special request?'
            ],
            'blog' => [
                'title' => 'EDUCATION ON WEB TECHNOLOGIES',
                'msg' => 'Articles about web technologies and how they can help your business.'
            ],
        ][$current];
    }

    public function mount(): void
    {
        $this->path = Route::current()->uri;
        $title = str_contains($this->path, '/') ? 'build-a-site' : $this->path;
        $this->locationTitle = strtoupper(str_replace('-', ' ', $title));
        $this->banner = $this->bannerContent($this->path);
    }


    public function render(): View
    {
        return view('livewire.header', [
            'path' => $this->path,
            'title' => $this->locationTitle,
            'banner'=> $this->banner
        ]);
    }
}

<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Livewire\Component;

//TODO: Add MailChimp newsletter Functionality
class Footer extends Component
{
    public string $now;

    public function mount()
    {
        $this->now = Carbon::now()->year;
    }

    public function render(): View
    {
        return view('livewire.footer',[
            'year'=>$this->now
        ]);
    }
}

<?php

namespace App\Livewire;

use App\Http\Controllers\ClientMailController;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Contact extends Component
{
    #[Validate('required|email')]
    public string $email;

    #[Validate('required|max:1000')]
    public string $content;

    public function contact(): void
    {
        $this->validate();

        $result = (New ClientMailController)->sendClientMail(
            'Client inquiry from:' . $this->email,
            $this->content
        );
       ddd($result);
    }

    public function render(): View
    {
        return view('livewire.contact');
    }
}

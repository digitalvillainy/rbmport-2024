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

    #[Validate('required')]
    public string $content;

    public function contact(): string|array
    {
        $this->validate();

        try {
            (new ClientMailController)->sendClientMail(
                'Client inquiry from: ' . $this->email,
                $this->content
            );

            return ['contact', 'Succeeded in taking message'];
        } catch (\Exception $e) {
            return ['contact', 'Failed to send message, please try again later.'];
        }

    }

    public function render(): View
    {
        return view('livewire.contact');
    }
}

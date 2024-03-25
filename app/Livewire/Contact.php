<?php

namespace App\Livewire;

use App\Http\Controllers\ClientMailController;
use App\Services\Newsletter;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Contact extends Component
{
    #[Validate('required|email')]
    public string $email;

    #[Validate('required')]
    public string $content;
    public bool $show = false;
    protected $listeners = ['likeUpdated', 'subscribed'];

    public function toggleDispatch(string $mode, bool $show): void
    {
        $this->dispatch(
            'subscribed',
            mode: $mode,
            show: $show,
            toastType: 'email'
        );
    }

    public function likeUpdated(): void
    {
        $this->toggleDispatch('error', false);
        $this->resetErrorBag();
    }

    public function contact(): void
    {
        $this->validate();

        try {
            (new ClientMailController)->sendClientMail(
                'Client inquiry from: ' . $this->email,
                $this->content
            );
            $this->toggleDispatch('success', true);
            $this->email = '';
            $this->content = '';
        } catch (\Exception $e) {
            $this->toggleDispatch('error', true);
            $this->addError('contact', 'Failed to send message, please try again later.');
        }

    }

    public function render(): View
    {
        return view('livewire.contact');
    }
}

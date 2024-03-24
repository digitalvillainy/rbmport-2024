<?php

namespace App\Livewire;

use App\Services\MailChimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Footer extends Component
{
    public string $now;
    #[Validate('email')]
    public string $email;
    public bool $show = false;
    public string $mode = 'error';
    public string $toastType = 'newsletter';

    public function save(Newsletter $newsletter): void
    {
        $this->validate();

        $test = $newsletter->isEmailUnique($this->email);

        if(!$test){
            $this->dispatch(
                'subscribed',
                mode: 'warning',
                show: true,
                toastType: 'newsletter'
            );
            throw ValidationException::withMessages(['email' => 'This email has already registered with our newsletter.']);
        } else {
            try {
                $newsletter->subscribe($this->email);
                $this->email = ''; // Clear email field after $newsletter subscription

                $this->dispatch(
                    'subscribed',
                    mode: 'success',
                    show: true,
                    toastType: 'newsletter'
                );
            } catch (\Exception $e) {
                $this->dispatch(
                    'subscribed',
                    mode: 'errors',
                    show: true,
                    toastType: 'newsletter'
                );
                throw ValidationException::withMessages(['email' => 'This email could not be added to our newsletter list.']);
            }
        }
    }

    public function mount(): void
    {
        $this->now = Carbon::now()->year;
    }

    public function render(): View
    {
        return view('livewire.footer', [
            'year' => $this->now
        ]);
    }
}

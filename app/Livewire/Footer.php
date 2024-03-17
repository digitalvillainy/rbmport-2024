<?php

namespace App\Livewire;

use App\Services\Newsletter;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Footer extends Component
{
    public string $now;
    public string $email;

    public function save(Newsletter $newsletter): void
    {
        try {
            $newsletter->subscribe($this->email);
            $this->email = ''; // Clear email field after $newsletter subscription
        } catch (\Exception $e) {
            throw ValidationException::withMessages(['email' => 'This email could not be added to our newsletter list.']);
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

<?php

namespace App\Livewire;

use App\Services\Newsletter;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Footer extends Component
{
    public string $now;
    public string $email;
    public bool $show = false;
    protected $listeners = ['likeUpdated', 'subscribed'];

    public function toggleDispatch(string $mode, bool $show): void
    {
        $this->dispatch(
            'subscribed',
            mode: $mode,
            show: $show,
            toastType: 'newsletter'
        );
    }

    public function likeUpdated(): void
    {
        $this->toggleDispatch('error', false);
        $this->resetErrorBag();
    }

    public function save(Newsletter $newsletter): void
    {
        if ($newsletter->isEmailUnique($this->email)) {
            $this->toggleDispatch('error', true);
        } else {
            try {
                $newsletter->subscribe($this->email);
                $this->reset('email');
                $this->toggleDispatch('success', true);
            } catch (\Exception $e) {
                $this->toggleDispatch('error', true);
                $this->addError('email', 'This email could not be added to our newsletter list.');
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

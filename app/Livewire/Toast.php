<?php

namespace App\Livewire;

use App\Enum\Status;
use Livewire\Attributes\Computed;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Toast extends Component
{
    public string $mode;
    public bool $show = false;

    public string $toastType;
    public string $title = '';
    public string $msg = '';
    protected Status $status;

    #[On('subscribed')]
    public function reveal(string $mode, string $show, string $toastType): void
    {
        $this->mode = $mode;
        $this->show = $show;
        $this->status = $this->setMode($mode);
        $this->title = $this->setTitle();
        $this->msg = $this->setMsg();
        $this->toastType = $toastType;
    }

    public function toggleShow(): void
    {
        $this->dispatch('likeUpdated');
    }

    public function setMode(string $mode): Status
    {
        return match ($mode) {
            'success' => Status::SUCCESS,
            'warning' => Status::WARNING,
            'error' => Status::ERROR,
        };
    }

    public function setTitle(): string
    {
        return $this->status->statusTitle();
    }

    public function setMsg(): string
    {
        return match ($this->toastType) {
            'newsletter' => $this->status->setNewsLetterMsg(),
            'email' => $this->status->setEmailMsg(),
        };
    }

    public function render(): view
    {
        return view('livewire.toast');
    }
}

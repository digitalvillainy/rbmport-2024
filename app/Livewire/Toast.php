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
    public string $color;
    public string $title = '';
    public string $msg = '';
    protected Status $status;

    //TODO: Fix issue with dynamic changing of colors
    #[On('subscribed')]
    public function reveal(string $mode, string $show, string $toastType): void
    {
        $this->status = $this->setMode($mode);
        $this->show = $show;
        $this->title = $this->setTitle();
        $this->msg = $this->setMsg();
        $this->color = $this->setColor();
        $this->toastType = $toastType;
    }

    public function setMode(string $mode): Status
    {
        return match ($mode) {
            'success' => Status::SUCCESS,
            'warning' => Status::WARNING,
            'error' => Status::ERROR,
        };
    }

    public function setColor(): string
    {
        return $this->status->color();
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

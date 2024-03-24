<?php

namespace App\Enum;

enum Status
{
    case SUCCESS;
    case WARNING;
    case ERROR;

    public function color(): string
    {
        return match ($this) {
            Status::SUCCESS => 'bg-green-800',
            Status::WARNING => 'bg-yellow-400',
            Status::ERROR => 'bg-red-700',
        };
    }

    public function statusTitle(): string
    {
        return match ($this) {
            Status::SUCCESS => 'Success',
            Status::WARNING => 'Warning',
            Status::ERROR => 'Error',
        };
    }

    public function setNewsLetterMsg(): string
    {
        return match ($this) {
            Status::SUCCESS => 'Congrats! You have subscribed!',
            Status::WARNING => 'This email has already subscribed',
            Status::ERROR => 'Please review the on-screen errors.',
        };
    }

    public function setEmailMsg(): string
    {
        return match ($this) {
            Status::SUCCESS => 'Thank you for your message. We will be with you soon.',
            Status::WARNING => 'A message has already been sent. We will be with you soon.',
            Status::ERROR => 'Please review the on-screen errors.',
        };
    }
}

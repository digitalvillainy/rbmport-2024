<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Livewire\Component;
use MailchimpMarketing\ApiClient;

//TODO: Add MailChimp newsletter Functionality
class Footer extends Component
{
    public string $now;

    public function save(): void
    {
        //Example
        $mailchimp = new ApiClient();
        $mailchimp->setConfig([
           'apiKey' =>  env('MAILCHIMP_KEY'),
           'server' => env('MAILCHIMP_SERVER_PREFIX')
        ]);

        $response = $mailchimp->ping->get();
        ddd($response);
    }
    public function mount(): void
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

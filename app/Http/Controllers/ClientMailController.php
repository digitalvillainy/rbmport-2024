<?php

namespace App\Http\Controllers;

use App\Mail\ClientMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ClientMailController extends Controller
{
    public function sendClientMail(string $title, string $body): string
    {
        Mail::to('rrivera@redbannermedia.com')->send(new ClientMail($title, $body));

        return 'Email Sent Successfully';
    }
}

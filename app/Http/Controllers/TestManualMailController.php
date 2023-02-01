<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestManualMailController extends Controller
{
    public function index()
    {
        $details = [
            'title' => 'Details title test manual email',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('ujangsoleh789@gmail.com')->send(new \App\Mail\TestManualMail($details));

        dd("Email sudah terkirim.");
    }
}

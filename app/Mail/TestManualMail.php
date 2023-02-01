<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestManualMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        // Menginisialisasi objek yang digunakan pada template email
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /* 
            Mengatur struktur email yang lebih spesifik seperti melakukan konfigurasi pengirim email, menampilkan template email dan menambahkan attachment
        */
        return $this->subject('Subject Testing Email Ali')
                    ->view('emails.test_manual_mail');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *`
     * @return $this
     */
    public function build()
    {
        return $this->subject('Se ha recibido una respuesta del Test de Inteligencia Relacional (TIR)')
            ->view('mails.request_sent');
    }
}

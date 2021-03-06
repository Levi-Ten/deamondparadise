<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $credentials;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->credentials;
        return $this->from($data['email'])
        ->subject('Запись клиентов')
        ->markdown('emails.contactUs')
        ->with([
            'subject' => $data['subject'],
            'name' => $data['name'],
            'email' => $data['email'],
            'teleph'=>$data['teleph'],
        ]);
    }
}

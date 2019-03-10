<?php

namespace App\Mail;

use App\Buchung;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class BuchungEmails extends Mailable
{ 
    use Queueable, SerializesModels;
     
     public $data;
     public $user;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $user = User::find(auth()->id());
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->markdown('Mails/buchung');
    }
}

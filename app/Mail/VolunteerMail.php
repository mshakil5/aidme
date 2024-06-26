<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VolunteerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $array;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($array)
     {
         $this->array = $array;
     }


     
   
    public function build()
    {
        return $this->from('do-not-reply@aidmeuk.com', 'Aidme')
                    ->subject($this->array['subject'])
                    ->markdown('emails.volunteer');
    }
}

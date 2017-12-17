<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\models\Transfers;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de contact
     * @var array
     */
    public $contact; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Transfers $c)
    {
        //
        $this->contact = $c;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('d.leger@aformac-vichy.fr')->view('email');
    }
}

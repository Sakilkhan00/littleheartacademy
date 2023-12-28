<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SampleResponseMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->data = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $config = CstmConfig();
        $from_email = $config['contact_email'];
       
        $title = 'Little Heart Academy';

        return $this->view('mail.SampleResponseMail')
                    ->from($from_email,$title)
                    ->subject('Response Mail from Little Heart Academy')
                    ->with('user_list',$this->data);
    }
}

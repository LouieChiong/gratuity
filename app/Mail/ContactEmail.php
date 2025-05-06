<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Inquiry Message')
            ->from('info@gratuityglobal.org')
            ->view('mail.contact', [
                'fullname' => $this->data['name'],
                'email' => $this->data['email'],
                'content' => $this->data['message'],
                'contact' => $this->data['contact_number'],
            ]);
    }
}

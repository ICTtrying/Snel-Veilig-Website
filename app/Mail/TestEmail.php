<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use MailerSend\LaravelDriver\MailerSendTrait;
use MailerSend\Helpers\Builder\Personalization;
use Illuminate\Support\Arr;

class TestEmail extends Mailable
{
    use MailerSendTrait, Queueable, SerializesModels;

    public $data; // belangrijk: maak $data public zodat de blade het kan gebruiken

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $to = Arr::get($this->to, '0.address');

        return $this
            ->from('verified@jouwdomein.com', 'Snel & Veilig') // hier from instellen
            ->subject('Nieuw contactbericht')
            ->view('layout.email')
            ->mailersend(
                template_id: null,
                tags: ['contact-form'],
                personalization: [
                    new Personalization($to, [
                        'naam' => $this->data['naam'],
                        'email' => $this->data['email'],
                        'telefoon' => $this->data['telefoon'] ?? '',
                        'bericht' => $this->data['bericht'] ?? '',
                    ])
                ]
            );
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Reserva;

class ReservaCancelMail extends Mailable
{
    use Queueable, SerializesModels;

    public $reserva;
    public $msj;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reserva $reserva, $msj)
    {
        $this->reserva = $reserva;
        $this->msj = $msj;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.reserva_cancel_mail')
                ->from('lsuarez@dirprov.scu.sld.cu', 'Liusvani')
                ->subject('Correo de Información');
    }
}

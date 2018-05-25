<?php

namespace App\Mail;
use App\Usuario;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class verificaCorreoToken extends Mailable
{
    use Queueable, SerializesModels;
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario->toArray();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->markdown('email.verificar')->with(['usuario', $this->usuario]);
    }
}

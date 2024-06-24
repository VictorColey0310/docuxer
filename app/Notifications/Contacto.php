<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Contacto extends Notification
{
    use Queueable;
    protected $nombre;
    protected $telefono;
    protected $email;
    protected $descripcion;
    protected $empresa;
    protected $asunto;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email, $nombre, $descripcion, $telefono, $empresa, $asunto)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->telefono = $telefono;
        $this->empresa = $empresa;
        $this->asunto = $asunto;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('"' . $this->asunto . '."')
            ->greeting('¡Hola')
            ->line('El usuario ' . $this->nombre . ' de la empresa ' . $this->empresa . '(' . $this->email . '), ha dejado un mensaje:')
            ->line('"' . $this->descripcion . '."')
            ->line('Su numero de contacto es ' . $this->telefono);
        //->action('Ver solicitud', url('/solicitudes'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

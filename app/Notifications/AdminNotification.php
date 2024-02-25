<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminNotification extends Notification
{
    use Queueable;

      protected $name,$email,$message;

    /**
     * Create a new notification instance.
     */
    public function __construct($name,$email,$message)
    {
        $this->name=$name;
        $this->email=$email;
        $this->message=$message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                     ->subject('Nouveau message')
                    ->greeting('Le visiteur '.$this->name.' vous a laisser un message')
                    ->line($this->message)
                    ->line('Email: '.$this->email);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

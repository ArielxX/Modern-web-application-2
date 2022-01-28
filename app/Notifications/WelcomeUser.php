<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Spatie\Health\Notifications\Notifiable;

class WelcomeUser extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hello and welcome '.$notifiable->name)
            ->line('Thank you for join to my blog. Here everybody can publish any post. So do not miss your opportunity to share everything that goes through your head ')
            ->action('Here you can see the current posts', route('welcome'))
            ->line('Thank you for using our application!')
            ->salutation('Greetings');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

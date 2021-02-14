<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CheckupAlert extends Notification
{
    use Queueable;
    private $noti_text;


    public function __construct($noti_text)
    {
        $this->noti_text = $noti_text;
    }


    public function via($notifiable)
    {
        return ['database'];
        // return ['database', 'broadcast', 'mail];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        $msg = "'<b>" . $this->noti_text . "</b>'";
        return [
            'message' => $msg,
            // 'admin' => $notifiable,
        ];
    }

    public function toDatabase($notifiable)
    {
        $msg = "'<b>" . $this->noti_text . "</b>'";
        return [
            'message' => $msg,
            // 'admin' => $notifiable,
        ];
    }

    public function toBroadcast($notifiable)
    {
        $msg = "'<b>" . $this->noti_text . "</b>'";
        return [
            'message' => $msg,
            // 'admin' => $notifiable,
        ];
    }
}

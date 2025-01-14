<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class VerifyEmailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public  $user;
    public  $verifyEmailUrl;
    public function __construct($user)
    {
        $this->user = $user;
        $this->verifyEmailUrl = URL::temporarySignedRoute(
            'verifyAccount',
            Carbon::now()->addMinutes(5),
            ['user'=>$this->user->id]
        );
    }


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Xác thực tài khoản tại Toganic ')
                    ->view('Mails.VerifyAccount',[
                        'user'=>$this->user,
                        'verifyEmailUrl'=>$this->verifyEmailUrl
                    ]);
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

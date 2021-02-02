<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class ContactForm extends Notification
{
    use Queueable;
   public $name;
   public $phoneno;
   public $email;
   public $company;
   public $services;
   public $budget;
   public $message;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name,$phoneno,$email,$company,$services,$budget,$message)
    {
        $this->name=$name;
        $this->phoneno=$phoneno;
        $this->email=$email;
        $this->company=$company;
        $this->services=$services;
        $this->budget=$budget;
        $this->message=$message;
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
                    ->subject('Contact Form Submission - Nyx Wolves')
                    ->line(new HtmlString("<strong> Name  : </strong> {$this->name}"))
                    ->line(new HtmlString("<strong> Phone No : </strong> {$this->phoneno}"))
                    ->line(new HtmlString("<strong> Email  :</strong> {$this->email}"))
                    ->line(new HtmlString("<strong> Company : </strong> {$this->company}"))
                    ->line(new HtmlString("<strong> Services :</strong> {$this->services}"))
                    ->line(new HtmlString("<strong> Budget : </strong> {$this->budget}"))
                    ->line(new HtmlString("<strong> Message : </strong> {$this->message}"));
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

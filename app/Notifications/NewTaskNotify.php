<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewTaskNotify extends Notification
{
    use Queueable;
    public $task;
    public $user;
    public $type;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($task, $user, $type = 'me')
    {
        $this->task=$task;
        $this->type=$type;
        $this->user=$user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if ($this->type == 'assign') {
            return (new MailMessage)
                    ->line('Task Assigned.')
                    ->action('Notification Action', url('/'))
                    ->line('Task has been assigned to you.!');
        } else {
            return (new MailMessage)
                    ->line('New Task.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
        }
    }
    public function toDatabase($notifiable)
    {
        if ($this->type == 'assign') {
            return [
            'heading' => 'Task Assigned',
            'body' => 'Task has been assigned to you.',
            'url' => route('company.user_biddings', $this->user),
            'user' => $this->user,
            'type' => 'task-notification'
            ];
        } else {
            return [
            'heading' => 'New Task',
            'body' => 'New task has been posted',
            'url' => route('company.user_biddings', $this->user),
            'user' => $this->user,
            'type' => 'task-notification'
        ];
        }
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

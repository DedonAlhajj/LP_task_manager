<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TaskUpdatedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $task;

    public function __construct($task)
    {
        $this->task = $task;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('تم تحديث مهمة')
            ->line('تم تحديث مهمة مرتبطة بك: ' . $this->task->name)
            ->action('عرض المهمة', url('/tasks/' . $this->task->id))
            ->line('شكراً لاستخدامك تطبيقنا!');
    }

    public function toArray($notifiable)
    {
        return [
            'task_id' => $this->task->id,
            'task_name' => $this->task->name,
            'message' => 'تم تحديث مهمة مرتبطة بك.',
        ];
    }
}


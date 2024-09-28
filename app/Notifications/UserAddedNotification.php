<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class UserAddedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $project;

    public function __construct($project)
    {
        $this->project = $project;
    }

    public function via($notifiable)
    {
        return ['mail', 'database']; // يمكنك استخدام in-app أو mail حسب الحاجة
    }

    public function toMail($notifiable)
    {
        return (new \Illuminate\Notifications\Messages\MailMessage)
            ->subject('تم إضافتك إلى مشروع جديد')
            ->greeting('مرحباً ' . $notifiable->name)
            ->line('تم إضافتك إلى المشروع: ' . $this->project->name)
            ->action('عرض دعوات المشاريع', url('/myProjects'))
            ->line('يمكنك الآن رؤية الدعوات وقبولها.');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'تم إضافتك إلى المشروع: ' . $this->project->name,
            'project_id' => $this->project->id,
            'url' => url('/myProjects'),
        ];
    }
}

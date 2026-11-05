<?php

declare(strict_types=1);

namespace App\Notifications;

use App\Models\QuoteRequest;
use App\Support\TileServices;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewQuoteRequestReceived extends Notification
{
    use Queueable;

    public function __construct(private readonly QuoteRequest $quoteRequest) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $service = $this->quoteRequest->service_slug
            ? TileServices::find($this->quoteRequest->service_slug)['title'] ?? null
            : null;

        return (new MailMessage)
            ->subject("New quote request from {$this->quoteRequest->name}")
            ->greeting('New quote request')
            ->line("Name: {$this->quoteRequest->name}")
            ->line("Email: {$this->quoteRequest->email}")
            ->when($this->quoteRequest->phone, fn (MailMessage $mail) => $mail->line("Phone: {$this->quoteRequest->phone}"))
            ->when($service, fn (MailMessage $mail) => $mail->line("Service: {$service}"))
            ->line('Message:')
            ->line($this->quoteRequest->message);
    }
}

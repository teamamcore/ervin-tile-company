<?php

declare(strict_types=1);

namespace App\Actions\QuoteRequests;

use App\Models\QuoteRequest;
use App\Notifications\NewQuoteRequestReceived;
use Illuminate\Support\Facades\Notification;

class SubmitQuoteRequest
{
    /**
     * @param  array{name: string, email: string, phone: ?string, service_slug: ?string, message: string}  $data
     */
    public function handle(array $data): QuoteRequest
    {
        $quoteRequest = QuoteRequest::create($data);

        Notification::route('mail', config('business.notification_email'))
            ->notify(new NewQuoteRequestReceived($quoteRequest));

        $quoteRequest->forceFill(['notified_at' => now()])->save();

        return $quoteRequest;
    }
}

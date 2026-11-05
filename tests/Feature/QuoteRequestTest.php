<?php

use App\Actions\QuoteRequests\SubmitQuoteRequest;
use App\Models\QuoteRequest;
use App\Notifications\NewQuoteRequestReceived;
use Illuminate\Support\Facades\Notification;
use Livewire\Volt\Volt;

it('stores a quote request and notifies the business inbox via the action', function () {
    Notification::fake();

    $quoteRequest = resolve(SubmitQuoteRequest::class)->handle([
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'phone' => '555-010-1234',
        'service_slug' => 'kitchen-backsplashes',
        'message' => 'Looking for a herringbone backsplash in our kitchen.',
    ]);

    expect($quoteRequest)->toBeInstanceOf(QuoteRequest::class)
        ->and($quoteRequest->notified_at)->not->toBeNull();

    $this->assertDatabaseHas('quote_requests', [
        'id' => $quoteRequest->id,
        'email' => 'jane@example.com',
    ]);

    Notification::assertSentOnDemand(NewQuoteRequestReceived::class);
});

it('submits the contact form and shows a success state', function () {
    Notification::fake();

    Volt::test('quote-request-form')
        ->set('name', 'Jane Smith')
        ->set('email', 'jane@example.com')
        ->set('phone', '555-010-1234')
        ->set('service_slug', 'kitchen-backsplashes')
        ->set('message', 'Looking for a herringbone backsplash in our kitchen.')
        ->call('submit')
        ->assertSet('submitted', true);

    $this->assertDatabaseHas('quote_requests', [
        'email' => 'jane@example.com',
    ]);
});

it('requires name, email, and message on the contact form', function () {
    Volt::test('quote-request-form')
        ->set('name', '')
        ->set('email', 'not-an-email')
        ->set('message', '')
        ->call('submit')
        ->assertHasErrors(['name', 'email', 'message']);
});

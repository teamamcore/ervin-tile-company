<?php

use App\Actions\QuoteRequests\SubmitQuoteRequest;
use App\Support\TileServices;

use function Livewire\Volt\{state, rules};

state([
    'name' => '',
    'email' => '',
    'phone' => '',
    'service_slug' => '',
    'message' => '',
    'submitted' => false,
    'services' => fn () => TileServices::all(),
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'email', 'max:255'],
    'phone' => ['nullable', 'string', 'max:30'],
    'service_slug' => ['nullable', 'string', 'in:'.implode(',', array_column(TileServices::all(), 'slug'))],
    'message' => ['required', 'string', 'max:2000'],
]);

$submit = function (SubmitQuoteRequest $submitQuoteRequest) {
    $data = $this->validate();
    $data['service_slug'] = $data['service_slug'] ?: null;
    $data['phone'] = $data['phone'] ?: null;

    $submitQuoteRequest->handle($data);

    $this->reset('name', 'email', 'phone', 'service_slug', 'message');
    $this->submitted = true;
};

?>

<div>
    @if ($submitted)
        <div class="border border-ink p-8 text-center">
            <svg class="mx-auto size-8 text-ink" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <h3 class="mt-4 font-display text-xl">Thanks — we got it!</h3>
            <p class="mt-2 text-sm text-muted">
                We'll be in touch shortly to talk through your project.
            </p>
            <button
                type="button"
                wire:click="$set('submitted', false)"
                class="mt-6 text-xs tracking-[0.16em] text-ink uppercase underline underline-offset-4"
            >
                Send another request
            </button>
        </div>
    @else
        <form wire:submit="submit" class="space-y-5 border border-ink p-8">
            <div class="grid gap-5 sm:grid-cols-2">
                <flux:input wire:model="name" label="Name" placeholder="Jane Smith" class="!rounded-none" />
                <flux:input wire:model="phone" label="Phone (optional)" placeholder="(555) 010-1234" class="!rounded-none" />
            </div>

            <flux:input wire:model="email" type="email" label="Email" placeholder="jane@example.com" class="!rounded-none" />

            <flux:select wire:model="service_slug" label="Service (optional)" placeholder="Select a service&hellip;" class="!rounded-none">
                @foreach ($services as $service)
                    <flux:select.option value="{{ $service['slug'] }}">{{ $service['title'] }}</flux:select.option>
                @endforeach
            </flux:select>

            <flux:textarea
                wire:model="message"
                label="Tell us about your project"
                placeholder="Room size, materials you're considering, timeline, etc."
                rows="5"
                class="!rounded-none"
            />

            <flux:button type="submit" class="btn-hairline !w-full !justify-center" wire:loading.attr="disabled">
                <span wire:loading.remove wire:target="submit">Request a quote</span>
                <span wire:loading wire:target="submit">Sending&hellip;</span>
            </flux:button>
        </form>
    @endif
</div>

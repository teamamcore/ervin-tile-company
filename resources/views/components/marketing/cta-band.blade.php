@props(['title' => 'Tell us about the room.', 'description' => "No-pressure, on-site quotes. ".config('business.license').'.'])

<section class="border-t border-ink">
    <div class="mx-auto max-w-[680px] px-7 py-[88px] text-center">
        <p class="kicker">Free estimate</p>
        <h2 class="font-display text-[clamp(32px,4vw,48px)] tracking-[0.04em]">{{ $title }}</h2>
        <p class="mt-4 text-muted">{{ $description }}</p>
        <p class="mt-8">
            <a href="{{ route('contact') }}#quote" class="btn-hairline">Request a quote</a>
        </p>
    </div>
</section>

@props(['title' => 'Ready to Start Your Project?', 'description' => "Tell us about your space and we'll put together a free, no-obligation quote."])

<section class="bg-brass">
    <div class="mx-auto max-w-6xl px-6 py-16 text-center lg:px-8">
        <h2 class="font-display text-3xl font-semibold text-navy sm:text-4xl">{{ $title }}</h2>
        <p class="mx-auto mt-4 max-w-xl text-navy/80">{{ $description }}</p>
        <a
            href="{{ route('contact') }}"
            class="mt-8 inline-block rounded-full bg-navy px-8 py-3.5 text-sm font-semibold text-white transition hover:bg-navy-light"
        >
            Request a Free Quote
        </a>
    </div>
</section>

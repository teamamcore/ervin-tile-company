@props(['eyebrow', 'title', 'description' => null])

<section class="relative overflow-hidden bg-navy text-white">
    <x-marketing.tile-pattern class="pointer-events-none absolute -right-20 -top-20 size-96 text-white/10" />

    <div class="relative mx-auto max-w-6xl px-6 py-20 lg:px-8">
        <p class="font-display text-sm font-semibold uppercase tracking-[0.2em] text-brass-light">{{ $eyebrow }}</p>
        <h1 class="mt-4 font-display text-4xl font-semibold sm:text-5xl">{{ $title }}</h1>
        @if ($description)
            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-zinc-300">{{ $description }}</p>
        @endif
    </div>
</section>

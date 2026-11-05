@php
    $categories = [
        ['title' => 'Kitchen Backsplashes', 'tone' => 'bg-navy text-white'],
        ['title' => 'Bathrooms & Showers', 'tone' => 'bg-brass text-navy'],
        ['title' => 'Flooring', 'tone' => 'bg-zinc-800 text-white'],
        ['title' => 'Outdoor & Patio', 'tone' => 'bg-brass-light text-navy'],
        ['title' => 'Mosaics & Custom Designs', 'tone' => 'bg-navy-light text-white'],
        ['title' => 'Repair & Regrouting', 'tone' => 'bg-zinc-700 text-white'],
    ];
@endphp

<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="Gallery"
        title="Our Work"
        description="A look at the kind of tile work we do. Full project photos are on the way — in the meantime, reach out and we're happy to walk you through recent jobs."
    />

    <section class="bg-stone py-20 sm:py-28">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($categories as $category)
                    <div class="group relative aspect-square overflow-hidden rounded-2xl {{ $category['tone'] }}">
                        <x-marketing.tile-pattern class="absolute inset-0 size-full p-6 opacity-70 transition group-hover:scale-105 group-hover:opacity-90" />
                        <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/50 via-transparent to-transparent p-6">
                            <h3 class="font-display text-lg font-semibold">{{ $category['title'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-14 rounded-2xl border border-dashed border-zinc-300 bg-white p-8 text-center">
                <p class="font-display text-lg font-semibold text-navy">Project photos coming soon</p>
                <p class="mx-auto mt-2 max-w-xl text-sm text-zinc-600">
                    We're putting together a full photo gallery of completed installations. Want to see examples
                    now? Get in touch and we'll send over recent project photos directly.
                </p>
                <a
                    href="{{ route('contact') }}"
                    class="mt-6 inline-block rounded-full bg-navy px-6 py-3 text-sm font-semibold text-white transition hover:bg-navy-light"
                >
                    Ask to See Our Portfolio
                </a>
            </div>
        </div>
    </section>

    <x-marketing.cta-band />
</x-layouts.marketing>

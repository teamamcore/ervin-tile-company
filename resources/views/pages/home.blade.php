@php
    $services = \App\Support\TileServices::all();
@endphp

<x-layouts.marketing>
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-navy text-white">
        <x-marketing.tile-pattern class="pointer-events-none absolute -right-24 -top-24 size-[32rem] text-white/10" />

        <div class="relative mx-auto max-w-6xl px-6 py-24 lg:px-8 lg:py-32">
            <div class="max-w-2xl">
                <p class="font-display text-sm font-semibold uppercase tracking-[0.2em] text-brass-light">
                    {{ config('business.license') }}
                </p>
                <h1 class="mt-4 font-display text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">
                    High-End Tile Work, Installed with Precision
                </h1>
                <p class="mt-6 text-lg leading-relaxed text-zinc-300">
                    {{ config('business.name') }} designs and installs custom tile for kitchens, bathrooms,
                    floors, and outdoor living spaces across {{ config('business.service_area') }}.
                    Clean lines, tight grout joints, and work that lasts.
                </p>
                <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                    <a
                        href="{{ route('contact') }}"
                        class="rounded-full bg-brass px-8 py-3.5 text-center text-sm font-semibold text-navy transition hover:bg-brass-light"
                    >
                        Get a Free Quote
                    </a>
                    <a
                        href="{{ route('gallery') }}"
                        class="rounded-full border border-white/30 px-8 py-3.5 text-center text-sm font-semibold text-white transition hover:border-white/60"
                    >
                        View Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Trust bar --}}
    <section class="border-b border-zinc-200 bg-white">
        <div class="mx-auto grid max-w-6xl grid-cols-2 gap-8 px-6 py-10 text-center lg:grid-cols-4 lg:px-8">
            @foreach ([
                'Licensed & Insured' => 'Full coverage on every job',
                'Free Estimates' => 'No-pressure, on-site quotes',
                'Craftsman-Led Crews' => 'No subcontracted labor',
                'Satisfaction Guaranteed' => 'We stand behind our work',
            ] as $title => $subtitle)
                <div>
                    <p class="font-display text-base font-semibold text-navy">{{ $title }}</p>
                    <p class="mt-1 text-sm text-zinc-500">{{ $subtitle }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Services overview --}}
    <section class="bg-stone py-20 sm:py-28">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="max-w-2xl">
                <h2 class="font-display text-3xl font-semibold text-navy sm:text-4xl">What We Do</h2>
                <p class="mt-4 text-zinc-600">
                    From a single backsplash to a full home renovation, every project gets the same level of
                    craftsmanship and attention to detail.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $service)
                    <a
                        href="{{ route('services') }}#{{ $service['slug'] }}"
                        class="group rounded-2xl border border-zinc-200 bg-white p-6 transition hover:border-brass hover:shadow-lg"
                    >
                        <h3 class="font-display text-lg font-semibold text-navy">{{ $service['title'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-600">{{ $service['summary'] }}</p>
                        <span class="mt-4 inline-flex items-center text-sm font-semibold text-accent-content">
                            Learn more
                            <svg class="ml-1 size-4 transition group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="bg-navy py-20 text-white sm:py-28">
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <h2 class="font-display text-3xl font-semibold sm:text-4xl">How a Project Comes Together</h2>

            <div class="mt-12 grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['Consultation', 'We walk the space, talk through your goals, and scope the project together.'],
                    ['Design & Materials', 'Pick patterns, tile, and finishes — we\'ll guide you if you want recommendations.'],
                    ['Installation', 'Our crew preps the substrate properly and installs with precise layout and spacing.'],
                    ['Final Walkthrough', 'We review the finished work with you and make sure every detail is right.'],
                ] as $index => [$title, $copy])
                    <div>
                        <span class="font-display text-sm font-semibold text-brass-light">0{{ $index + 1 }}</span>
                        <h3 class="mt-2 font-display text-lg font-semibold">{{ $title }}</h3>
                        <p class="mt-2 text-sm leading-relaxed text-zinc-300">{{ $copy }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-marketing.cta-band />
</x-layouts.marketing>

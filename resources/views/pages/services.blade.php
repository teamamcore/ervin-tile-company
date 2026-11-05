@php
    $services = \App\Support\TileServices::all();
@endphp

<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="Services"
        title="Tile Work for Every Room"
        description="Every project — big or small — gets careful substrate prep, precise layout, and clean grout lines. Here's what we specialize in."
    />

    <section class="bg-stone py-20 sm:py-28">
        <div class="mx-auto max-w-5xl space-y-16 px-6 lg:px-8">
            @foreach ($services as $service)
                <div id="{{ $service['slug'] }}" class="scroll-mt-24 border-t border-zinc-200 pt-12 first:border-t-0 first:pt-0">
                    <div class="grid gap-8 lg:grid-cols-3">
                        <div>
                            <h2 class="font-display text-2xl font-semibold text-navy">{{ $service['title'] }}</h2>
                            <p class="mt-3 text-sm font-medium text-accent-content">{{ $service['summary'] }}</p>
                        </div>
                        <div class="lg:col-span-2">
                            <p class="text-zinc-600 leading-relaxed">{{ $service['description'] }}</p>
                            <ul class="mt-6 grid gap-2 sm:grid-cols-2">
                                @foreach ($service['highlights'] as $highlight)
                                    <li class="flex items-start gap-2 text-sm text-zinc-700">
                                        <svg class="mt-0.5 size-4 shrink-0 text-accent-content" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                        {{ $highlight }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-marketing.cta-band />
</x-layouts.marketing>

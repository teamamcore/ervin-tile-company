@php
    $services = \App\Support\TileServices::all();
@endphp

<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="Services"
        title="Tile work for every room."
        description="Every project — big or small — gets careful substrate prep, precise layout, and clean grout lines."
    />

    <section class="mx-auto max-w-[880px] px-7 py-[88px]">
        <div>
            @foreach ($services as $service)
                <div id="{{ $service['slug'] }}" class="scroll-mt-24 border-t border-line py-[22px] text-center first:border-t-0">
                    <h3 class="font-display text-[28px] tracking-[0.06em]">{{ $service['title'] }}</h3>
                    <p class="mx-auto mt-2 max-w-[36rem] text-muted">{{ $service['description'] }}</p>
                    <ul class="mx-auto mt-5 flex max-w-[36rem] flex-wrap justify-center gap-x-6 gap-y-1 text-sm text-ink">
                        @foreach ($service['highlights'] as $highlight)
                            <li>{{ $highlight }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

    <x-marketing.cta-band />
</x-layouts.marketing>

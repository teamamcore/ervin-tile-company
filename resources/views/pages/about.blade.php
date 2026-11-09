<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="About"
        title="Craftsmanship you can trust."
        description="{{ config('business.name') }} is a tile contractor focused on one thing: doing the work right the first time."
    />

    <section class="mx-auto max-w-[880px] px-7 py-[88px]">
        <div class="grid gap-14 text-center lg:grid-cols-2 lg:text-left">
            <div>
                <h2 class="font-display text-[28px] tracking-[0.06em]">Our approach</h2>
                <div class="mt-4 space-y-4 text-muted">
                    <p>
                        High-end tile work isn't just about the tile — it's about what's underneath it. We take
                        substrate prep, waterproofing, and layout planning as seriously as the finished look,
                        because that's what makes tile work last for decades instead of years.
                    </p>
                    <p>
                        Every project is led by craftsmen on our own crew — no subcontracted labor, no handoffs
                        between a sales team and the people actually doing the work. The person who scopes your
                        project is accountable for how it turns out.
                    </p>
                </div>
            </div>

            <div>
                <h2 class="font-display text-[28px] tracking-[0.06em]">Why clients choose us</h2>
                <div class="mt-4">
                    @foreach ([
                        ['Precision layout', 'We dry-lay and plan every pattern before a single tile is set, so cuts and transitions land where they should.'],
                        ['Proper waterproofing', 'Showers and wet areas get full waterproofing systems, not shortcuts — so there are no surprises down the line.'],
                        ['Clear communication', 'You know the timeline, the materials, and the cost up front, with no change-order surprises.'],
                        ['Clean job sites', 'We protect your home, contain dust, and leave the space clean at the end of each day.'],
                    ] as [$title, $copy])
                        <div class="border-t border-line py-[22px] text-left first:border-t-0">
                            <h3 class="font-display text-lg">{{ $title }}</h3>
                            <p class="mt-1 text-sm text-muted">{{ $copy }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <x-marketing.cta-band />
</x-layouts.marketing>

<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="About"
        title="Craftsmanship You Can Trust"
        description="{{ config('business.name') }} is a tile contractor focused on one thing: doing the work right the first time."
    />

    <section class="bg-stone py-20 sm:py-28">
        <div class="mx-auto grid max-w-6xl gap-16 px-6 lg:grid-cols-2 lg:px-8">
            <div>
                <h2 class="font-display text-2xl font-semibold text-navy">Our Approach</h2>
                <div class="mt-4 space-y-4 text-zinc-600 leading-relaxed">
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
                <h2 class="font-display text-2xl font-semibold text-navy">Why Clients Choose Us</h2>
                <ul class="mt-4 space-y-4">
                    @foreach ([
                        ['Precision Layout', 'We dry-lay and plan every pattern before a single tile is set, so cuts and transitions land where they should.'],
                        ['Proper Waterproofing', 'Showers and wet areas get full waterproofing systems, not shortcuts — so there are no surprises down the line.'],
                        ['Clear Communication', 'You know the timeline, the materials, and the cost up front, with no change-order surprises.'],
                        ['Clean Job Sites', 'We protect your home, contain dust, and leave the space clean at the end of each day.'],
                    ] as [$title, $copy])
                        <li class="flex gap-4">
                            <span class="mt-1 flex size-8 shrink-0 items-center justify-center rounded-full bg-navy text-brass-light">
                                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </span>
                            <div>
                                <p class="font-display font-semibold text-navy">{{ $title }}</p>
                                <p class="mt-1 text-sm text-zinc-600">{{ $copy }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-navy py-20 text-white sm:py-28">
        <div class="mx-auto max-w-4xl px-6 text-center lg:px-8">
            <svg class="mx-auto size-10 text-brass-light" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
            </svg>
            <p class="mt-6 font-display text-2xl font-medium leading-relaxed sm:text-3xl">
                Placeholder testimonial — swap in a real client quote once the first reviews are in.
            </p>
            <p class="mt-6 text-sm font-semibold uppercase tracking-wider text-zinc-400">— Client Name, Project Type</p>
        </div>
    </section>

    <x-marketing.cta-band />
</x-layouts.marketing>

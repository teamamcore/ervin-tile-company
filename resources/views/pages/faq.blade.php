@php
    $faqs = [
        ['Do you subcontract any of the work?', 'No. Every project is installed by our own crew, start to finish — no subcontracted labor and no handoff between a sales team and the people doing the work.'],
        ['What areas do you serve?', config('business.service_area').'. If you\'re just outside that area, reach out — we can usually still take a look.'],
        ['Do you offer free estimates?', 'Yes. We walk the space, talk through the project, and put together a quote on site — no obligation.'],
        ['Are you licensed and insured?', 'Yes, '.config('business.name').' is '.strtolower(config('business.license')).'.'],
        ['What should I expect during installation?', 'We protect the surrounding space, contain dust, and work room by room. Substrate prep and waterproofing happen before any tile goes down, and we clean the site at the end of each day.'],
        ['Can you match an existing tile or pattern?', 'Often, yes. Bring a sample or a photo to the consultation and we\'ll tell you what\'s realistic — exact discontinued tiles sometimes need a close match instead of an identical one.'],
        ['Do you handle permits?', 'For work that requires a permit, we handle the paperwork as part of the project scope.'],
        ['How do I get started?', 'Request a quote or call us directly. We\'ll schedule a walkthrough and go from there.'],
    ];
@endphp

<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="FAQ"
        title="Common questions."
        description="A few things clients ask before the first consultation."
    />

    <section class="mx-auto max-w-[880px] px-7 py-[88px]">
        <div>
            @foreach ($faqs as [$question, $answer])
                <div class="qa">
                    <h3>{{ $question }}</h3>
                    <p>{{ $answer }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <x-marketing.cta-band />
</x-layouts.marketing>

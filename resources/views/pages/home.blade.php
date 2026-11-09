@php
    $services = \App\Support\TileServices::all();
@endphp

<x-layouts.marketing>
    {{-- Hero --}}
    <section class="relative flex min-h-[max(82vh,680px)] items-end justify-center overflow-hidden bg-[#111] text-center text-white">
        <img
            src="{{ asset('images/gallery/herringbone.jpg') }}"
            alt="Bathroom with a dark gray herringbone tile floor."
            class="absolute inset-0 size-full object-cover"
            style="object-position: center 62%"
        >
        <div class="absolute inset-0" style="background: linear-gradient(to top, rgba(8,8,8,0.78) 0%, rgba(8,8,8,0.38) 28%, rgba(8,8,8,0.04) 55%, rgba(8,8,8,0.16) 100%)"></div>

        <div class="relative z-10 w-full max-w-[860px] px-6 py-16 sm:px-6">
            <p class="kicker" style="color: rgba(255,255,255,0.82)">{{ config('business.license') }}</p>
            <h1 class="mx-auto max-w-[16ch] font-display text-[clamp(40px,5.4vw,72px)] leading-[1.05] tracking-[0.04em]">Material first.</h1>
            <p class="mx-auto mt-4 max-w-[32rem]" style="color: #f4f4f2">
                Porcelain, stone, and mosaic, laid by {{ config('business.name') }}'s own crew. Kitchens, bathrooms, floors, and outdoor spaces across {{ config('business.service_area') }}. No subcontracted labor.
            </p>
            <div class="mt-6 flex flex-wrap justify-center gap-[10px]">
                <a href="{{ route('contact') }}#quote" class="btn-hairline fill">Request a quote</a>
                <a href="{{ route('gallery') }}" class="btn-hairline on-photo">View the gallery</a>
            </div>
            <p class="mt-5 text-[11px] tracking-[0.16em] uppercase" style="color: rgba(255,255,255,0.72)">Stock photo behind the title. Not an Ervin job.</p>
        </div>
    </section>

    {{-- Services teaser --}}
    <section class="mx-auto max-w-[880px] px-7 py-[88px] text-center" aria-labelledby="what">
        <p class="kicker" id="what">What we install</p>
        <h2 class="font-display text-[clamp(32px,4vw,48px)] tracking-[0.04em]">Six kinds of work.</h2>
        <div class="names mt-9">
            @foreach ($services as $service)
                <a href="{{ route('services') }}#{{ $service['slug'] }}">
                    <h3 class="font-display">{{ $service['title'] }}</h3>
                    <p>{{ $service['summary'] }}</p>
                </a>
            @endforeach
        </div>
    </section>

    {{-- How it works teaser --}}
    <section class="mx-auto max-w-[880px] px-7 py-[88px] text-center" aria-labelledby="how">
        <p class="kicker" id="how">The sequence</p>
        <h2 class="font-display text-[clamp(32px,4vw,48px)] tracking-[0.04em]">How a project comes together.</h2>
        <div class="steps-grid mt-9">
            <article>
                <span>01</span>
                <h3>Consultation</h3>
                <p>We walk the space, talk through your goals, and scope the project together.</p>
            </article>
            <article>
                <span>02</span>
                <h3>Design &amp; materials</h3>
                <p>Pick patterns, tile, and finishes. We'll guide you if you want recommendations.</p>
            </article>
            <article>
                <span>03</span>
                <h3>Installation</h3>
                <p>Our crew preps the substrate and installs with precise layout and spacing.</p>
            </article>
            <article>
                <span>04</span>
                <h3>Final walkthrough</h3>
                <p>We review the finished work with you and make sure every detail is right.</p>
            </article>
        </div>
        <p class="mt-9">
            <a href="{{ route('how-it-works') }}" class="btn-hairline">See the full process</a>
        </p>
    </section>

    {{-- Quote --}}
    <section class="border-t border-ink" id="quote">
        <div class="mx-auto max-w-[680px] px-7 py-[88px] text-center">
            <p class="kicker">Free estimate</p>
            <h2 class="font-display text-[clamp(32px,4vw,48px)] tracking-[0.04em]">Tell us about the room.</h2>
            <p class="mt-4">No-pressure, on-site quotes. {{ config('business.license') }}. {{ config('business.hours') }}.</p>
            <p class="mt-6"><a href="tel:{{ config('business.phone_tel') }}" class="font-display text-[clamp(32px,4vw,48px)] tracking-[0.04em] text-ink no-underline">{{ config('business.phone') }}</a></p>
            <p class="mt-2"><a href="mailto:{{ config('business.email') }}" class="text-ink">{{ config('business.email') }}</a></p>
            <p class="mt-6 text-sm text-muted">
                <a href="{{ route('contact') }}#quote" class="underline underline-offset-4">Send the full request form on the Contact page &rarr;</a>
            </p>
        </div>
    </section>
</x-layouts.marketing>

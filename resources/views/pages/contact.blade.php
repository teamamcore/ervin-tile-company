<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="Contact"
        title="Tell us about the room."
        description="No-pressure, on-site quotes. Reach out directly, or send the form below."
    />

    <section class="mx-auto max-w-[880px] px-7 py-[88px]" id="quote">
        <div class="grid gap-14 lg:grid-cols-5">
            <div class="text-center lg:col-span-2 lg:text-left">
                <h2 class="font-display text-[28px] tracking-[0.06em]">Contact info</h2>
                <ul class="mt-6 space-y-5 text-sm">
                    <li>
                        <p class="kicker mb-1">Phone</p>
                        <a href="tel:{{ config('business.phone_tel') }}" class="font-display text-xl text-ink">{{ config('business.phone') }}</a>
                    </li>
                    <li>
                        <p class="kicker mb-1">Email</p>
                        <a href="mailto:{{ config('business.email') }}" class="text-ink">{{ config('business.email') }}</a>
                    </li>
                    <li>
                        <p class="kicker mb-1">Service area</p>
                        <p class="text-muted">{{ config('business.service_area') }}</p>
                    </li>
                    <li>
                        <p class="kicker mb-1">Hours</p>
                        <p class="text-muted">{{ config('business.hours') }}</p>
                    </li>
                    <li>
                        <p class="text-muted">{{ config('business.license') }}. Our own crew — no subcontracted labor.</p>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-3">
                <livewire:quote-request-form />
            </div>
        </div>
    </section>
</x-layouts.marketing>

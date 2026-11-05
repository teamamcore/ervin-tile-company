<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="Contact"
        title="Get a Free Quote"
        description="Tell us a little about your project and we'll follow up to schedule a consultation."
    />

    <section class="bg-stone py-20 sm:py-28">
        <div class="mx-auto grid max-w-6xl gap-16 px-6 lg:grid-cols-5 lg:px-8">
            <div class="lg:col-span-2">
                <h2 class="font-display text-xl font-semibold text-navy">Contact Info</h2>
                <ul class="mt-6 space-y-5 text-sm">
                    <li>
                        <p class="font-semibold text-navy">Phone</p>
                        <a href="tel:{{ config('business.phone_tel') }}" class="text-zinc-600 hover:text-accent-content">
                            {{ config('business.phone') }}
                        </a>
                    </li>
                    <li>
                        <p class="font-semibold text-navy">Email</p>
                        <a href="mailto:{{ config('business.email') }}" class="text-zinc-600 hover:text-accent-content">
                            {{ config('business.email') }}
                        </a>
                    </li>
                    <li>
                        <p class="font-semibold text-navy">Service Area</p>
                        <p class="text-zinc-600">{{ config('business.service_area') }}</p>
                    </li>
                    <li>
                        <p class="font-semibold text-navy">Hours</p>
                        <p class="text-zinc-600">{{ config('business.hours') }}</p>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-3">
                <livewire:quote-request-form />
            </div>
        </div>
    </section>
</x-layouts.marketing>

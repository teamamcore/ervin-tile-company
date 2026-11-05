<footer class="bg-navy text-zinc-300">
    <div class="mx-auto max-w-6xl px-6 py-14 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-4">
            <div class="lg:col-span-2">
                <img src="{{ asset('images/logo.png') }}" alt="Ervin Tile Company" class="h-12 w-auto">
                <p class="mt-4 max-w-sm text-sm leading-relaxed text-zinc-400">
                    {{ config('business.name') }} designs and installs custom tile work for kitchens, bathrooms,
                    floors, and outdoor living spaces throughout {{ config('business.service_area') }}.
                </p>
                <p class="mt-4 text-sm font-medium text-brass-light">{{ config('business.license') }}</p>
            </div>

            <div>
                <h3 class="font-display text-sm font-semibold uppercase tracking-wider text-white">Explore</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li><a href="{{ route('services') }}" class="transition hover:text-brass-light">Services</a></li>
                    <li><a href="{{ route('gallery') }}" class="transition hover:text-brass-light">Gallery</a></li>
                    <li><a href="{{ route('about') }}" class="transition hover:text-brass-light">About</a></li>
                    <li><a href="{{ route('contact') }}" class="transition hover:text-brass-light">Get a Quote</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-display text-sm font-semibold uppercase tracking-wider text-white">Contact</h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li>
                        <a href="tel:{{ config('business.phone_tel') }}" class="transition hover:text-brass-light">
                            {{ config('business.phone') }}
                        </a>
                    </li>
                    <li>
                        <a href="mailto:{{ config('business.email') }}" class="transition hover:text-brass-light">
                            {{ config('business.email') }}
                        </a>
                    </li>
                    <li class="text-zinc-400">{{ config('business.address') }}</li>
                    <li class="text-zinc-400">{{ config('business.hours') }}</li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-zinc-700 pt-8 text-xs text-zinc-500 lg:flex-row">
            <p>&copy; {{ now()->year }} {{ config('business.name') }}. All rights reserved.</p>
            <p>Serving {{ config('business.service_area') }}</p>
        </div>
    </div>
</footer>

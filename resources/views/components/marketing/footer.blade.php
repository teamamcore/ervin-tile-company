<footer class="flex flex-wrap items-center justify-between gap-3 border-t border-line px-4 py-5 text-xs tracking-[0.06em] text-muted uppercase sm:px-8 sm:py-6">
    <span>{{ config('business.name') }} &middot; {{ config('business.license') }} &middot; {{ config('business.service_area') }}</span>
    <span class="normal-case">
        <a href="{{ route('services') }}" class="text-ink">Services</a> &middot;
        <a href="{{ route('gallery') }}" class="text-ink">Gallery</a> &middot;
        <a href="{{ route('about') }}" class="text-ink">About</a> &middot;
        <a href="{{ route('contact') }}" class="text-ink">Contact</a>
    </span>
</footer>

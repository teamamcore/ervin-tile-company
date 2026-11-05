@php
    $navLinks = [
        'home' => 'Home',
        'services' => 'Services',
        'gallery' => 'Gallery',
        'about' => 'About',
        'contact' => 'Contact',
    ];
@endphp

<header x-data="{ open: false }" class="sticky top-0 z-50 border-b border-zinc-200 bg-stone/95 backdrop-blur">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-3 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img src="{{ asset('images/logo.png') }}" alt="Ervin Tile Company" class="h-10 w-auto rounded-sm bg-navy p-1">
            <span class="sr-only">Ervin Tile Company</span>
        </a>

        <div class="hidden items-center gap-8 lg:flex">
            @foreach ($navLinks as $route => $label)
                <a
                    href="{{ route($route) }}"
                    class="text-sm font-medium tracking-wide text-zinc-700 transition hover:text-accent {{ request()->routeIs($route) ? 'text-accent' : '' }}"
                >
                    {{ $label }}
                </a>
            @endforeach
            <a
                href="tel:{{ config('business.phone_tel') }}"
                class="rounded-full bg-navy px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-navy-light"
            >
                {{ config('business.phone') }}
            </a>
        </div>

        <button
            x-on:click="open = !open"
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-zinc-700 lg:hidden"
            aria-label="Toggle navigation menu"
        >
            <svg x-show="!open" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
            </svg>
            <svg x-show="open" x-cloak class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>

    <div x-show="open" x-cloak x-transition class="border-t border-zinc-200 lg:hidden">
        <div class="space-y-1 px-6 py-4">
            @foreach ($navLinks as $route => $label)
                <a
                    href="{{ route($route) }}"
                    class="block rounded-md px-3 py-2 text-base font-medium text-zinc-700 hover:bg-zinc-100 {{ request()->routeIs($route) ? 'text-accent' : '' }}"
                >
                    {{ $label }}
                </a>
            @endforeach
            <a
                href="tel:{{ config('business.phone_tel') }}"
                class="block rounded-md bg-navy px-3 py-2 text-center text-base font-semibold text-white"
            >
                Call {{ config('business.phone') }}
            </a>
        </div>
    </div>
</header>

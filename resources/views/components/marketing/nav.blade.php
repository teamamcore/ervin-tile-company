@php
    $navLinks = [
        'home' => 'Home',
        'services' => 'Services',
        'how-it-works' => 'How It Works',
        'gallery' => 'Gallery',
        'about' => 'About',
        'faq' => 'FAQ',
        'contact' => 'Contact',
    ];
@endphp

<header x-data="{ open: false }" class="sticky top-0 z-20 flex items-center gap-[18px] bg-[rgba(251,251,250,0.94)] px-4 py-3 backdrop-blur sm:px-8 sm:py-4">
    <a href="{{ route('home') }}" class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Ervin Tile Company" class="h-10 max-w-[120px] w-auto">
    </a>

    <nav class="ml-auto hidden items-center gap-[22px] min-[801px]:flex" aria-label="Primary">
        @foreach ($navLinks as $route => $label)
            <a
                href="{{ route($route) }}"
                class="text-xs tracking-[0.18em] text-ink uppercase {{ request()->routeIs($route) ? 'shadow-[inset_0_-1px_0_var(--color-ink)]' : '' }}"
                @if (request()->routeIs($route)) aria-current="page" @endif
            >
                {{ $label }}
            </a>
        @endforeach
    </nav>

    <a href="{{ route('contact') }}#quote" class="btn-hairline hidden min-[801px]:inline-flex">Request a quote</a>

    <button
        x-on:click="open = !open"
        type="button"
        class="ml-auto inline-flex items-center justify-center p-2 text-ink min-[801px]:hidden"
        aria-label="Toggle navigation menu"
    >
        <svg x-show="!open" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
        </svg>
        <svg x-show="open" x-cloak class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>

    <div x-show="open" x-cloak x-transition class="absolute inset-x-0 top-full border-t border-line bg-paper min-[801px]:hidden">
        <div class="space-y-1 px-4 py-4">
            @foreach ($navLinks as $route => $label)
                <a
                    href="{{ route($route) }}"
                    class="block px-2 py-2 text-xs tracking-[0.18em] text-ink uppercase {{ request()->routeIs($route) ? 'shadow-[inset_0_-1px_0_var(--color-ink)]' : '' }}"
                >
                    {{ $label }}
                </a>
            @endforeach
            <a href="{{ route('contact') }}#quote" class="btn-hairline mt-2 w-full justify-center">Request a quote</a>
        </div>
    </div>
</header>

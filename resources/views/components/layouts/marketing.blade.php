<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-paper font-sans text-ink antialiased">
        <x-marketing.nav />

        <main>
            {{ $slot }}
        </main>

        <x-marketing.footer />

        @stack('scripts')
        @fluxScripts
    </body>
</html>

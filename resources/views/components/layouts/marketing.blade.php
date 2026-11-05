<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-stone font-sans text-zinc-800 antialiased">
        <x-marketing.nav />

        <main>
            {{ $slot }}
        </main>

        <x-marketing.footer />

        @fluxScripts
    </body>
</html>

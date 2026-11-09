@props(['eyebrow', 'title', 'description' => null])

<header class="page-head">
    <p class="kicker">{{ $eyebrow }}</p>
    <h1>{{ $title }}</h1>
    @if ($description)
        <p class="mt-6 text-muted">{{ $description }}</p>
    @endif
</header>

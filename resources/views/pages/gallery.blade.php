@php
    $shots = [
        ['cat' => 'baths', 'img' => 'shower-marble.jpg', 'alt' => 'Large-format marble-look shower with subway wainscot and hex niches.', 'title' => 'Large-format shower', 'caption' => 'Marble-look slabs, subway wainscot, hex floor and niches. Stock photo.'],
        ['cat' => 'floors', 'img' => 'herringbone.jpg', 'alt' => 'Bathroom with a dark gray herringbone tile floor.', 'title' => 'Herringbone floor', 'caption' => 'A dark herringbone floor in a bath. Stock photo.'],
        ['cat' => 'baths', 'img' => 'shower-mosaic.jpg', 'alt' => 'White stacked-tile shower with a gray penny-mosaic floor.', 'title' => 'Penny-floor shower', 'caption' => 'Stacked wall tile with a penny mosaic floor. Stock photo.'],
        ['cat' => 'kitchens', 'img' => 'kitchen-hex.jpg', 'alt' => 'Navy hex mosaic backsplash in a white kitchen.', 'title' => 'Kitchen backsplash', 'caption' => 'Hex mosaic behind the range. Stock photo.'],
        ['cat' => 'baths', 'img' => 'subway-accent.jpg', 'alt' => 'White subway-tile shower with a black patterned accent strip and a hex floor.', 'title' => 'Patterned shower', 'caption' => 'Subway field with a decorative accent strip. Stock photo.'],
        ['cat' => 'baths', 'img' => 'shower-glass.jpg', 'alt' => 'Shower with stacked stone walls, a linear mosaic stripe, and a pebble floor and niche.', 'title' => 'Stone shower', 'caption' => 'Stacked wall tile, linear mosaic, pebble floor and niche. Stock photo.'],
        ['cat' => 'floors', 'img' => 'floor-terra.jpg', 'alt' => 'Kitchen with a square terracotta tile floor.', 'title' => 'Square floor tile', 'caption' => 'Terracotta squares through a kitchen. Stock photo.'],
        ['cat' => 'outdoor', 'img' => 'floor-amphora.jpg', 'alt' => 'Covered outdoor walk paved with large square tile.', 'title' => 'Covered patio', 'caption' => 'Large squares on a covered outdoor walk. Stock photo.'],
        ['cat' => 'outdoor', 'img' => 'pool-deck.jpg', 'alt' => 'Pool edge with terracotta coping and a pale tiled deck.', 'title' => 'Pool deck', 'caption' => 'Deck tile and coping at the waterline. Stock photo.'],
        ['cat' => 'mosaics', 'img' => 'mosaic-green.jpg', 'alt' => 'Curved shower wrapped in small green and white mosaic tile.', 'title' => 'Mosaic shower', 'caption' => 'Small-format mosaic wrapping a curved shower. Stock photo.'],
        ['cat' => 'mosaics', 'img' => 'bath-mosaic.jpg', 'alt' => 'Compact bathroom with floor-to-ceiling brown mosaic tile.', 'title' => 'Full mosaic bath', 'caption' => 'Wall-to-wall mosaic in a compact bath. Stock photo.'],
        ['cat' => 'prep', 'img' => 'prep.jpg', 'alt' => 'Linear drain set into mosaic tile beside a band of blue waterproofing.', 'title' => 'Before the tile', 'caption' => 'Waterproofing and a linear drain, before the finish goes down. Stock photo.'],
    ];

    $filters = [
        'all' => 'All',
        'kitchens' => 'Kitchens',
        'baths' => 'Baths',
        'floors' => 'Floors',
        'outdoor' => 'Outdoor',
        'mosaics' => 'Mosaics',
        'prep' => 'Underneath',
    ];
@endphp

<x-layouts.marketing>
    <x-marketing.page-header
        eyebrow="Gallery"
        title="One room at a time."
        description="Every picture is a free stock photo. None of them are Ervin Tile jobs. They stand in so the layout can be judged, and they come out when the company's own work is ready."
    />

    <div class="filters" role="toolbar" aria-label="Filter gallery">
        @foreach ($filters as $key => $label)
            <button type="button" data-filter="{{ $key }}" aria-pressed="{{ $key === 'all' ? 'true' : 'false' }}">{{ $label }}</button>
        @endforeach
    </div>

    <div class="mx-auto mb-10 max-w-[1100px] px-7 pt-3 pb-5">
        @foreach ($shots as $shot)
            <figure class="shot" data-cat="{{ $shot['cat'] }}">
                <img src="{{ asset('images/gallery/'.$shot['img']) }}" alt="{{ $shot['alt'] }}">
                <h2>{{ $shot['title'] }}</h2>
                <p>{{ $shot['caption'] }}</p>
            </figure>
        @endforeach
    </div>

    <section class="border-t border-line px-7 py-10 text-center text-sm text-muted">
        Stock photos only. Swap them for Ervin jobs before this goes anywhere public.
    </section>

    <x-marketing.cta-band />

    @push('scripts')
        <script>
            const buttons = document.querySelectorAll("[data-filter]");
            const shots = document.querySelectorAll(".shot");
            function applyFilter(cat) {
                const name = [...buttons].some((b) => b.dataset.filter === cat) ? cat : "all";
                buttons.forEach((b) => b.setAttribute("aria-pressed", b.dataset.filter === name ? "true" : "false"));
                shots.forEach((s) => { s.hidden = name !== "all" && s.dataset.cat !== name; });
            }
            buttons.forEach((b) => b.addEventListener("click", () => {
                applyFilter(b.dataset.filter);
                history.replaceState(null, "", b.dataset.filter === "all" ? location.pathname : "#" + b.dataset.filter);
            }));
            applyFilter((location.hash || "#all").slice(1));
        </script>
    @endpush
</x-layouts.marketing>

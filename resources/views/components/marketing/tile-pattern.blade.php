@props(['class' => ''])

<svg viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => $class]) }}>
    @for ($row = 0; $row < 5; $row++)
        @for ($col = 0; $col < 5; $col++)
            <rect
                x="{{ $col * 80 + 4 }}"
                y="{{ $row * 80 + 4 }}"
                width="72"
                height="72"
                rx="2"
                stroke="currentColor"
                stroke-width="1.5"
                fill="none"
                opacity="{{ 0.25 + (($row + $col) % 3) * 0.15 }}"
            />
        @endfor
    @endfor
</svg>

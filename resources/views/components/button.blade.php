@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $class = match ($variant) {
        'green' => 'btn-green',
        'outline' => 'btn-outline',
        'ghost' => 'btn-ghost',
        default => 'btn-primary',
    };
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $class]) }}>
        {{ $slot }}
    </button>
@endif

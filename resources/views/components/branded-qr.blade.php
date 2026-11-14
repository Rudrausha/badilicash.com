@props([
    'size' => 168,
    'scanning' => true,
    'showName' => true,
    'caption' => null,
    'pattern' => 'static',
])

@php
    $logo = (int) max(28, round($size * 0.22));
@endphp

<div {{ $attributes->merge(['class' => 'inline-flex flex-col items-center']) }}>
    <div class="relative rounded-2xl bg-white p-2.5 ring-1 ring-slate-100">
        @if ($scanning)
            <span class="scan-corner scan-corner-tl"></span>
            <span class="scan-corner scan-corner-tr"></span>
            <span class="scan-corner scan-corner-bl"></span>
            <span class="scan-corner scan-corner-br"></span>
        @endif

        <x-qr-mark :size="$size" :pattern="$pattern" />

        <div class="pointer-events-none absolute inset-0 flex items-center justify-center">
            <div class="rounded-lg bg-white p-1 shadow-sm ring-1 ring-slate-100">
                <img
                    src="{{ asset('assets/images/favicon.png') }}"
                    alt="BadiliCash"
                    class="object-contain"
                    style="width: {{ $logo }}px; height: {{ $logo }}px;"
                    width="{{ $logo }}"
                    height="{{ $logo }}"
                >
            </div>
        </div>

        @if ($scanning)
            <span class="scan-line pointer-events-none absolute left-5 right-5 h-0.5 rounded-full bg-green shadow-[0_0_16px_#239A45]"></span>
        @endif
    </div>

    @if ($showName)
        <div class="mt-3 flex items-center gap-2">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="" class="h-5 w-5 object-contain" width="20" height="20">
            <span class="text-sm font-bold tracking-wide text-navy">BadiliCash</span>
        </div>
    @endif

    @if ($caption)
        <span class="mt-1 text-[11px] font-medium tracking-wide text-muted uppercase">{{ $caption }}</span>
    @endif
</div>

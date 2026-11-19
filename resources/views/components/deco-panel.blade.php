@props(['label' => 'BadiliCash', 'large' => false])

<div class="relative mx-auto w-full max-w-sm" @if($large) style="max-width: min(24rem, 100%);" @endif>
    <div class="absolute -inset-6 rounded-[2.5rem] bg-gradient-to-br from-navy/15 via-transparent to-green/20 blur-2xl"></div>
    <div class="card relative overflow-hidden p-8" @if($large) style="padding: 2.5rem;" @endif>
        <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-green/10"></div>
        <div class="flex items-center gap-2">
            <img src="{{ asset('assets/images/favicon.png') }}" alt="BadiliCash" class="h-6 w-6 object-contain" width="24" height="24">
            <p class="text-[11px] font-semibold tracking-[0.18em] text-navy uppercase">{{ $label }}</p>
        </div>
        <div class="mt-5 flex justify-center">
            <x-branded-qr :size="$large ? 168 : 140" pattern="static" caption="BadiliCash static QR" />
        </div>
        <div class="mt-5 flex items-center justify-between rounded-2xl bg-canvas px-4 py-3">
            <span class="text-xs text-muted">BadiliCash collection</span>
            <span class="text-sm font-bold text-navy-dark">₹1,250</span>
        </div>
    </div>
</div>

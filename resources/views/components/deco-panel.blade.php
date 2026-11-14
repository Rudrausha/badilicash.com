@props(['label' => 'BadiliCash'])

<div class="relative mx-auto max-w-sm">
    <div class="absolute -inset-6 rounded-[2.5rem] bg-gradient-to-br from-navy/15 via-transparent to-green/20 blur-2xl"></div>
    <div class="card relative overflow-hidden p-8">
        <div class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-green/10"></div>
        <p class="text-[11px] font-semibold tracking-[0.18em] text-navy uppercase">{{ $label }}</p>
        <div class="mt-5 flex justify-center">
            <div class="relative">
                <span class="pulse-ring absolute inset-0 rounded-full border border-green/30"></span>
                <div class="rounded-3xl bg-white p-4 shadow-inner ring-1 ring-slate-100">
                    <x-qr-mark :size="140" />
                </div>
            </div>
        </div>
        <div class="mt-5 flex items-center justify-between rounded-2xl bg-canvas px-4 py-3">
            <span class="text-xs text-muted">Sample collection</span>
            <span class="text-sm font-bold text-navy-dark">₹1,250</span>
        </div>
    </div>
</div>

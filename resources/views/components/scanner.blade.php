@props([
    'variant' => 'static',
    'amount' => '₹1,250.00',
    'note' => null,
])

@if ($variant === 'static')
    <div {{ $attributes->merge(['class' => 'mx-auto w-full max-w-xs']) }}>
        <div class="rounded-[1.8rem] bg-gradient-to-b from-navy to-[#1b2f6e] p-5 text-center shadow-[var(--shadow-float)]">
            <div class="flex items-center justify-center gap-2">
                <img src="{{ asset('assets/images/mark.png') }}" alt="BadiliCash" class="h-7 w-7 rounded-md bg-white object-contain p-0.5" width="28" height="28">
                <span class="text-base font-bold tracking-wide text-white">BadiliCash</span>
            </div>
            <p class="mt-2 text-[10px] font-semibold tracking-[0.18em] text-green-soft uppercase">Static scanner</p>
            <div class="mt-4 rounded-2xl bg-white p-4">
                <x-branded-qr :size="148" pattern="static" :scanning="true" :showName="false" />
            </div>
            <p class="mt-4 text-sm font-semibold text-white">{{ $note ?? 'Scan · enter amount' }}</p>
            <p class="mt-1 rounded-full bg-white/10 px-3 py-1 text-xs text-white/80">Reusable counter QR</p>
        </div>
    </div>

@elseif ($variant === 'dynamic')
    <div {{ $attributes->merge(['class' => 'phone-shell mx-auto w-[250px] sm:w-[270px]']) }}>
        <div class="bg-gradient-to-b from-[#ecfdf3] to-white px-4 pb-7 pt-3">
            <div class="mx-auto h-5 w-24 rounded-full bg-[#0f1a3a]"></div>
            <div class="mt-4 flex items-center justify-between">
                <span class="text-[10px] text-muted">9:41</span>
                <div class="flex items-center gap-1.5">
                    <img src="{{ asset('assets/images/mark.png') }}" alt="BadiliCash" class="h-4 w-4 object-contain" width="16" height="16">
                    <span class="text-[11px] font-bold text-navy">BadiliCash</span>
                </div>
                <span class="rounded-full bg-green/15 px-2 py-0.5 text-[9px] font-bold text-green">LIVE</span>
            </div>
            <div class="mt-4 rounded-[1.4rem] border border-green/20 bg-white p-4 text-center">
                <p class="text-[10px] font-semibold tracking-[0.16em] text-green uppercase">{{ $note ?? 'Dynamic QR request' }}</p>
                <div class="mt-3 flex justify-center">
                    <x-branded-qr :size="140" pattern="dynamic" :scanning="true" :showName="false" />
                </div>
                <p class="mt-3 text-2xl font-bold text-navy-dark">{{ $amount }}</p>
                <p class="text-[11px] font-medium text-navy">ORD-4821 · locked</p>
                <div class="mt-3 flex items-center justify-center gap-2 text-[11px] font-semibold text-green">
                    <i data-lucide="timer" class="h-3.5 w-3.5"></i> Expires 02:59
                </div>
            </div>
            <div class="mx-auto mt-4 h-1 w-16 rounded-full bg-slate-300"></div>
        </div>
    </div>

@elseif ($variant === 'upi')
    <div {{ $attributes->merge(['class' => 'phone-shell mx-auto w-[250px] sm:w-[270px]']) }}>
        <div class="bg-gradient-to-b from-[#eef2ff] to-white px-4 pb-7 pt-3">
            <div class="mx-auto h-5 w-24 rounded-full bg-[#0f1a3a]"></div>
            <div class="mt-4 flex items-center justify-center gap-1.5">
                <img src="{{ asset('assets/images/mark.png') }}" alt="BadiliCash" class="h-4 w-4 object-contain" width="16" height="16">
                <span class="text-[11px] font-bold text-navy">BadiliCash UPI</span>
            </div>
            <div class="mt-4 rounded-[1.4rem] border border-navy/10 bg-white p-4 text-center">
                <p class="text-[10px] font-semibold tracking-[0.16em] text-navy uppercase">{{ $note ?? 'Pay with UPI' }}</p>
                <div class="mt-3 flex justify-center">
                    <x-branded-qr :size="132" pattern="upi" :scanning="true" :showName="false" />
                </div>
                <p class="mt-3 text-xl font-bold text-navy-dark">{{ $amount }}</p>
                <p class="mt-3 text-[10px] font-semibold tracking-wide text-muted uppercase">Open with</p>
                <div class="mt-2 flex items-center justify-center gap-2">
                    <img src="{{ asset('assets/images/apps/google-pay.svg') }}" alt="Google Pay" class="h-6 w-10 object-contain" loading="lazy">
                    <img src="{{ asset('assets/images/apps/phonepe.svg') }}" alt="PhonePe" class="h-5 w-12 object-contain" loading="lazy">
                    <img src="{{ asset('assets/images/apps/paytm.svg') }}" alt="Paytm" class="h-5 w-12 object-contain" loading="lazy">
                    <img src="{{ asset('assets/images/apps/bhim.svg') }}" alt="BHIM" class="h-5 w-12 object-contain" loading="lazy">
                </div>
            </div>
        </div>
    </div>

@elseif ($variant === 'link')
    <div {{ $attributes->merge(['class' => 'mx-auto w-full max-w-[280px] overflow-hidden rounded-[1.6rem] border border-slate-200 bg-white shadow-[var(--shadow-float)]']) }}>
        <div class="flex items-center gap-2 border-b border-slate-100 bg-canvas px-3 py-2">
            <span class="flex gap-1">
                <span class="h-2 w-2 rounded-full bg-red-400"></span>
                <span class="h-2 w-2 rounded-full bg-amber-400"></span>
                <span class="h-2 w-2 rounded-full bg-green"></span>
            </span>
            <div class="flex min-w-0 flex-1 items-center gap-1 rounded-full bg-white px-2 py-1 text-[10px] text-navy ring-1 ring-slate-200">
                <i data-lucide="link" class="h-3 w-3 shrink-0"></i>
                <span class="truncate">pay.badilicash.com/p/inv-2044</span>
            </div>
        </div>
        <div class="p-4 text-center">
            <div class="flex items-center justify-center gap-1.5">
                <img src="{{ asset('assets/images/mark.png') }}" alt="BadiliCash" class="h-5 w-5 object-contain" width="20" height="20">
                <span class="text-sm font-bold text-navy">BadiliCash</span>
            </div>
            <p class="mt-1 text-[10px] font-semibold tracking-[0.16em] text-muted uppercase">{{ $note ?? 'Payment link scanner' }}</p>
            <div class="mt-3 flex justify-center">
                <x-branded-qr :size="120" pattern="link" :scanning="false" :showName="false" />
            </div>
            <p class="mt-3 text-2xl font-bold text-navy-dark">{{ $amount }}</p>
            <p class="text-[11px] text-muted">Invoice INV-2044</p>
            <span class="btn-green mt-4 inline-flex w-full text-xs">Pay with BadiliCash</span>
        </div>
    </div>

@else
    <div {{ $attributes->merge(['class' => 'phone-shell mx-auto w-[250px] sm:w-[270px]']) }}>
        <div class="bg-gradient-to-b from-[#eef3fb] to-white px-4 pb-7 pt-3">
            <div class="mx-auto h-5 w-24 rounded-full bg-[#0f1a3a]"></div>
            <div class="mt-4 flex items-center justify-center gap-1.5">
                <img src="{{ asset('assets/images/mark.png') }}" alt="BadiliCash" class="h-4 w-4 object-contain" width="16" height="16">
                <span class="text-[11px] font-bold text-navy">BadiliCash</span>
            </div>
            <div class="mt-4 rounded-[1.4rem] border border-slate-200/80 bg-white p-4 text-center">
                <p class="text-[10px] font-semibold tracking-[0.16em] text-navy uppercase">{{ $note ?? 'Scan to pay with BadiliCash' }}</p>
                <div class="mt-3 flex justify-center">
                    <x-branded-qr :size="148" pattern="static" :scanning="true" :showName="false" />
                </div>
                <p class="mt-3 text-2xl font-bold text-navy-dark">{{ $amount }}</p>
            </div>
        </div>
    </div>
@endif

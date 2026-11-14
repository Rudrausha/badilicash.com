<div class="relative mx-auto h-[520px] w-full max-w-[540px]">
    <div class="absolute left-1/2 top-8 h-72 w-72 -translate-x-1/2 rounded-full bg-gradient-to-br from-navy/20 via-green/15 to-transparent blur-2xl"></div>
    <div class="spin-slow absolute left-1/2 top-10 h-80 w-80 -translate-x-1/2 rounded-full border border-dashed border-navy/15"></div>

    <div class="glass float-slower absolute left-0 top-16 z-10 hidden w-52 p-4 sm:block">
        <p class="text-[10px] font-semibold tracking-[0.16em] text-green uppercase">Live sample</p>
        <p class="mt-1 text-lg font-bold text-navy-dark">₹2,450.00</p>
        <p class="text-xs text-muted">UPI collection · illustrative</p>
        <div class="mt-3 h-1.5 overflow-hidden rounded-full bg-slate-100">
            <div class="h-full w-4/5 rounded-full bg-gradient-to-r from-navy to-green"></div>
        </div>
    </div>

    <div class="glass float-slow absolute right-0 top-24 z-20 hidden w-44 p-3 sm:block">
        <div class="flex items-center gap-2">
            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green text-white">
                <i data-lucide="check" class="h-4 w-4"></i>
            </span>
            <div>
                <p class="text-xs font-semibold text-navy-dark">Paid</p>
                <p class="text-[11px] text-muted">ORD-4821</p>
            </div>
        </div>
    </div>

    <div class="phone-shell absolute left-1/2 top-6 z-10 w-[250px] -translate-x-1/2 sm:w-[270px]">
        <div class="relative bg-gradient-to-b from-[#eef3fb] to-white px-4 pb-7 pt-3">
            <div class="mx-auto h-5 w-24 rounded-full bg-[#0f1a3a]"></div>
            <div class="mt-4 flex items-center justify-between text-[10px] text-muted">
                <span>9:41</span>
                <img src="{{ asset('assets/images/favicon.png') }}" alt="" class="h-5 w-5 rounded-md object-contain" width="20" height="20">
                <span>5G</span>
            </div>
            <div class="relative mt-4 overflow-hidden rounded-[1.4rem] border border-slate-200/80 bg-white p-4 text-center shadow-inner">
                <p class="text-[10px] font-semibold tracking-[0.18em] text-navy uppercase">Scan to pay</p>
                <div class="relative mx-auto mt-3 w-fit glow-green rounded-2xl bg-white p-2">
                    <x-qr-mark :size="148" />
                    <span class="scan-line pointer-events-none absolute left-3 right-3 h-0.5 rounded-full bg-green shadow-[0_0_16px_#239A45]"></span>
                </div>
                <p class="mt-3 text-2xl font-bold text-navy-dark">₹1,250.00</p>
                <p class="text-[11px] text-muted">Store checkout · sample</p>
                <div class="mt-3 inline-flex items-center gap-2 rounded-full bg-green/10 px-3 py-1 text-[11px] font-semibold text-green">
                    <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-green"></span>
                    Ready for scan
                </div>
            </div>
        </div>
    </div>

    <div class="glass float-x absolute bottom-6 left-2 z-20 hidden w-48 p-3 sm:block">
        <p class="text-[10px] font-semibold tracking-wide text-navy uppercase">Dynamic QR</p>
        <p class="mt-1 text-sm font-semibold text-navy-dark">Amount locked</p>
        <p class="text-[11px] text-muted">Expires in 02:59</p>
    </div>
</div>

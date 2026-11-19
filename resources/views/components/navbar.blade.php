@php
    $solutionsOpen = request()->routeIs('solutions', 'upi', 'qr', 'static-qr', 'dynamic-qr', 'payment-links', 'standard-sound-box', 'digital-sound-box', 'dynamic-sound-box');
    $soundBoxes = \App\Support\SoundBoxCatalog::all();
@endphp

<header
    x-data="{ open: false, solutions: false }"
    class="site-header"
>
    <div>
        <nav class="container-bc flex h-16 items-center gap-4" aria-label="Primary">
            <a href="{{ route('home') }}" class="flex shrink-0 items-center" aria-label="BadiliCash home">
                <img
                    src="{{ asset('assets/images/badilicash-logo.png') }}?v=3"
                    alt="BadiliCash"
                    class="h-9 w-auto"
                    width="220"
                    height="63"
                >
            </a>

            <div class="ml-4 hidden items-center lg:flex">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : '' }}">Home</a>
                <div class="relative" @mouseenter="solutions = true" @mouseleave="solutions = false">
                    <button
                        type="button"
                        class="nav-link {{ $solutionsOpen ? 'nav-link-active' : '' }}"
                        :aria-expanded="solutions.toString()"
                    >
                        Payments
                        <i data-lucide="chevron-down" class="h-3.5 w-3.5 opacity-70 transition" :class="solutions ? 'rotate-180' : ''"></i>
                    </button>
                    <div
                        x-show="solutions"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute left-0 top-full w-80 pt-3"
                        style="display: none;"
                    >
                        <div class="max-h-[70vh] overflow-y-auto rounded-2xl border border-slate-200 bg-white p-2 shadow-[var(--shadow-float)]">
                            <a href="{{ route('upi') }}" class="flex items-start gap-3 rounded-xl p-3 hover:bg-canvas">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-xl bg-navy/8 text-navy"><i data-lucide="smartphone" class="h-4 w-4"></i></span>
                                <span><span class="block text-sm font-semibold text-navy-dark">UPI Payments</span><span class="text-xs text-muted">Collect through unified payment experiences.</span></span>
                            </a>
                            <a href="{{ route('qr') }}" class="flex items-start gap-3 rounded-xl p-3 hover:bg-canvas">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-xl bg-green/10 text-green"><i data-lucide="qr-code" class="h-4 w-4"></i></span>
                                <span><span class="block text-sm font-semibold text-navy-dark">QR Code Payments</span><span class="text-xs text-muted">Scan-to-pay for counters and stores.</span></span>
                            </a>
                            <a href="{{ route('static-qr') }}" class="flex items-start gap-3 rounded-xl p-3 hover:bg-canvas">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-xl bg-navy/8 text-navy"><i data-lucide="scan-line" class="h-4 w-4"></i></span>
                                <span><span class="block text-sm font-semibold text-navy-dark">Static QR</span><span class="text-xs text-muted">Reusable QR for everyday collections.</span></span>
                            </a>
                            <a href="{{ route('dynamic-qr') }}" class="flex items-start gap-3 rounded-xl p-3 hover:bg-canvas">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-xl bg-green/10 text-green"><i data-lucide="refresh-cw" class="h-4 w-4"></i></span>
                                <span><span class="block text-sm font-semibold text-navy-dark">Dynamic QR</span><span class="text-xs text-muted">Unique QR for each payment request.</span></span>
                            </a>
                            <a href="{{ route('payment-links') }}" class="flex items-start gap-3 rounded-xl p-3 hover:bg-canvas">
                                <span class="mt-0.5 flex h-9 w-9 items-center justify-center rounded-xl bg-navy/8 text-navy"><i data-lucide="link" class="h-4 w-4"></i></span>
                                <span><span class="block text-sm font-semibold text-navy-dark">Payment Links</span><span class="text-xs text-muted">Share a link. Collect with context.</span></span>
                            </a>
                            <p class="px-3 pt-3 pb-1 text-[11px] font-semibold tracking-wide text-muted uppercase">QR Sound Boxes</p>
                            @foreach ($soundBoxes as $box)
                                <a href="{{ route($box['route']) }}" class="flex items-start gap-3 rounded-xl p-3 hover:bg-canvas">
                                    <span class="mt-0.5 flex h-9 w-9 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-canvas">
                                        <img src="{{ asset($box['image']) }}" alt="" class="h-9 w-9 object-contain">
                                    </span>
                                    <span><span class="block text-sm font-semibold text-navy-dark">{{ $box['name'] }}</span><span class="text-xs text-muted">{{ $box['menu'] }}</span></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <a href="{{ route('developers') }}" class="nav-link {{ request()->routeIs('developers') ? 'nav-link-active' : '' }}">Developers</a>
                <a href="{{ route('pricing') }}" class="nav-link {{ request()->routeIs('pricing') ? 'nav-link-active' : '' }}">Pricing</a>
                <a href="{{ route('how-it-works') }}" class="nav-link {{ request()->routeIs('how-it-works') ? 'nav-link-active' : '' }}">How it works</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'nav-link-active' : '' }}">About</a>
            </div>

            <div class="ml-auto hidden items-center gap-2.5 lg:flex">
                <a href="{{ route('contact') }}" class="inline-flex h-9 w-9 items-center justify-center rounded-md text-navy transition hover:bg-canvas" aria-label="Support">
                    <svg class="h-[18px] w-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                        <path stroke-linecap="round" d="M4.5 13.5v-1a7.5 7.5 0 0 1 15 0v1"/>
                        <path stroke-linecap="round" d="M4.5 13.5h2.2a1 1 0 0 1 1 1V18a1 1 0 0 1-1 1H5.5A1.5 1.5 0 0 1 4 17.5v-4zM19.5 13.5H17.3a1 1 0 0 0-1 1V18a1 1 0 0 0 1 1h1.2a1.5 1.5 0 0 0 1.5-1.5v-4z"/>
                    </svg>
                </a>
                <a href="{{ config('services.dashboard.login_url') }}" class="btn-login">Login</a>
                <a href="{{ config('services.dashboard.signup_url') }}" class="btn-signup">
                    Sign up
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
            </div>

            <button
                type="button"
                class="ml-auto inline-flex h-10 w-10 items-center justify-center rounded-md border border-[#c9d2e3] bg-white text-navy lg:hidden"
                @click="open = !open"
                :aria-expanded="open.toString()"
                aria-controls="mobile-nav"
                aria-label="Toggle menu"
            >
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/></svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="display: none;" aria-hidden="true"><path stroke-linecap="round" d="M6 6l12 12M18 6L6 18"/></svg>
            </button>
        </nav>

        <div
            id="mobile-nav"
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            class="border-t border-slate-100 bg-white lg:hidden"
            style="display: none;"
        >
            <div class="container-bc space-y-1 py-4">
                <a href="{{ route('home') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Home</a>
                <button type="button" class="flex w-full items-center justify-between rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas" @click="solutions = !solutions">
                    Payments <i data-lucide="chevron-down" class="h-4 w-4"></i>
                </button>
                <div x-show="solutions" class="ml-3 space-y-1 border-l border-slate-200 pl-3" style="display: none;">
                    <a href="{{ route('solutions') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">All solutions</a>
                    <a href="{{ route('upi') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">UPI Payments</a>
                    <a href="{{ route('qr') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">QR Code Payments</a>
                    <a href="{{ route('static-qr') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">Static QR</a>
                    <a href="{{ route('dynamic-qr') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">Dynamic QR</a>
                    <a href="{{ route('payment-links') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">Payment Links</a>
                    <p class="px-3 pt-2 text-[11px] font-semibold tracking-wide text-muted uppercase">QR Sound Boxes</p>
                    @foreach ($soundBoxes as $box)
                        <a href="{{ route($box['route']) }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">{{ $box['name'] }}</a>
                    @endforeach
                </div>
                <a href="{{ route('developers') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Developers</a>
                <a href="{{ route('pricing') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Pricing</a>
                <a href="{{ route('how-it-works') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">How it works</a>
                <a href="{{ route('about') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">About</a>
                <a href="{{ route('contact') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Support</a>
                <div class="flex gap-2 pt-3">
                    <a href="{{ config('services.dashboard.login_url') }}" class="btn-login flex-1">Login</a>
                    <a href="{{ config('services.dashboard.signup_url') }}" class="btn-signup flex-1">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</header>

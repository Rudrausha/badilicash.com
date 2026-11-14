@php
    $solutionsOpen = request()->routeIs('solutions', 'upi', 'qr', 'static-qr', 'dynamic-qr', 'payment-links');
@endphp

<header
    x-data="{ open: false, solutions: false, scrolled: false }"
    x-init="scrolled = window.scrollY > 8"
    @scroll.window="scrolled = window.scrollY > 8"
    class="sticky top-0 z-50"
>
    <div
        class="border-b transition duration-300"
        :class="scrolled || open ? 'border-slate-200/80 bg-white/90 shadow-sm backdrop-blur-xl' : 'border-transparent bg-white/70 backdrop-blur-md'"
    >
        <nav class="container-bc flex h-[4.5rem] items-center justify-between gap-4" aria-label="Primary">
            <a href="{{ route('home') }}" class="flex shrink-0 items-center" aria-label="BadiliCash home">
                <img
                    src="{{ asset('assets/images/badilicash-logo.png') }}"
                    alt="BadiliCash"
                    class="h-10 w-auto sm:h-11"
                    width="220"
                    height="63"
                >
            </a>

            <div class="hidden items-center gap-1 lg:flex">
                <a href="{{ route('home') }}" class="rounded-full px-3 py-2 text-sm font-medium {{ request()->routeIs('home') ? 'text-navy bg-canvas' : 'text-slate-600 hover:bg-canvas hover:text-navy' }}">Home</a>
                <a href="{{ route('about') }}" class="rounded-full px-3 py-2 text-sm font-medium {{ request()->routeIs('about') ? 'text-navy bg-canvas' : 'text-slate-600 hover:bg-canvas hover:text-navy' }}">About Us</a>

                <div class="relative" @mouseenter="solutions = true" @mouseleave="solutions = false">
                    <button
                        type="button"
                        class="inline-flex items-center gap-1 rounded-full px-3 py-2 text-sm font-medium {{ $solutionsOpen ? 'text-navy bg-canvas' : 'text-slate-600 hover:bg-canvas hover:text-navy' }}"
                        :aria-expanded="solutions.toString()"
                    >
                        Solutions
                        <i data-lucide="chevron-down" class="h-4 w-4 transition" :class="solutions ? 'rotate-180' : ''"></i>
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
                        <div class="rounded-2xl border border-slate-200 bg-white p-2 shadow-[var(--shadow-float)]">
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
                        </div>
                    </div>
                </div>

                <a href="{{ route('developers') }}" class="rounded-full px-3 py-2 text-sm font-medium {{ request()->routeIs('developers') ? 'text-navy bg-canvas' : 'text-slate-600 hover:bg-canvas hover:text-navy' }}">Developers</a>
                <a href="{{ route('pricing') }}" class="rounded-full px-3 py-2 text-sm font-medium {{ request()->routeIs('pricing') ? 'text-navy bg-canvas' : 'text-slate-600 hover:bg-canvas hover:text-navy' }}">Pricing</a>
                <a href="{{ route('contact') }}" class="rounded-full px-3 py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'text-navy bg-canvas' : 'text-slate-600 hover:bg-canvas hover:text-navy' }}">Contact Us</a>
            </div>

            <div class="hidden items-center gap-2 lg:flex">
                <a href="{{ route('contact', ['intent' => 'login']) }}" class="btn-ghost">Login</a>
                <a href="{{ route('contact', ['intent' => 'start']) }}" class="btn-green">Get Started</a>
            </div>

            <button
                type="button"
                class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-navy lg:hidden"
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
            class="border-t border-slate-100 lg:hidden"
            style="display: none;"
        >
            <div class="container-bc space-y-1 py-4">
                <a href="{{ route('home') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Home</a>
                <a href="{{ route('about') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">About Us</a>
                <button type="button" class="flex w-full items-center justify-between rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas" @click="solutions = !solutions">
                    Solutions <i data-lucide="chevron-down" class="h-4 w-4"></i>
                </button>
                <div x-show="solutions" class="ml-3 space-y-1 border-l border-slate-200 pl-3" style="display: none;">
                    <a href="{{ route('solutions') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">All solutions</a>
                    <a href="{{ route('upi') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">UPI Payments</a>
                    <a href="{{ route('qr') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">QR Code Payments</a>
                    <a href="{{ route('static-qr') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">Static QR</a>
                    <a href="{{ route('dynamic-qr') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">Dynamic QR</a>
                    <a href="{{ route('payment-links') }}" class="block rounded-lg px-3 py-2 text-sm text-muted hover:text-navy">Payment Links</a>
                </div>
                <a href="{{ route('developers') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Developers</a>
                <a href="{{ route('pricing') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Pricing</a>
                <a href="{{ route('contact') }}" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-navy-dark hover:bg-canvas">Contact Us</a>
                <div class="flex gap-2 pt-3">
                    <a href="{{ route('contact', ['intent' => 'login']) }}" class="btn-outline flex-1">Login</a>
                    <a href="{{ route('contact', ['intent' => 'start']) }}" class="btn-primary flex-1">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</header>

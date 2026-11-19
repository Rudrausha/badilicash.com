@props([
    'title' => 'Ready to Simplify Your Payment Experience?',
    'text' => 'Discover smarter ways to collect digital payments with BadiliCash.',
])

<section class="container-bc py-8 pb-20">
    <div class="cta-gradient relative overflow-hidden rounded-[2.2rem] px-8 py-16 text-white shadow-[var(--shadow-float)]">
        <div class="pointer-events-none absolute inset-0 opacity-30" style="background-image: linear-gradient(rgb(255 255 255 / 0.08) 1px, transparent 1px), linear-gradient(90deg, rgb(255 255 255 / 0.08) 1px, transparent 1px); background-size: 42px 42px;"></div>
        <div class="absolute -right-16 -top-16 h-64 w-64 rounded-full bg-white/10 blur-2xl"></div>
        <div class="absolute -bottom-24 left-16 h-56 w-56 rounded-full bg-green/40 blur-2xl"></div>
        <div class="relative mx-auto max-w-3xl text-center">
            <p class="mb-4 inline-flex rounded-full border border-white/20 bg-white/10 px-3 py-1 text-[11px] font-semibold tracking-[0.16em] uppercase">BadiliCash</p>
            <h2 class="text-[1.45rem] font-bold tracking-tight sm:text-[1.7rem]">{{ $title }}</h2>
            <p class="mt-4 text-base text-white/80">{{ $text }}</p>
            <div class="mt-8 flex flex-wrap justify-center gap-3">
                <a href="{{ route('contact', ['intent' => 'start']) }}" class="inline-flex items-center justify-center rounded-full bg-white px-6 py-3 text-sm font-semibold text-navy shadow-lg hover:bg-canvas">Get Started</a>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-full border border-white/35 bg-white/5 px-6 py-3 text-sm font-semibold text-white backdrop-blur hover:bg-white/10">Contact Us</a>
            </div>
        </div>
    </div>
</section>

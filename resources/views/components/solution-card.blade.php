@props([
    'href',
    'icon' => 'sparkles',
    'title',
    'delay' => '0',
])

<a href="{{ $href }}" class="card card-hover group relative block overflow-hidden p-7" data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="absolute -right-8 -top-8 h-24 w-24 rounded-full bg-gradient-to-br from-navy/5 to-green/10 transition duration-300 group-hover:scale-125"></div>
    <span class="icon-badge relative">
        <i data-lucide="{{ $icon }}" class="h-5 w-5"></i>
    </span>
    <h3 class="relative mt-5 text-lg font-bold text-navy-dark">{{ $title }}</h3>
    <p class="relative mt-2 text-sm leading-relaxed text-muted">{{ $slot }}</p>
    <span class="relative mt-6 inline-flex items-center gap-1 text-sm font-semibold text-navy transition-all group-hover:gap-2">
        Learn more <i data-lucide="arrow-right" class="h-4 w-4"></i>
    </span>
</a>

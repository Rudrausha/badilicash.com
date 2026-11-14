@props(['eyebrow' => 'BadiliCash', 'title', 'cta' => null, 'ctaHref' => null])

<section class="mesh border-b border-slate-100/80">
    <div class="container-bc grid items-center gap-10 py-16 lg:grid-cols-12 lg:py-24">
        <div class="lg:col-span-7" data-aos="fade-up">
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h1 class="display mt-6">{{ $title }}</h1>
            <p class="lead mt-5">{{ $slot }}</p>
            @if ($cta)
                <div class="mt-8 flex flex-wrap gap-3">
                    <x-button :href="$ctaHref ?? route('contact', ['intent' => 'start'])">{{ $cta }}</x-button>
                    <x-button href="{{ route('solutions') }}" variant="outline">Explore solutions</x-button>
                </div>
            @endif
        </div>
        <div class="lg:col-span-5" data-aos="fade-left">
            @if (isset($visual) && trim($visual) !== '')
                {{ $visual }}
            @else
                <x-deco-panel :label="$eyebrow" />
            @endif
        </div>
    </div>
</section>

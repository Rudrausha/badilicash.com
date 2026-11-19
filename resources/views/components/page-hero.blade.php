@props(['eyebrow' => 'BadiliCash', 'title', 'cta' => null, 'ctaHref' => null, 'roomy' => false])

<section class="mesh color-round border-b border-slate-100/80 {{ $roomy ? 'page-hero-roomy' : '' }}">
    <div class="container-bc page-hero-inner relative z-10 grid items-center gap-8 py-12 lg:grid-cols-12 {{ $roomy ? '' : 'lg:py-16' }}">
        <div class="lg:col-span-7" data-aos="fade-up">
            <p class="eyebrow">{{ $eyebrow }}</p>
            <h1 class="display mt-4">{{ $title }}</h1>
            <p class="lead mt-4">{{ $slot }}</p>
            @if ($cta)
                <div class="mt-8 flex flex-wrap gap-3">
                    <x-button :href="$ctaHref ?? route('contact', ['intent' => 'start'])">{{ $cta }}</x-button>
                    <x-button href="{{ route('solutions') }}" variant="outline">Explore solutions</x-button>
                </div>
            @endif
        </div>
        <div class="min-w-0 lg:col-span-5" data-aos="fade-left">
            @if (isset($visual) && trim($visual) !== '')
                {{ $visual }}
            @else
                <x-deco-panel :label="$eyebrow" :large="$roomy" />
            @endif
        </div>
    </div>
</section>
@if ($roomy)
<style>
    .page-hero-roomy .page-hero-inner {
        padding-top: 4.75rem;
        padding-bottom: 4.75rem;
    }
    @media (min-width: 1024px) {
        .page-hero-roomy .page-hero-inner {
            min-height: 640px;
            padding-top: 6.5rem;
            padding-bottom: 6.5rem;
        }
    }
</style>
@endif

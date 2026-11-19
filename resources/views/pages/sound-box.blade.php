@extends('layouts.app')

@section('title', $product['name'].' — BadiliCash')
@section('description', $product['summary'])

@section('content')
    <x-page-hero
        eyebrow="QR Sound Box"
        :title="$product['headline']"
        cta="Order now"
        :ctaHref="route('contact', ['intent' => 'order', 'product' => $product['name']])"
    >
        {{ $product['intro'] }}
        <x-slot:visual>
            <img
                src="{{ asset($product['image']) }}"
                alt="{{ $product['imageAlt'] }}"
                class="mx-auto h-auto w-full object-contain"
            >
        </x-slot:visual>
    </x-page-hero>

    <section class="container-bc py-20">
        <div class="mx-auto max-w-2xl">
            <p class="eyebrow">From the product sheet</p>
            <h2 class="section-kicker mt-4">{{ $product['name'] }} features</h2>
        </div>
        <div class="mt-10 grid gap-5 md:grid-cols-2">
            @foreach ($product['features'] as $feature)
                <article class="card p-6" data-aos="fade-up">
                    <h3 class="text-base font-semibold text-navy-dark">{{ $feature[0] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-muted">{{ $feature[1] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    @if (count($product['gallery']))
        <section class="bg-canvas py-20">
            <div class="container-bc grid items-center gap-10 lg:grid-cols-2">
                <div>
                    <p class="eyebrow">On the device</p>
                    <h2 class="section-kicker mt-4">Controls and speaker</h2>
                    <p class="mt-4 text-muted">Power, mode, volume, and the speaker sit on the back of the Dynamic QR Sound Box, with the amount shown on the top display.</p>
                </div>
                @foreach ($product['gallery'] as $shot)
                    <img src="{{ asset($shot['src']) }}" alt="{{ $shot['alt'] }}" class="mx-auto w-full max-w-md rounded-3xl bg-white object-contain">
                @endforeach
            </div>
        </section>
    @endif

    <x-cta-band />
@endsection

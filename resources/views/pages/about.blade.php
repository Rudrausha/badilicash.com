@extends('layouts.app')

@section('title', 'About Us — BadiliCash')
@section('description', 'Learn about BadiliCash, our mission to simplify digital payment collections, and the approach behind our QR, UPI and API experiences.')

@section('content')
    <x-page-hero eyebrow="About BadiliCash" title="A payment experience built for modern businesses." cta="Talk to us" :ctaHref="route('contact')">
        BadiliCash is a fintech brand focused on making digital collections feel simple — for the merchant creating a request and the customer completing it.
        <x-slot:visual>
            <div class="card p-8">
                <img src="{{ asset('assets/images/badilicash-logo.png') }}" alt="BadiliCash" class="h-12 w-auto">
                <p class="mt-6 text-sm text-muted">Navy for trust. Green for completion. White for clarity. The identity is designed to feel calm, precise and ready for money movement.</p>
            </div>
        </x-slot:visual>
    </x-page-hero>

    <section class="container-bc grid gap-8 py-20 lg:grid-cols-3">
        @foreach ([
            ['Our Mission', 'Make digital payment collection easier to understand, easier to present and easier to complete.'],
            ['Our Vision', 'Become the collection layer businesses reach for when a QR, a link or an API request is the next step.'],
            ['Our Approach', 'Lead with product clarity. Show realistic journeys. Never overstate integrations, certifications or live processing claims.'],
        ] as $i => $block)
            <article class="card p-8" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <h2 class="text-xl font-semibold text-navy-dark">{{ $block[0] }}</h2>
                <p class="mt-3 text-sm leading-relaxed text-muted">{{ $block[1] }}</p>
            </article>
        @endforeach
    </section>

    <section class="bg-canvas py-20">
        <div class="container-bc grid items-center gap-12 lg:grid-cols-2">
            <div data-aos="fade-right">
                <p class="eyebrow">Our technology</p>
                <h2 class="mt-4 text-3xl font-semibold text-navy-dark">Designed around requests, not noise</h2>
                <p class="mt-4 text-muted">Every collection starts as a payment request. From there, BadiliCash can present a Static QR, a Dynamic QR or a payment link, then surface a confirmation state. APIs follow the same model so product and engineering share one language.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2" data-aos="fade-left">
                @foreach (['Request objects', 'QR presentation', 'Link sharing', 'Status updates'] as $item)
                    <div class="card p-5 text-sm font-semibold text-navy-dark">{{ $item }}</div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-bc py-20">
        <h2 class="text-3xl font-semibold text-navy-dark">Why businesses choose us</h2>
        <div class="mt-10 grid gap-5 md:grid-cols-3">
            @foreach ([
                ['Clear product surfaces', 'UPI, QR and links are explained as they actually work — no theatre.'],
                ['Developer-ready thinking', 'Samples, webhooks and request IDs are first-class, even while APIs are still examples.'],
                ['A trustworthy visual system', 'The brand is built to feel international, calm and operationally serious.'],
            ] as $item)
                <article class="card p-6">
                    <h3 class="font-semibold text-navy-dark">{{ $item[0] }}</h3>
                    <p class="mt-2 text-sm text-muted">{{ $item[1] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <x-cta-band title="Let’s talk about your collection flow" text="Tell us how you currently accept payments. We’ll map a BadiliCash journey that fits." />
@endsection

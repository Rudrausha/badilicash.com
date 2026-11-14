@extends('layouts.app')

@section('title', 'How It Works — BadiliCash')
@section('description', 'See the BadiliCash payment experience from merchant onboarding through payment request, QR or link, customer payment, confirmation and API notification.')

@section('content')
    <x-page-hero eyebrow="How it works" title="From onboarding to confirmation, in one sequence." cta="Talk to us">
        BadiliCash is organised around a payment request. Everything else — QR, link, customer action, confirmation and developer notification — hangs off that object.
    </x-page-hero>

    <section class="container-bc py-20">
        <ol class="relative space-y-8 before:absolute before:top-4 before:bottom-4 before:left-[1.15rem] before:w-px before:bg-gradient-to-b before:from-navy before:to-green lg:before:left-1/2">
            @foreach ([
                ['Merchant onboarding concept', 'A business is introduced to BadiliCash and prepared to create collection requests. Live KYC and account provisioning belong to a later phase.'],
                ['Payment request creation', 'Amount, currency, reference and optional note are captured as a request.'],
                ['QR or payment link generation', 'The same request can be presented as a Static QR, Dynamic QR or shareable URL.'],
                ['Customer payment', 'The customer scans or opens the request and completes payment in their preferred app.'],
                ['Payment confirmation', 'The interface moves to a paid, pending or expired state so staff can see what happened.'],
                ['API notification concept', 'A webhook-style callback can tell your system the same status, using sample payloads until live APIs ship.'],
            ] as $i => $step)
                <li class="relative grid items-start gap-6 lg:grid-cols-2" data-aos="fade-up">
                    <div class="{{ $i % 2 === 1 ? 'lg:order-2 lg:text-left' : 'lg:text-right' }} pl-12 lg:pl-0">
                        <span class="text-sm font-semibold text-green">Step {{ $i + 1 }}</span>
                        <h2 class="mt-2 text-2xl font-semibold text-navy-dark">{{ $step[0] }}</h2>
                        <p class="mt-2 text-sm text-muted">{{ $step[1] }}</p>
                    </div>
                    <div class="absolute left-0 top-1 flex h-9 w-9 items-center justify-center rounded-full bg-navy text-xs font-semibold text-white lg:left-1/2 lg:-translate-x-1/2">{{ $i + 1 }}</div>
                    <div class="{{ $i % 2 === 1 ? 'lg:order-1' : '' }} hidden lg:block"></div>
                </li>
            @endforeach
        </ol>
    </section>
    <x-cta-band title="See it mapped to your business" text="Tell us whether you collect at a counter, through invoices, or inside a product — we’ll sketch the journey." />
@endsection

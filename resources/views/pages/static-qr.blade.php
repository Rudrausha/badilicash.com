@extends('layouts.app')

@section('title', 'Static QR Payments — BadiliCash')
@section('description', 'Learn how BadiliCash Static QR works: a reusable merchant QR for convenient, everyday payment collection.')

@php
    $faqs = [
        ['q' => 'Can I print a Static QR?', 'a' => 'Yes. Static QR is designed to be displayed on a counter, table tent, poster or screen and reused across many payments.'],
        ['q' => 'Who enters the amount?', 'a' => 'Typically the customer enters the amount in their payment app after scanning, because the QR itself is not bound to a single invoice.'],
        ['q' => 'When should I use Dynamic QR instead?', 'a' => 'Use Dynamic QR when the amount and reference must be locked before the customer pays — for example an order total.'],
    ];
@endphp

@section('content')
    <x-page-hero eyebrow="Static QR" title="One reusable code. Many everyday collections." cta="Get Started">
        A Static QR identifies the merchant or collection point. It stays the same from payment to payment, which makes it ideal for counters, cafés and service desks.
        <x-slot:visual>
            <x-scanner variant="static" />
        </x-slot:visual>
    </x-page-hero>

    <section class="container-bc grid items-center gap-12 py-20 lg:grid-cols-2">
        <div>
            <h2 class="text-3xl font-semibold text-navy-dark">What is Static QR?</h2>
            <p class="mt-4 text-muted">It is a durable scannable identity. Customers scan, enter an amount, and complete payment. The merchant does not need to generate a new code for each sale.</p>
            <ul class="mt-6 space-y-3 text-sm text-muted">
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Reusable QR code.</li>
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Convenient payment collection.</li>
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Merchant identification.</li>
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Easy payment experience.</li>
            </ul>
        </div>
        <div class="card p-8 text-center">
            <p class="text-xs font-semibold tracking-wide text-navy uppercase">Merchant scanner display</p>
            <div class="mt-5">
                <x-scanner variant="static" note="Scan with BadiliCash" />
            </div>
        </div>
    </section>

    <section class="bg-canvas py-20">
        <div class="container-bc">
            <h2 class="text-3xl font-semibold text-navy-dark">How Static QR works</h2>
            <ol class="mt-10 grid gap-5 md:grid-cols-4">
                @foreach (['Display the reusable QR', 'Customer scans the code', 'Customer enters the amount', 'Payment is confirmed'] as $i => $s)
                    <li class="card p-6">
                        <span class="text-sm font-semibold text-green">Step {{ $i + 1 }}</span>
                        <p class="mt-2 font-semibold text-navy-dark">{{ $s }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="container-bc py-20">
        <h2 class="mb-6 text-2xl font-semibold text-navy-dark">Static QR FAQs</h2>
        <x-faq-list :items="$faqs" />
    </section>
    <x-cta-band />
@endsection

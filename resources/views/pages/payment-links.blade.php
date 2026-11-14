@extends('layouts.app')

@section('title', 'Payment Links — BadiliCash')
@section('description', 'Share BadiliCash payment links for invoices, remote collections and digital checkout without a physical QR display.')

@php
    $faqs = [
        ['q' => 'What is a payment link?', 'a' => 'A payment link is a URL that opens a payment request for the customer — the same request object you might otherwise show as a Dynamic QR.'],
        ['q' => 'Where can I share it?', 'a' => 'Anywhere a URL can travel: chat, email, SMS, invoices or a website button. This phase shows the concept, not a live link generator backend.'],
        ['q' => 'Can a link expire?', 'a' => 'Yes, as a product concept. Time-limited links follow the same idea as time-limited Dynamic QR requests.'],
    ];
@endphp

@section('content')
    <x-page-hero eyebrow="Payment Links" title="Send a link. Collect with context." cta="Get Started">
        Payment links turn a BadiliCash request into something you can share. The customer opens the URL, sees the amount and reference, and completes payment in their usual flow.
        <x-slot:visual>
            <x-scanner variant="link" amount="₹18,500.00" note="Payment link" />
        </x-slot:visual>
    </x-page-hero>

    <section class="container-bc grid items-center gap-12 py-20 lg:grid-cols-2">
        <div>
            <h2 class="text-3xl font-semibold text-navy-dark">Link generation illustration</h2>
            <p class="mt-4 text-muted">Create a request, receive a URL, share it. The customer journey is the same whether they arrived from a QR or a link.</p>
            <ul class="mt-6 space-y-3 text-sm text-muted">
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Amount and reference stay visible.</li>
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> No counter hardware required.</li>
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Useful for invoices and remote sales.</li>
            </ul>
        </div>
        <div class="card p-6" data-aos="fade-left">
            <p class="text-xs font-semibold tracking-wide text-navy uppercase">Shareable payment link mockup</p>
            <div class="mt-4 rounded-2xl bg-canvas p-4 font-mono text-sm text-navy">
                https://pay.example.badilicash.com/p/ord-4821
            </div>
            <p class="mt-3 text-[11px] text-muted">Example URL pattern — not a live checkout.</p>
            <div class="mt-6 rounded-2xl border border-slate-200 p-5">
                <p class="text-sm text-muted">Acme Studio · Invoice</p>
                <p class="mt-1 text-3xl font-semibold text-navy-dark">₹18,500.00</p>
                <p class="mt-1 text-xs text-muted">Reference INV-2044</p>
                <span class="btn-primary mt-5 inline-flex w-full">Pay now (sample)</span>
            </div>
        </div>
    </section>

    <section class="bg-canvas py-20">
        <div class="container-bc">
            <h2 class="text-3xl font-semibold text-navy-dark">Customer payment journey</h2>
            <ol class="mt-10 grid gap-5 md:grid-cols-4">
                @foreach (['Merchant generates a link', 'Link is shared with the customer', 'Customer opens amount and details', 'Payment confirmation is shown'] as $i => $s)
                    <li class="card p-6">
                        <span class="text-sm font-semibold text-green">0{{ $i + 1 }}</span>
                        <p class="mt-3 font-semibold text-navy-dark">{{ $s }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="container-bc py-20">
        <h2 class="mb-6 text-2xl font-semibold text-navy-dark">Payment link FAQs</h2>
        <x-faq-list :items="$faqs" />
    </section>
    <x-cta-band />
@endsection

@extends('layouts.app')

@section('title', 'QR Code Payments — BadiliCash')
@section('description', 'Accept scan-to-pay collections with BadiliCash QR code payments, including Static QR and Dynamic QR presentation.')

@section('content')
    <x-page-hero eyebrow="QR Code Payments" title="Put a scannable collection in front of your customer." cta="Compare QR types">
        QR payments turn a payment request into something a camera can understand. BadiliCash supports reusable Static QR and request-specific Dynamic QR.
        <x-slot:visual>
            <div class="relative mx-auto w-fit">
                <div class="phone-shell w-56 bg-white p-6">
                    <p class="text-center text-xs font-semibold text-navy">Scan</p>
                    <div class="relative mt-3">
                        <x-qr-mark :size="140" />
                        <span class="scan-line absolute left-2 right-2 h-0.5 bg-green"></span>
                    </div>
                </div>
            </div>
        </x-slot:visual>
    </x-page-hero>

    <section class="container-bc grid gap-6 py-20 md:grid-cols-2">
        <a href="{{ route('static-qr') }}" class="card card-hover p-8">
            <h2 class="text-2xl font-semibold text-navy-dark">Static QR</h2>
            <p class="mt-3 text-muted">Print it, display it, reuse it. The customer enters the amount.</p>
            <span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-navy">Open Static QR <i data-lucide="arrow-right" class="h-4 w-4"></i></span>
        </a>
        <a href="{{ route('dynamic-qr') }}" class="card card-hover p-8">
            <h2 class="text-2xl font-semibold text-navy-dark">Dynamic QR</h2>
            <p class="mt-3 text-muted">Generate a fresh code for each invoice, order or counter ticket.</p>
            <span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-navy">Open Dynamic QR <i data-lucide="arrow-right" class="h-4 w-4"></i></span>
        </a>
    </section>
    <x-cta-band />
@endsection

@extends('layouts.app')

@section('title', 'Payment Solutions — BadiliCash')
@section('description', 'Explore BadiliCash payment solutions including UPI, QR code payments, Static QR, Dynamic QR, payment links, checkout and API integration.')

@php
    $solutions = [
        ['UPI Payments', 'A unified customer payment experience for app-based collections.', route('upi'), 'smartphone', ['Familiar customer journey', 'Works alongside QR presentation', 'Suitable for in-app and counter flows']],
        ['QR Code Payments', 'Scan-to-pay for physical and assisted digital checkouts.', route('qr'), 'qr-code', ['Fast customer action', 'Works with printed or on-screen codes', 'Pairs with Static or Dynamic modes']],
        ['Static QR', 'One reusable code that identifies the merchant or till.', route('static-qr'), 'scan-line', ['Reusable display', 'Customer-entered amount', 'Ideal for counters and tables']],
        ['Dynamic QR', 'A unique code generated for a single payment request.', route('dynamic-qr'), 'refresh-cw', ['Locked amount', 'Payment reference', 'Optional expiry window']],
        ['Payment Links', 'A shareable URL that carries the same request as a QR.', route('payment-links'), 'link', ['No hardware required', 'Easy to send on chat or email', 'Useful for invoices and remote sales']],
        ['Payment Checkout', 'A guided confirmation experience after the customer opens a request.', route('how-it-works'), 'credit-card', ['Amount and reference in view', 'Clear success state', 'Designed for digital businesses']],
        ['API Integration', 'Create requests and receive status updates from your own stack.', route('developers'), 'code', ['Pay-in sample', 'Dynamic QR sample', 'Webhook concept']],
    ];
@endphp

@section('content')
    <x-page-hero eyebrow="Payment solutions" title="Every collection path, designed as one system." cta="Get Started">
        Whether the customer is standing at a counter or opening a link on their phone, BadiliCash keeps the request, the presentation and the confirmation in the same story.
    </x-page-hero>

    <section class="container-bc space-y-8 py-20">
        @foreach ($solutions as $i => $s)
            <article class="card grid items-center gap-8 p-8 lg:grid-cols-12" data-aos="fade-up">
                <div class="lg:col-span-7 {{ $i % 2 === 1 ? 'lg:order-2' : '' }}">
                    <span class="icon-badge"><i data-lucide="{{ $s[3] }}" class="h-5 w-5"></i></span>
                    <h2 class="mt-5 text-2xl font-semibold text-navy-dark">{{ $s[0] }}</h2>
                    <p class="mt-3 text-muted">{{ $s[1] }}</p>
                    <ul class="mt-5 grid gap-2 sm:grid-cols-3">
                        @foreach ($s[4] as $f)
                            <li class="rounded-2xl bg-canvas px-3 py-2 text-xs font-medium text-navy">{{ $f }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ $s[2] }}" class="btn-primary mt-6">Learn more</a>
                </div>
                <div class="flex justify-center lg:col-span-5 {{ $i % 2 === 1 ? 'lg:order-1' : '' }}">
                    <div class="rounded-[2rem] bg-canvas p-6">
                        @if ($s[0] === 'UPI Payments')
                            <x-scanner variant="upi" amount="₹1,250.00" />
                        @elseif ($s[0] === 'Static QR' || $s[0] === 'QR Code Payments')
                            <x-scanner variant="static" />
                        @elseif ($s[0] === 'Dynamic QR')
                            <x-scanner variant="dynamic" amount="₹1,250.00" />
                        @elseif ($s[0] === 'Payment Links')
                            <x-scanner variant="link" amount="₹18,500.00" />
                        @else
                            <div class="flex h-40 w-40 items-center justify-center rounded-3xl bg-gradient-to-br from-navy to-green text-white">
                                <i data-lucide="{{ $s[3] }}" class="h-12 w-12"></i>
                            </div>
                        @endif
                    </div>
                </div>
            </article>
        @endforeach
    </section>

    <section class="bg-canvas py-20">
        <div class="container-bc">
            <div class="mx-auto max-w-2xl text-center">
                <p class="eyebrow mx-auto">QR Sound Boxes</p>
                <h2 class="section-kicker">QR sound boxes for the counter</h2>
                <p class="mt-4 text-muted">Standard, Digital, and Dynamic QR Sound Boxes show a scannable QR on the device and confirm the payment out loud.</p>
            </div>
            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                @foreach (\App\Support\SoundBoxCatalog::all() as $box)
                    <article class="card flex flex-col p-6">
                        <img src="{{ asset($box['image']) }}" alt="{{ $box['imageAlt'] }}" class="mx-auto h-64 w-full object-contain">
                        <h3 class="mt-4 text-xl font-semibold text-navy-dark">{{ $box['name'] }}</h3>
                        <ul class="mt-4 space-y-2 text-sm text-muted">
                            @foreach (array_slice($box['features'], 0, 4) as $feature)
                                <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-green"></i> {{ $feature[0] }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route($box['route']) }}" class="btn-primary mt-6">View QR and features</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <x-cta-band />
@endsection

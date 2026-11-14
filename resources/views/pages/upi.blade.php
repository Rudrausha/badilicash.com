@extends('layouts.app')

@section('title', 'UPI Payments — BadiliCash')
@section('description', 'Understand how BadiliCash presents UPI-style payment collections, QR intent concepts and customer payment flows. Application logos are illustrative, not partnership claims.')

@php
    $faqs = [
        ['q' => 'Does BadiliCash replace a customer’s UPI app?', 'a' => 'No. BadiliCash is designed to present a payment request. Customers complete payment in the application they already use, where that path is available.'],
        ['q' => 'Do you officially integrate with specific UPI apps?', 'a' => 'This website does not claim verified, live integrations with any particular UPI application. App names or tiles you see here are illustrative of a typical customer choice screen.'],
        ['q' => 'What is UPI intent?', 'a' => 'UPI intent is a pattern where a payment request can be handed to a compatible app on the customer’s device, instead of only showing a QR to scan.'],
    ];
@endphp

@section('content')
    <x-page-hero eyebrow="UPI Payments" title="A unified way to collect, a familiar way to pay." cta="Talk to sales">
        BadiliCash helps businesses present UPI-style collection requests — as a QR, as a link, or as an on-device intent concept — without pretending the customer’s bank app is ours.
        <x-slot:visual>
            <x-scanner variant="upi" amount="₹1,250.00" />
        </x-slot:visual>
    </x-page-hero>

    <section class="container-bc grid items-center gap-12 py-20 lg:grid-cols-2">
        <div data-aos="fade-right">
            <h2 class="text-3xl font-semibold text-navy-dark">UPI QR illustration</h2>
            <p class="mt-4 text-muted">A UPI QR encodes a collection address so a customer can scan, confirm and pay. BadiliCash uses this as a presentation layer on top of a payment request.</p>
            <ul class="mt-6 space-y-3 text-sm text-muted">
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Amount can be open (Static) or locked (Dynamic).</li>
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Reference stays attached to the request.</li>
                <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i> Confirmation is shown as a product state, not a bank guarantee on this demo site.</li>
            </ul>
        </div>
        <div class="flex justify-center" data-aos="zoom-in">
            <div class="rounded-[2rem] bg-canvas p-8">
                <x-scanner variant="upi" amount="₹1,250.00" note="Pay with UPI" />
            </div>
        </div>
    </section>

    <section class="bg-canvas py-20">
        <div class="container-bc">
            <h2 class="text-3xl font-semibold text-navy-dark">UPI intent concept</h2>
            <p class="mt-3 max-w-2xl text-muted">On a phone, a payment request can be offered as an intent — the device suggests compatible apps. These tiles are <strong class="font-semibold text-navy-dark">reference apps</strong> customers often use. They are illustrative of a typical chooser and are not certified partner integrations.</p>
            <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
                @foreach ([
                    ['Google Pay', 'GPay', 'google-pay.svg', 'h-14 w-14'],
                    ['PhonePe', 'UPI', 'phonepe.svg', 'h-8 w-28'],
                    ['Paytm', 'UPI', 'paytm.svg', 'h-8 w-28'],
                    ['BHIM UPI', 'NPCI', 'bhim.svg', 'h-8 w-28'],
                ] as $app)
                    <div class="card p-6 text-center">
                        <div class="mx-auto flex h-[4.5rem] w-full max-w-[10.5rem] items-center justify-center rounded-2xl bg-white p-3 ring-1 ring-slate-100">
                            <img
                                src="{{ asset('assets/images/apps/'.$app[2]) }}"
                                alt="{{ $app[0] }} logo"
                                class="{{ $app[3] }} object-contain"
                                width="112"
                                height="56"
                                loading="lazy"
                            >
                        </div>
                        <p class="mt-3 text-sm font-semibold text-navy-dark">{{ $app[0] }}</p>
                        <p class="text-[11px] text-muted">Reference · {{ $app[1] }}</p>
                    </div>
                @endforeach
            </div>
            <p class="mt-4 text-xs text-muted">App names are shown as familiar customer examples only. BadiliCash does not claim official partnerships with these applications.</p>
        </div>
    </section>

    <section class="container-bc py-20">
        <h2 class="text-3xl font-semibold text-navy-dark">Payment flow</h2>
        <ol class="mt-10 grid gap-5 md:grid-cols-4">
            @foreach (['Merchant creates a request', 'Customer opens QR or intent', 'Customer confirms in their app', 'BadiliCash shows a confirmation state'] as $i => $step)
                <li class="card p-6">
                    <span class="text-sm font-semibold text-green">0{{ $i + 1 }}</span>
                    <p class="mt-3 font-semibold text-navy-dark">{{ $step }}</p>
                </li>
            @endforeach
        </ol>
        <div class="mt-12 grid gap-6 md:grid-cols-3">
            @foreach (['Faster in-person close', 'Works with QR or link', 'Familiar customer behaviour'] as $b)
                <div class="rounded-2xl bg-canvas p-5 font-semibold text-navy-dark">{{ $b }}</div>
            @endforeach
        </div>
    </section>

    <section class="container-bc pb-10">
        <h2 class="mb-6 text-2xl font-semibold text-navy-dark">UPI FAQs</h2>
        <x-faq-list :items="$faqs" />
    </section>
    <x-cta-band />
@endsection

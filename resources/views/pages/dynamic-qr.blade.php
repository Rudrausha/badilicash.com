@extends('layouts.app')

@section('title', 'Dynamic QR Payments — BadiliCash')
@section('description', 'Create unique BadiliCash Dynamic QR codes per payment request, with predefined amounts, references and optional expiry. Includes a labelled frontend simulation.')

@php
    $faqs = [
        ['q' => 'Why generate a new QR each time?', 'a' => 'A unique QR keeps the amount, reference and request identity bound together, which is useful for invoices, orders and reconciliation.'],
        ['q' => 'Is the simulator a live payment?', 'a' => 'No. The demonstration on this page uses mock frontend data only and is clearly labelled as a sample simulation.'],
        ['q' => 'Can Dynamic QR expire?', 'a' => 'Where supported, a request can be time-limited so an unused code does not stay payable indefinitely.'],
    ];
@endphp

@section('content')
    <x-page-hero eyebrow="Dynamic QR" title="A unique QR for every payment request." cta="Try the simulation" :ctaHref="route('dynamic-qr').'#demo'">
        Dynamic QR is generated for a single collection. The amount can be predefined, a payment reference can travel with the request, and the code can expire when that behaviour is supported.
        <x-slot:visual>
            <x-scanner variant="dynamic" amount="₹1,250.00" note="Unique request QR" />
        </x-slot:visual>
    </x-page-hero>

    <section class="container-bc grid gap-6 py-16 md:grid-cols-2 lg:grid-cols-4">
        @foreach (['Unique QR per request', 'Predefined payment amount', 'Payment reference', 'Expiry where supported'] as $item)
            <article class="card p-6 text-sm font-semibold text-navy-dark">{{ $item }}</article>
        @endforeach
    </section>

    <section class="bg-canvas py-20">
        <div class="container-bc grid gap-8 lg:grid-cols-2">
            <div>
                <h2 class="text-3xl font-semibold text-navy-dark">How Dynamic QR works</h2>
                <ol class="mt-8 space-y-4">
                    @foreach (['Create a payment request with amount and reference.', 'Generate a unique QR payload for that request.', 'Customer scans and pays the locked amount.', 'Status moves from pending to paid — or expired.'] as $i => $s)
                        <li class="flex gap-3"><span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-navy text-xs font-semibold text-white">{{ $i + 1 }}</span><span class="pt-1 text-sm text-muted">{{ $s }}</span></li>
                    @endforeach
                </ol>
            </div>
            <div class="card p-6">
                <p class="text-xs font-semibold tracking-wide text-green uppercase">Payment status illustration</p>
                <div class="mt-4 space-y-3">
                    @foreach ([['Pending', 'Waiting for customer scan'], ['Processing', 'Acknowledgement in flight'], ['Paid', 'Request completed'], ['Expired', 'Window closed']] as $row)
                        <div class="flex items-center justify-between rounded-2xl bg-canvas px-4 py-3">
                            <span class="text-sm font-semibold text-navy-dark">{{ $row[0] }}</span>
                            <span class="text-xs text-muted">{{ $row[1] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="container-bc py-20">
        <h2 class="text-3xl font-semibold text-navy-dark">Static QR vs Dynamic QR</h2>
        <div class="mt-8 overflow-hidden rounded-3xl border border-slate-200">
            <table class="w-full text-left text-sm">
                <thead class="bg-canvas text-navy-dark">
                    <tr>
                        <th class="px-5 py-3 font-semibold">Capability</th>
                        <th class="px-5 py-3 font-semibold">Static</th>
                        <th class="px-5 py-3 font-semibold">Dynamic</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr><td class="px-5 py-3">Reuse</td><td class="px-5 py-3">Same code</td><td class="px-5 py-3">New code per request</td></tr>
                    <tr><td class="px-5 py-3">Amount</td><td class="px-5 py-3">Entered by customer</td><td class="px-5 py-3">Predefined</td></tr>
                    <tr><td class="px-5 py-3">Reference</td><td class="px-5 py-3">Optional / later match</td><td class="px-5 py-3">Carried in the request</td></tr>
                    <tr><td class="px-5 py-3">Expiry</td><td class="px-5 py-3">Typically none</td><td class="px-5 py-3">Supported as a product option</td></tr>
                </tbody>
            </table>
        </div>
    </section>

    <section id="demo" class="bg-canvas py-20" x-data="dynamicQrDemo">
        <div class="container-bc grid items-start gap-10 lg:grid-cols-2">
            <div>
                <p class="eyebrow">Sample simulation</p>
                <h2 class="mt-4 text-3xl font-semibold text-navy-dark">Interactive Dynamic QR demo</h2>
                <p class="mt-4 text-muted">This is a frontend-only simulation with mock data. No real payment is created, captured or settled.</p>
                <div class="mt-6 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-sm text-amber-900">
                    Sample simulation — not connected to a payment network.
                </div>
            </div>

            <div class="card p-6">
                <div x-show="step === 'form'">
                    <label class="text-xs font-semibold text-navy">Amount (INR)</label>
                    <input x-model="amount" type="number" min="1" step="0.01" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2 text-sm outline-none focus:border-navy">
                    <label class="mt-4 block text-xs font-semibold text-navy">Reference</label>
                    <input x-model="reference" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2 text-sm outline-none focus:border-navy">
                    <label class="mt-4 block text-xs font-semibold text-navy">Note</label>
                    <input x-model="note" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2 text-sm outline-none focus:border-navy">
                    <button type="button" class="btn-primary mt-5 w-full" @click="start()">Generate sample QR</button>
                </div>

                <div x-show="step === 'qr'" class="text-center" style="display: none;">
                    <p class="text-xs font-semibold tracking-wide text-navy uppercase">Scan this sample QR</p>
                    <div class="mt-4 flex justify-center"><x-branded-qr :size="170" pattern="dynamic" :showName="true" caption="BadiliCash dynamic QR" /></div>
                    <p class="mt-4 text-2xl font-semibold text-navy-dark">₹<span x-text="amount"></span></p>
                    <p class="text-xs text-muted" x-text="reference + ' · ' + requestId"></p>
                    <p class="mt-2 text-sm font-medium text-navy">Expires in <span x-text="mmss"></span></p>
                    <button type="button" class="btn-green mt-5 w-full" @click="simulatePay()">Simulate customer payment</button>
                    <button type="button" class="btn-ghost mt-2 w-full" @click="reset()">Reset</button>
                </div>

                <div x-show="step === 'processing'" class="py-10 text-center" style="display: none;">
                    <p class="font-semibold text-navy-dark">Waiting for confirmation…</p>
                    <p class="mt-2 text-sm text-muted">Simulated status check</p>
                </div>

                <div x-show="step === 'success'" class="py-8 text-center" style="display: none;">
                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-green text-white"><i data-lucide="check" class="h-6 w-6"></i></div>
                    <p class="mt-4 text-xl font-semibold text-navy-dark">Sample payment marked paid</p>
                    <p class="mt-1 text-sm text-muted">No funds moved. This is a UI demonstration.</p>
                    <button type="button" class="btn-outline mt-5" @click="reset()">Run again</button>
                </div>

                <div x-show="step === 'expired'" class="py-8 text-center" style="display: none;">
                    <p class="text-xl font-semibold text-navy-dark">Sample request expired</p>
                    <p class="mt-2 text-sm text-muted">Generate a new QR to continue the simulation.</p>
                    <button type="button" class="btn-primary mt-5" @click="reset()">New request</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container-bc py-20">
        <h2 class="mb-6 text-2xl font-semibold text-navy-dark">Dynamic QR FAQs</h2>
        <x-faq-list :items="$faqs" />
    </section>
    <x-cta-band />
@endsection

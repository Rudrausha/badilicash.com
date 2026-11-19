@extends('layouts.app')

@section('title', 'Pricing — BadiliCash')
@section('description', 'Indicative BadiliCash pricing placeholders for payment collection products. Contact sales for commercial terms — these figures are not live transaction fees.')

@php
    $faqs = [
        ['q' => 'Are these live transaction fees?', 'a' => 'No. Pricing on this page is an indicative placeholder so the layout can be reviewed. Commercial rates will be confirmed with the BadiliCash team.'],
        ['q' => 'Is there a monthly platform fee?', 'a' => 'Treat any monthly figure here as a sample. Final packaging depends on volume, channels and support needs.'],
        ['q' => 'Can we negotiate volume pricing?', 'a' => 'Yes — use Contact sales. Growing platforms should not assume the sample numbers apply.'],
    ];
@endphp

@section('content')
    <x-page-hero eyebrow="Pricing" title="Simple packaging. Commercial terms on request." cta="Contact sales" :ctaHref="route('contact')" roomy>
        Figures below are <strong>indicative placeholders</strong>, not published acquiring rates. Use them to compare product surfaces, then talk to us for a real quote.
    </x-page-hero>

    <section class="container-bc grid gap-6 py-16 lg:grid-cols-3">
        @foreach ([
            ['Starter', 'Single-location collections', ['Static QR', 'Payment links', 'Email support concept'], 'Indicative from', 'Custom'],
            ['Growth', 'Multi-channel teams', ['Dynamic QR', 'UPI presentation', 'Webhook samples', 'Priority onboarding conversation'], 'Indicative from', 'Custom'],
            ['Enterprise', 'Platforms and groups', ['API-led collections', 'Dedicated success conversation', 'Custom settlement discussion'], 'Indicative', 'Let’s talk'],
        ] as $i => $plan)
            <article class="card flex flex-col p-8 {{ $i === 1 ? 'ring-2 ring-green' : '' }}" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <h2 class="text-xl font-semibold text-navy-dark">{{ $plan[0] }}</h2>
                <p class="mt-2 text-sm text-muted">{{ $plan[1] }}</p>
                <p class="mt-6 text-xs font-semibold tracking-wide text-navy uppercase">{{ $plan[3] }}</p>
                <p class="text-3xl font-semibold text-navy-dark">{{ $plan[4] }}</p>
                <p class="mt-1 text-[11px] text-slate-400">Placeholder — contact for pricing</p>
                <ul class="mt-6 flex-1 space-y-2 text-sm text-muted">
                    @foreach ($plan[2] as $f)
                        <li class="flex gap-2"><i data-lucide="check" class="h-4 w-4 text-green"></i>{{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary mt-8 w-full">Contact sales</a>
            </article>
        @endforeach
    </section>

    <section class="bg-canvas py-16">
        <div class="container-bc">
            <h2 class="text-2xl font-semibold text-navy-dark">Payment solutions comparison</h2>
            <div class="mt-6 overflow-x-auto rounded-3xl border border-slate-200 bg-white">
                <table class="w-full min-w-[640px] text-left text-sm">
                    <thead class="bg-canvas">
                        <tr>
                            <th class="px-5 py-3">Capability</th>
                            <th class="px-5 py-3">Starter</th>
                            <th class="px-5 py-3">Growth</th>
                            <th class="px-5 py-3">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr><td class="px-5 py-3">Static QR</td><td class="px-5 py-3">Yes</td><td class="px-5 py-3">Yes</td><td class="px-5 py-3">Yes</td></tr>
                        <tr><td class="px-5 py-3">Dynamic QR</td><td class="px-5 py-3">Add-on conversation</td><td class="px-5 py-3">Yes</td><td class="px-5 py-3">Yes</td></tr>
                        <tr><td class="px-5 py-3">Payment links</td><td class="px-5 py-3">Yes</td><td class="px-5 py-3">Yes</td><td class="px-5 py-3">Yes</td></tr>
                        <tr><td class="px-5 py-3">API + webhooks</td><td class="px-5 py-3">Samples only</td><td class="px-5 py-3">Yes</td><td class="px-5 py-3">Yes</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="container-bc py-16">
        <h2 class="mb-6 text-2xl font-semibold text-navy-dark">Pricing FAQs</h2>
        <x-faq-list :items="$faqs" />
    </section>
    <x-cta-band title="Need a commercial proposal?" text="Share volume, channels and settlement needs. We’ll respond with terms that are not placeholders." />
@endsection

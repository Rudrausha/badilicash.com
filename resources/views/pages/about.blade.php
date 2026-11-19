@extends('layouts.app')

@section('title', 'About Us — BadiliCash')
@section('description', 'Learn about BadiliCash, our mission to simplify digital payment collections, and the approach behind our QR, UPI and API experiences.')

@section('content')
    <x-page-hero eyebrow="About BadiliCash" title="A payment experience built for modern businesses." cta="Talk to us" :ctaHref="route('contact')" roomy>
        BadiliCash is a fintech brand focused on making digital collections feel simple — for the merchant creating a request and the customer completing it.
        <x-slot:visual>
            <div class="scene">
                <div class="scene-board">
                    <p>For the counter</p>
                    <strong>Request in.<br>Payment out.</strong>
                </div>
                <article class="scene-card">
                    <header>
                        <span>Collection</span>
                        <span class="scene-paid"><i></i>Paid</span>
                    </header>
                    <p class="scene-amount">₹1,250</p>
                    <p class="scene-meta">Counter · ORD-4821</p>
                    <div class="scene-foot">
                        <x-qr-mark :size="78" pattern="static" />
                        <ul>
                            <li>QR on the counter</li>
                            <li>Link in the chat</li>
                            <li>Status in one place</li>
                        </ul>
                    </div>
                </article>
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

    <style>
        .scene {
            position: relative;
            height: 460px;
            max-width: 28rem;
            margin: 0 auto;
        }
        .scene-board {
            position: absolute;
            top: 0;
            right: 0;
            left: 28px;
            height: 250px;
            padding: 28px 28px 0;
            border-radius: 28px;
            color: #fff;
            background:
                radial-gradient(120px 80px at 88% 18%, rgba(35, 154, 69, 0.55), transparent 70%),
                linear-gradient(145deg, #14245f 0%, #263d87 58%, #1c6f3c 100%);
            box-shadow: 0 24px 40px -28px rgba(20, 36, 95, 0.8);
        }
        .scene-board p {
            margin: 0;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.72);
        }
        .scene-board strong {
            display: block;
            margin-top: 10px;
            font-size: 1.55rem;
            line-height: 1.2;
            letter-spacing: -0.03em;
            font-weight: 700;
        }
        .scene-card {
            position: absolute;
            right: 18px;
            bottom: 0;
            left: 0;
            padding: 18px 18px 16px;
            border-radius: 22px;
            background: #fff;
            box-shadow: 0 28px 50px -30px rgba(23, 37, 84, 0.55);
            animation: scene-rise 0.9s cubic-bezier(0.22, 0.8, 0.24, 1) both;
        }
        .scene-card header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.75rem;
            font-weight: 600;
            color: #64748b;
        }
        .scene-paid {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 999px;
            background: #e8f6ec;
            color: #1c6f3c;
        }
        .scene-paid i {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #239a45;
        }
        .scene-amount {
            margin: 8px 0 0;
            font-size: 1.85rem;
            line-height: 1;
            font-weight: 700;
            letter-spacing: -0.03em;
            color: #172554;
        }
        .scene-meta {
            margin: 6px 0 0;
            font-size: 0.78rem;
            color: #64748b;
        }
        .scene-foot {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px solid #e8eef5;
        }
        .scene-foot ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .scene-foot li {
            position: relative;
            margin: 0;
            padding-left: 14px;
            font-size: 0.78rem;
            line-height: 1.7;
            color: #334155;
        }
        .scene-foot li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.55em;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #239a45;
        }
        @keyframes scene-rise {
            from { opacity: 0; transform: translateY(28px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @media (prefers-reduced-motion: reduce) {
            .scene-card { animation: none; }
        }
    </style>
@endsection

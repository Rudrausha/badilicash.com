@extends('layouts.app')

@section('title', 'BadiliCash — Smarter Payments. Seamless Possibilities.')
@section('description', 'Power your business with innovative digital payment solutions. Simplify collections with UPI, QR codes, payment links and APIs from BadiliCash.')

@php
    $homeFaqs = [
        ['q' => 'What is BadiliCash?', 'a' => 'BadiliCash is a digital payment collection brand focused on helping businesses accept payments through UPI-style experiences, QR codes and shareable payment links — with a developer-friendly integration path.'],
        ['q' => 'What payment solutions does BadiliCash offer?', 'a' => 'The public product set currently includes UPI payment experiences, QR code payments, Static QR, Dynamic QR, payment links and a checkout-style collection flow, with API concepts for developers.'],
        ['q' => 'What is a Static QR Code?', 'a' => 'A Static QR is a reusable code that identifies a merchant or collection point. Customers can scan it and enter an amount when they pay.'],
        ['q' => 'What is a Dynamic QR Code?', 'a' => 'A Dynamic QR is generated for a specific payment request. It can carry a predefined amount, a payment reference and, where supported, a limited validity window.'],
        ['q' => 'How do QR payments work?', 'a' => 'A merchant displays a QR code. The customer scans it with a compatible payment app, confirms the amount, and completes the payment. The merchant then receives a confirmation in the collection experience.'],
        ['q' => 'Can I integrate BadiliCash using APIs?', 'a' => 'Yes. BadiliCash is designed with a developer-friendly API concept for creating payment requests, generating dynamic QR payloads and receiving status updates. Sample endpoints on this site are examples until live APIs are published.'],
        ['q' => 'How can I contact the BadiliCash team?', 'a' => 'Use the Contact Us page. The form in this phase is a frontend enquiry experience — backend message delivery will be connected in a later release.'],
    ];
@endphp

@section('content')
    {{-- Hero --}}
    <section class="mesh hero-blend">
        <div class="hero-blend-art">
            <img src="{{ asset('assets/images/hero-person.png') }}?v=2" alt="Woman holding a card and a laptop">
        </div>
        <div class="container-bc relative z-10 grid items-center gap-8 py-8 lg:grid-cols-2 lg:gap-12 lg:py-10">
            <div class="min-w-0" style="min-width: 0;" data-aos="fade-up">
                <p class="eyebrow">
                    <span class="h-1.5 w-1.5 rounded-full bg-green"></span>
                    Digital payment collections
                </p>
                <h1 class="display mt-4">
                    Smarter Payments.<br>
                    <span class="gradient-text">Seamless Possibilities.</span>
                </h1>
                <p class="lead mt-4">
                    Power your business with innovative digital payment solutions. Simplify collections, streamline payment experiences and move your business forward with BadiliCash.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <x-button href="{{ route('contact', ['intent' => 'start']) }}">Get Started</x-button>
                    <x-button href="{{ route('solutions') }}" variant="outline">Explore Solutions</x-button>
                </div>
                <div class="mt-10 grid max-w-lg grid-cols-3 gap-3">
                    <div class="rounded-2xl border border-white/80 bg-white/70 px-3 py-3 shadow-sm backdrop-blur">
                        <p class="text-[10px] font-semibold tracking-wide text-muted uppercase">QR modes</p>
                        <p class="mt-1 text-sm font-bold text-navy-dark">Static + Dynamic</p>
                    </div>
                    <div class="rounded-2xl border border-white/80 bg-white/70 px-3 py-3 shadow-sm backdrop-blur">
                        <p class="text-[10px] font-semibold tracking-wide text-muted uppercase">Collect via</p>
                        <p class="mt-1 text-sm font-bold text-navy-dark">UPI + Links</p>
                    </div>
                    <div class="rounded-2xl border border-white/80 bg-white/70 px-3 py-3 shadow-sm backdrop-blur">
                        <p class="text-[10px] font-semibold tracking-wide text-muted uppercase">For teams</p>
                        <p class="mt-1 text-sm font-bold text-navy-dark">API-ready</p>
                    </div>
                </div>
                <p class="mt-3 text-[11px] text-slate-400">Highlights are illustrative product surfaces, not live processing metrics.</p>
            </div>
            <div class="hero-blend-spacer" aria-hidden="true"></div>
        </div>
        <div class="border-t border-navy/5 bg-white/50 backdrop-blur">
            <div class="container-bc flex flex-wrap items-center justify-center gap-x-8 gap-y-3 py-4 text-[11px] font-semibold tracking-[0.2em] text-navy/70 uppercase">
                <span>UPI</span>
                <span class="h-1 w-1 rounded-full bg-green"></span>
                <span>QR Payments</span>
                <span class="h-1 w-1 rounded-full bg-green"></span>
                <span>Static QR</span>
                <span class="h-1 w-1 rounded-full bg-green"></span>
                <span>Dynamic QR</span>
                <span class="h-1 w-1 rounded-full bg-green"></span>
                <span>Payment Links</span>
                <span class="h-1 w-1 rounded-full bg-green"></span>
                <span>Developer APIs</span>
            </div>
        </div>
    </section>

    <x-global-network />

    {{-- Solutions --}}
    <section class="container-bc py-20">
        <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
            <p class="eyebrow mx-auto">Trusted payment solutions</p>
            <h2 class="section-kicker">Everything You Need to Accept Digital Payments</h2>
            <p class="mt-4 text-muted">A focused set of collection tools designed for stores, platforms and growing teams.</p>
        </div>
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <x-solution-card href="{{ route('upi') }}" icon="smartphone" title="UPI Payments" delay="0">
                Collect through a unified payment experience that customers already understand.
            </x-solution-card>
            <x-solution-card href="{{ route('qr') }}" icon="qr-code" title="QR Code Payments" delay="50">
                Present a scan-to-pay surface at counters, tables and service desks.
            </x-solution-card>
            <x-solution-card href="{{ route('static-qr') }}" icon="scan-line" title="Static QR" delay="100">
                One reusable code for everyday collections, with the amount entered by the customer.
            </x-solution-card>
            <x-solution-card href="{{ route('dynamic-qr') }}" icon="refresh-cw" title="Dynamic QR" delay="150">
                A unique QR for each request, with amount and reference already attached.
            </x-solution-card>
            <x-solution-card href="{{ route('payment-links') }}" icon="link" title="Payment Links" delay="200">
                Share a payment request over chat, email or invoice without a physical counter.
            </x-solution-card>
            <x-solution-card href="{{ route('solutions') }}" icon="credit-card" title="Seamless Checkout" delay="250">
                A guided customer journey from request to confirmation, built for digital businesses.
            </x-solution-card>
        </div>
    </section>

    {{-- QR showcase --}}
    <section class="bg-canvas py-20">
        <div class="container-bc">
            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div data-aos="fade-right">
                    <p class="eyebrow">QR technology</p>
                    <h2 class="section-kicker">One Scan. A Seamless Payment Experience.</h2>
                    <p class="mt-4 text-muted">Choose a reusable Static QR for open collections, or generate a Dynamic QR when every request needs a locked amount and a clear reference.</p>
                </div>
                <div class="scan-stage" data-aos="zoom-in">
                    <div class="scan-static">
                        <x-scanner variant="static" note="Scan · enter amount" />
                    </div>
                    <div class="scan-dynamic">
                        <x-scanner variant="dynamic" amount="₹1,250.00" note="Unique request QR" />
                    </div>
                </div>
            </div>
            <div class="mt-12 grid gap-6 lg:grid-cols-2">
                <article class="card p-8" data-aos="fade-up">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-navy-dark">Static QR</h3>
                        <span class="rounded-full bg-navy/8 px-3 py-1 text-xs font-semibold text-navy">Reusable</span>
                    </div>
                    <ul class="mt-5 space-y-3 text-sm text-muted">
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Reusable QR code.</li>
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Convenient payment collection.</li>
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Merchant identification.</li>
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Easy payment experience.</li>
                    </ul>
                    <a href="{{ route('static-qr') }}" class="mt-6 inline-flex items-center gap-1 text-sm font-semibold text-navy">Explore Static QR <i data-lucide="arrow-right" class="h-4 w-4"></i></a>
                </article>
                <article class="card p-8" data-aos="fade-up" data-aos-delay="80">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-navy-dark">Dynamic QR</h3>
                        <span class="rounded-full bg-green/10 px-3 py-1 text-xs font-semibold text-green">Per request</span>
                    </div>
                    <ul class="mt-5 space-y-3 text-sm text-muted">
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Unique QR for each payment request.</li>
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Predefined transaction amount.</li>
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Payment reference tracking.</li>
                        <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 text-green"></i> Time-limited payment requests where supported.</li>
                    </ul>
                    <a href="{{ route('dynamic-qr') }}" class="mt-6 inline-flex items-center gap-1 text-sm font-semibold text-navy">Explore Dynamic QR <i data-lucide="arrow-right" class="h-4 w-4"></i></a>
                </article>
            </div>
        </div>
    </section>

    {{-- QR sound boxes --}}
    <section class="container-bc py-20">
        <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
            <p class="eyebrow mx-auto">QR Sound Boxes</p>
            <h2 class="section-kicker">Sound boxes with the QR on the device</h2>
            <p class="mt-4 text-muted">Standard, Digital, and Dynamic QR Sound Boxes. Each one keeps a scannable QR in view and reads the payment back out loud.</p>
        </div>
        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @foreach (\App\Support\SoundBoxCatalog::all() as $box)
                <article class="card flex flex-col p-6" data-aos="fade-up">
                    <img src="{{ asset($box['image']) }}" alt="{{ $box['imageAlt'] }}" class="mx-auto h-64 w-full object-contain">
                    <h3 class="mt-4 text-xl font-semibold text-navy-dark">{{ $box['name'] }}</h3>
                    <ul class="mt-4 space-y-2 text-sm text-muted">
                        @foreach (array_slice($box['features'], 0, 4) as $feature)
                            <li class="flex gap-2"><i data-lucide="check" class="mt-0.5 h-4 w-4 shrink-0 text-green"></i> {{ $feature[0] }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route($box['route']) }}" class="mt-6 inline-flex items-center gap-1 text-sm font-semibold text-navy">See all features <i data-lucide="arrow-right" class="h-4 w-4"></i></a>
                </article>
            @endforeach
        </div>
    </section>

    {{-- How it works --}}
    <section class="container-bc py-20">
        <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
            <p class="eyebrow mx-auto">How it works</p>
            <h2 class="section-kicker">Four steps from request to confirmation</h2>
        </div>
        <ol class="relative mt-14 grid gap-8 lg:grid-cols-4">
            <div class="pointer-events-none absolute top-12 right-[12%] left-[12%] hidden h-px bg-gradient-to-r from-navy via-green to-navy lg:block"></div>
            @foreach ([
                ['Generate a Payment Request', 'Create a collection with amount, note and reference.'],
                ['Display the QR Code or Payment Link', 'Show it on a screen, print it, or share it digitally.'],
                ['Customer Completes Payment', 'The customer confirms in their preferred payment app.'],
                ['Payment Confirmation', 'The experience updates once the payment is acknowledged.'],
            ] as $i => $step)
                <li class="card relative p-6 text-center" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                    <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-br from-navy to-green text-sm font-bold text-white shadow-lg">{{ $i + 1 }}</div>
                    <h3 class="mt-5 text-base font-bold text-navy-dark">{{ $step[0] }}</h3>
                    <p class="mt-2 text-sm text-muted">{{ $step[1] }}</p>
                </li>
            @endforeach
        </ol>
        <div class="mt-10 text-center">
            <a href="{{ route('how-it-works') }}" class="btn-outline">See the full journey</a>
        </div>
    </section>

    {{-- Why choose --}}
    <section class="bg-canvas py-20">
        <div class="container-bc">
            <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
                <p class="eyebrow mx-auto">Why BadiliCash</p>
                <h2 class="section-kicker">Why Choose BadiliCash?</h2>
            </div>
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['blocks', 'Seamless Integration', 'Connect collection flows into websites, stores and internal tools.'],
                    ['wallet', 'Simplified Payment Collection', 'Fewer steps between a request and a completed customer payment.'],
                    ['qr-code', 'Smart QR Technology', 'Static and dynamic QR patterns for different collection styles.'],
                    ['code-xml', 'Developer-Friendly APIs', 'Clear request and webhook concepts, with PHP samples to start from.'],
                    ['radio', 'Real-Time Payment Updates', 'Status-oriented design so teams can see what happened next.'],
                    ['shield', 'Secure Payment Experience', 'Thoughtful UX for confirmation, references and request expiry.'],
                    ['layers', 'Scalable Infrastructure', 'A product surface that can grow from a single counter to many channels.'],
                    ['list-checks', 'Easy Payment Tracking', 'References and request IDs keep collections organised.'],
                ] as $i => $item)
                    <article class="card card-hover p-6" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 50 }}">
                        <span class="icon-badge"><i data-lucide="{{ $item[0] }}" class="h-5 w-5"></i></span>
                        <h3 class="mt-4 font-semibold text-navy-dark">{{ $item[1] }}</h3>
                        <p class="mt-2 text-sm text-muted">{{ $item[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Developers --}}
    <section class="container-bc grid items-center gap-12 py-20 lg:grid-cols-2">
        <div data-aos="fade-right">
            <p class="eyebrow">For engineering teams</p>
            <h2 class="section-kicker">Built for Developers. Designed for Business.</h2>
            <p class="mt-4 text-muted">Create a payment request, present a QR or link, and listen for status updates. The samples below are examples until production APIs are published.</p>
            <a href="{{ route('developers') }}" class="btn-primary mt-8">Explore Documentation</a>
        </div>
        <div class="overflow-hidden rounded-[1.7rem] border border-slate-800 bg-[#0b1224] shadow-[0_40px_80px_-32px_rgb(15_18_36_/_0.8)] ring-1 ring-white/10" data-aos="fade-left">
            <div class="flex items-center justify-between border-b border-white/10 px-4 py-3">
                <div class="flex gap-1.5">
                    <span class="h-2.5 w-2.5 rounded-full bg-red-400/80"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-amber-400/80"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-green/80"></span>
                </div>
                <p class="font-mono text-[11px] text-slate-400">create-payin.php · sample</p>
            </div>
            <pre class="overflow-x-auto p-5 font-mono text-[13px] leading-relaxed text-slate-200"><code><span class="text-slate-500">// Example only — not a live endpoint</span>
$ch = curl_init(<span class="text-emerald-300">'https://api.example.badilicash.com/v1/payins'</span>);
curl_setopt_array($ch, [
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => [
    <span class="text-emerald-300">'Authorization: Bearer YOUR_API_KEY'</span>,
    <span class="text-emerald-300">'Content-Type: application/json'</span>,
  ],
  CURLOPT_POSTFIELDS => json_encode([
    <span class="text-sky-300">'amount'</span> => 125000,
    <span class="text-sky-300">'currency'</span> => <span class="text-emerald-300">'INR'</span>,
    <span class="text-sky-300">'reference'</span> => <span class="text-emerald-300">'ORD-4821'</span>,
    <span class="text-sky-300">'method'</span> => <span class="text-emerald-300">'dynamic_qr'</span>,
  ]),
]);
$response = curl_exec($ch);</code></pre>
        </div>
    </section>

    {{-- Businesses --}}
    <section class="bg-canvas py-20">
        <div class="container-bc">
            <div class="mx-auto max-w-2xl text-center" data-aos="fade-up">
                <p class="eyebrow mx-auto">Built for growing teams</p>
                <h2 class="section-kicker">How BadiliCash can help</h2>
            </div>
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['globe', 'Online businesses', 'Accept payments from a website or landing page with a link or QR.'],
                    ['shopping-bag', 'E-commerce businesses', 'Attach a payment request to an order reference before fulfilment.'],
                    ['app-window', 'Digital platforms', 'Give operators a consistent collection pattern across products.'],
                    ['repeat', 'Subscription businesses', 'Issue recurring collection requests with a clear customer journey.'],
                    ['briefcase', 'Service providers', 'Collect retainers, invoices and on-the-spot fees without extra hardware.'],
                    ['building-2', 'Growing enterprises', 'Standardise how teams request, display and track incoming payments.'],
                ] as $i => $item)
                    <article class="card card-hover p-6" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 60 }}">
                        <span class="icon-badge"><i data-lucide="{{ $item[0] }}" class="h-5 w-5"></i></span>
                        <h3 class="mt-4 font-semibold text-navy-dark">{{ $item[1] }}</h3>
                        <p class="mt-2 text-sm text-muted">{{ $item[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="container-bc grid gap-10 py-20 lg:grid-cols-12">
        <div class="lg:col-span-4" data-aos="fade-up">
            <p class="eyebrow">FAQs</p>
            <h2 class="section-kicker">Questions, answered clearly</h2>
            <p class="mt-4 text-muted">Need a longer walkthrough? Visit the full FAQ or talk to the team.</p>
            <a href="{{ route('faq') }}" class="btn-outline mt-6">View all FAQs</a>
        </div>
        <div class="lg:col-span-8" data-aos="fade-up" data-aos-delay="80">
            <x-faq-list :items="$homeFaqs" :open="0" />
        </div>
    </section>

    <x-cta-band />

    <style>
        #main .hero-blend h1.display {
            font-size: clamp(1.55rem, 2.1vw, 1.95rem);
            line-height: 1.2;
        }
        #main .hero-blend .lead {
            font-size: 0.9rem;
            line-height: 1.6;
            max-width: 34rem;
        }
        .hero-blend { position: relative; overflow: hidden; }
        .hero-blend-art {
            position: absolute;
            top: 4rem;
            right: 0;
            bottom: 52px;
            width: min(560px, 52%);
            overflow: hidden;
            pointer-events: none;
            animation: hero-slide 1.25s cubic-bezier(0.22, 0.8, 0.24, 1) both;
        }
        .hero-blend-art::before {
            content: '';
            position: absolute;
            right: 8%;
            bottom: 6%;
            width: 72%;
            height: 58%;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 176, 168, 0.5), rgba(255, 176, 168, 0) 70%);
            filter: blur(8px);
            animation: hero-glow 6s ease-in-out infinite;
        }
        .hero-blend-art img {
            position: absolute;
            right: 0;
            bottom: 0;
            width: auto;
            height: 92%;
            max-width: 100%;
            object-fit: contain;
            object-position: right bottom;
            animation: hero-float 7s ease-in-out infinite;
        }
        .hero-blend-spacer { min-height: 420px; }
        @keyframes hero-slide {
            from { opacity: 0; transform: translateX(100%); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes hero-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        @keyframes hero-glow {
            0%, 100% { opacity: 0.65; }
            50% { opacity: 1; }
        }
        @media (max-width: 1023px) {
            .hero-blend-art {
                position: relative;
                top: auto;
                bottom: auto;
                width: 100%;
                height: 380px;
                margin-top: 8px;
            }
            .hero-blend-art img {
                position: relative;
                height: 100%;
                margin-left: auto;
                object-position: center bottom;
            }
            .hero-blend-spacer { display: none; }
        }
        @media (prefers-reduced-motion: reduce) {
            .hero-blend-art,
            .hero-blend-art img,
            .hero-blend-art::before { animation: none; }
        }
        .scan-stage {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            gap: 22px;
            min-height: 100%;
            padding: 28px 22px 26px;
            border-radius: 32px;
            background:
                radial-gradient(380px 160px at 72% 100%, rgba(35, 154, 69, 0.14), transparent 70%),
                linear-gradient(180deg, #ffffff 0%, #f3f7fb 100%);
            box-shadow: 0 24px 50px -32px rgba(23, 37, 84, 0.45);
            border: 1px solid #e6edf5;
        }
        .scan-static { width: min(250px, 46%); }
        .scan-static > div { max-width: none; }
        .scan-dynamic { width: min(228px, 42%); }
        .scan-dynamic .phone-shell { width: 100%; }
        @media (max-width: 640px) {
            .scan-stage { gap: 12px; padding: 18px 12px 16px; }
        }
    </style>
@endsection

@extends('layouts.app')

@section('title', 'Developers & API Integration — BadiliCash')
@section('description', 'Explore BadiliCash API integration concepts: authentication, pay-in samples, dynamic QR, webhooks and PHP cURL examples. Endpoints are samples until live APIs are available.')

@php
    $payin = <<<'PHP'
<?php
// EXAMPLE ONLY — not a live endpoint
$ch = curl_init('https://api.example.badilicash.com/v1/payins');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer YOUR_API_KEY',
        'Content-Type: application/json',
    ],
    CURLOPT_POSTFIELDS => json_encode([
        'amount' => 125000,
        'currency' => 'INR',
        'reference' => 'ORD-4821',
        'method' => 'dynamic_qr',
        'notify_url' => 'https://merchant.example/webhooks/badilicash',
    ]),
]);
echo curl_exec($ch);
PHP;

    $qr = <<<'PHP'
<?php
// EXAMPLE ONLY — Dynamic QR payload
$ch = curl_init('https://api.example.badilicash.com/v1/qr/dynamic');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer YOUR_API_KEY',
        'Content-Type: application/json',
    ],
    CURLOPT_POSTFIELDS => json_encode([
        'payin_id' => 'pay_123',
        'expires_in' => 180,
    ]),
]);
echo curl_exec($ch);
PHP;

    $hook = <<<'JSON'
{
  "event": "payin.paid",
  "example": true,
  "data": {
    "id": "pay_123",
    "amount": 125000,
    "currency": "INR",
    "reference": "ORD-4821",
    "status": "paid"
  }
}
JSON;
@endphp

@section('content')
    <x-page-hero eyebrow="Developers" title="APIs that follow the same request model as the product." cta="Contact developer support" :ctaHref="route('contact')">
        Authentication, pay-ins, Dynamic QR and webhooks are documented here as examples. Treat every URL as a sample until production APIs are published.
    </x-page-hero>

    <section class="container-bc grid gap-6 py-16 lg:grid-cols-12">
        <aside class="card h-fit p-5 text-sm lg:col-span-3">
            <p class="text-xs font-semibold tracking-wide text-navy uppercase">Documentation</p>
            <nav class="mt-4 space-y-2">
                <a class="block rounded-lg px-3 py-2 hover:bg-canvas" href="#overview">Overview</a>
                <a class="block rounded-lg px-3 py-2 hover:bg-canvas" href="#auth">Authentication</a>
                <a class="block rounded-lg px-3 py-2 hover:bg-canvas" href="#payin">Pay-in API</a>
                <a class="block rounded-lg px-3 py-2 hover:bg-canvas" href="#dynamic">Dynamic QR API</a>
                <a class="block rounded-lg px-3 py-2 hover:bg-canvas" href="#webhooks">Webhooks</a>
            </nav>
        </aside>

        <div class="space-y-12 lg:col-span-9">
            <article id="overview">
                <h2 class="text-2xl font-semibold text-navy-dark">API integration overview</h2>
                <p class="mt-3 text-sm leading-relaxed text-muted">Create a pay-in, present it as QR or link, then listen for status. Responses should include a request id, amount, currency, reference and status. All hostnames on this page use the <code class="rounded bg-canvas px-1">api.example.badilicash.com</code> sample domain.</p>
            </article>

            <article id="auth">
                <h2 class="text-2xl font-semibold text-navy-dark">Authentication concept</h2>
                <p class="mt-3 text-sm text-muted">Send a bearer token in the Authorization header. Keys will be issued from a merchant workspace in a later phase — do not treat any sample key as real.</p>
                <pre class="mt-4 overflow-x-auto rounded-2xl bg-[#0f172a] p-4 font-mono text-xs text-slate-200">Authorization: Bearer YOUR_API_KEY</pre>
            </article>

            <article id="payin" x-data="codeCopy(@js($payin))">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-2xl font-semibold text-navy-dark">Pay-in API sample</h2>
                    <button type="button" class="btn-outline text-xs" @click="copy()" x-text="copied ? 'Copied' : 'Copy'"></button>
                </div>
                <p class="mt-3 text-sm text-muted">POST <code>/v1/payins</code> — example only.</p>
                <pre class="mt-4 overflow-x-auto rounded-2xl bg-[#0f172a] p-4 font-mono text-xs leading-relaxed text-slate-200"><code>{{ $payin }}</code></pre>
            </article>

            <article id="dynamic" x-data="codeCopy(@js($qr))">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-2xl font-semibold text-navy-dark">Dynamic QR API sample</h2>
                    <button type="button" class="btn-outline text-xs" @click="copy()" x-text="copied ? 'Copied' : 'Copy'"></button>
                </div>
                <p class="mt-3 text-sm text-muted">POST <code>/v1/qr/dynamic</code> — example only.</p>
                <pre class="mt-4 overflow-x-auto rounded-2xl bg-[#0f172a] p-4 font-mono text-xs leading-relaxed text-slate-200"><code>{{ $qr }}</code></pre>
            </article>

            <article id="webhooks" x-data="codeCopy(@js($hook))">
                <div class="flex items-center justify-between gap-3">
                    <h2 class="text-2xl font-semibold text-navy-dark">Webhook concept</h2>
                    <button type="button" class="btn-outline text-xs" @click="copy()" x-text="copied ? 'Copied' : 'Copy'"></button>
                </div>
                <p class="mt-3 text-sm text-muted">Your notify URL would receive JSON similar to this sample payload.</p>
                <pre class="mt-4 overflow-x-auto rounded-2xl bg-[#0f172a] p-4 font-mono text-xs leading-relaxed text-slate-200"><code>{{ $hook }}</code></pre>
            </article>
        </div>
    </section>
    <x-cta-band title="Need a walkthrough?" text="Developer support conversations start on the contact page. Live API credentials are not issued from this website yet." />
@endsection

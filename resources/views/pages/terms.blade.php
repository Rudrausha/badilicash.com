@extends('layouts.app')

@section('title', 'Terms and Conditions — BadiliCash')
@section('description', 'Terms for using the BadiliCash public website. Product, API and processing terms will be issued separately when live services launch.')

@section('content')
    <section class="mesh border-b border-slate-100">
        <div class="container-bc py-16">
            <p class="eyebrow">Legal</p>
            <h1 class="display mt-4">Terms and Conditions</h1>
            <p class="lead mt-4">Last updated {{ date('F j, Y') }}. These terms cover use of the public BadiliCash website.</p>
        </div>
    </section>
    <article class="container-bc max-w-3xl space-y-6 py-16 text-sm leading-relaxed text-muted">
        <p>By browsing this website you agree to these terms. They do not, by themselves, create a merchant acquiring, wallet or payout contract.</p>
        <h2 class="text-xl font-semibold text-navy-dark">The website</h2>
        <p>Content describes payment collection products in a public, frontend-only phase. Sample APIs, QR simulators, pricing placeholders and contact forms are demonstrations. They are not an offer of live payment processing.</p>
        <h2 class="text-xl font-semibold text-navy-dark">No unauthorised access</h2>
        <p>You may not attempt to disrupt, scrape aggressively, or probe the site for non-public systems. Merchant and admin access is through the separate BadiliCash dashboard, and only with credentials issued for that account.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Intellectual property</h2>
        <p>The BadiliCash name, logo and site design are used under the brand owner’s rights. Do not copy the logo or imply a partnership without written permission.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Accuracy</h2>
        <p>We try to keep explanations of Static QR, Dynamic QR, UPI presentation and APIs accurate. Features, availability and commercial terms can change. Indicative pricing is labelled as such.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Liability</h2>
        <p>This marketing site is provided as-is. We are not liable for decisions made solely on sample simulations or placeholder prices. Live service terms will apply when you onboard.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Contact</h2>
        <p>Questions: <a class="font-semibold text-navy" href="{{ route('contact') }}">Contact Us</a>.</p>
    </article>
@endsection

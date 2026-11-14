@extends('layouts.app')

@section('title', 'Privacy Policy — BadiliCash')
@section('description', 'How BadiliCash describes personal data handling for this public website. This policy will be updated as products and legal entities are finalised.')

@section('content')
    <section class="mesh border-b border-slate-100">
        <div class="container-bc py-16">
            <p class="eyebrow">Legal</p>
            <h1 class="display mt-4">Privacy Policy</h1>
            <p class="lead mt-4">Last updated {{ date('F j, Y') }}. This is the public-website policy for the current frontend phase.</p>
        </div>
    </section>
    <article class="container-bc prose-bc max-w-3xl space-y-6 py-16 text-sm leading-relaxed text-muted">
        <p>BadiliCash (“we”) operates this marketing website to explain payment collection products. This page describes how we think about information collected through the public site. It is not a substitute for a later, counsel-reviewed policy once live onboarding, KYC and processing begin.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Information you provide</h2>
        <p>The contact form may collect name, business email, phone number, company name, subject and message. In this phase the form is validated in the browser and is not wired to a message store. If you email us instead, we will use that correspondence to respond to your enquiry.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Technical data</h2>
        <p>Standard web logs (such as IP address, browser type and pages viewed) may be processed by hosting infrastructure to keep the site available and secure. We do not use this website to run hidden financial profiling.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Cookies</h2>
        <p>This site may use essential cookies required for Laravel session handling. Analytics or advertising cookies are not part of the current build unless later added and disclosed.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Payments data</h2>
        <p>Interactive QR and checkout demonstrations on this website use mock frontend data. They do not collect card numbers, UPI PINs or bank credentials. Never enter real payment secrets into a sample simulator.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Sharing</h2>
        <p>We do not sell website enquiry data. Hosting, email and future processors will be listed here when they are contracted.</p>
        <h2 class="text-xl font-semibold text-navy-dark">Contact</h2>
        <p>Privacy questions can be sent via the <a class="font-semibold text-navy" href="{{ route('contact') }}">contact page</a> or hello@badilicash.com.</p>
    </article>
@endsection

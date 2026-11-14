@extends('layouts.app')

@section('title', 'FAQs — BadiliCash')
@section('description', 'Answers about BadiliCash payment solutions, Static and Dynamic QR, APIs and how to contact the team.')

@php
    $items = [
        ['q' => 'What is BadiliCash?', 'a' => 'BadiliCash is a digital payment collection brand. This public website explains UPI-style collections, QR payments, payment links and a developer API concept.'],
        ['q' => 'What payment solutions does BadiliCash offer?', 'a' => 'UPI payment presentation, QR code payments, Static QR, Dynamic QR, payment links and a checkout-style customer journey, plus API samples.'],
        ['q' => 'What is a Static QR Code?', 'a' => 'A reusable QR that identifies a merchant or collection point. Customers typically enter the amount themselves.'],
        ['q' => 'What is a Dynamic QR Code?', 'a' => 'A QR generated for one payment request, usually with a predefined amount and a reference, and optionally a time limit.'],
        ['q' => 'How do QR payments work?', 'a' => 'Display or share a QR. The customer scans it, confirms in their payment app, and the collection experience updates.'],
        ['q' => 'Can I integrate BadiliCash using APIs?', 'a' => 'Yes, as a product direction. Current samples are examples until live APIs are available.'],
        ['q' => 'How can I contact the BadiliCash team?', 'a' => 'Use the Contact Us page. The form currently validates in the browser only.'],
        ['q' => 'Is Login available on this website?', 'a' => 'Login and merchant dashboards are not part of this public-site phase. The Login button routes to a contact enquiry.'],
        ['q' => 'Do you claim official UPI app partnerships?', 'a' => 'No. Any application chooser on this site is illustrative.'],
    ];
@endphp

@section('content')
    <x-page-hero eyebrow="FAQs" title="Straightforward answers about collections, QR and APIs.">
        If you need something that is not listed, send an enquiry. We would rather be precise than fill the page with unverified claims.
    </x-page-hero>
    <section class="container-bc max-w-3xl py-16">
        <x-faq-list :items="$items" :open="0" />
    </section>
    <x-cta-band />
@endsection

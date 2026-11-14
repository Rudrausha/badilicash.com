@extends('layouts.app')

@section('title', 'Contact Us — BadiliCash')
@section('description', 'Contact the BadiliCash team for product, partnership or developer conversations. The form in this phase is a frontend validation experience only.')

@section('content')
    <x-page-hero eyebrow="Contact" title="Tell us how you want to collect.">
        Product, partnership and developer conversations all start here. The form validates in the browser. Message delivery to an inbox is not connected in this phase.
    </x-page-hero>

    <section class="container-bc grid gap-10 py-20 lg:grid-cols-12">
        <div class="lg:col-span-5">
            <h2 class="text-2xl font-semibold text-navy-dark">Contact information</h2>
            <ul class="mt-6 space-y-4 text-sm text-muted">
                <li><span class="block text-xs font-semibold tracking-wide text-navy uppercase">Email</span> hello@badilicash.com</li>
                <li><span class="block text-xs font-semibold tracking-wide text-navy uppercase">Business enquiries</span> Use the form for collection, pricing or partnership questions.</li>
                <li><span class="block text-xs font-semibold tracking-wide text-navy uppercase">Developers</span> Mention API samples or webhook design in your message.</li>
            </ul>
            <div class="card mt-8 p-6">
                <h3 class="font-semibold text-navy-dark">Business inquiry</h3>
                <p class="mt-2 text-sm text-muted">Share expected volume, whether you need Static QR, Dynamic QR or links, and if you have an engineering team ready for APIs.</p>
            </div>
        </div>

        <div class="card p-8 lg:col-span-7" x-data="contactForm" x-cloak>
            <form @submit.prevent="submit" novalidate>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="text-xs font-semibold text-navy">Name</label>
                        <input id="name" x-model="form.name" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-navy" autocomplete="name">
                        <p class="mt-1 text-xs text-red-600" x-show="errors.name" x-text="errors.name"></p>
                    </div>
                    <div>
                        <label for="email" class="text-xs font-semibold text-navy">Business email</label>
                        <input id="email" type="email" x-model="form.email" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-navy" autocomplete="email">
                        <p class="mt-1 text-xs text-red-600" x-show="errors.email" x-text="errors.email"></p>
                    </div>
                    <div>
                        <label for="phone" class="text-xs font-semibold text-navy">Phone number</label>
                        <input id="phone" x-model="form.phone" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-navy" autocomplete="tel">
                        <p class="mt-1 text-xs text-red-600" x-show="errors.phone" x-text="errors.phone"></p>
                    </div>
                    <div>
                        <label for="company" class="text-xs font-semibold text-navy">Company name</label>
                        <input id="company" x-model="form.company" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-navy" autocomplete="organization">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="subject" class="text-xs font-semibold text-navy">Subject</label>
                    <select id="subject" x-model="form.subject" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-navy">
                        <option value="">Select a topic</option>
                        <option>Get started with BadiliCash</option>
                        <option>Login / account enquiry</option>
                        <option>Pricing</option>
                        <option>Developer / API</option>
                        <option>Partnership</option>
                        <option>Something else</option>
                    </select>
                    <p class="mt-1 text-xs text-red-600" x-show="errors.subject" x-text="errors.subject"></p>
                </div>
                <div class="mt-4">
                    <label for="message" class="text-xs font-semibold text-navy">Message</label>
                    <textarea id="message" rows="5" x-model="form.message" class="mt-1 w-full rounded-xl border border-slate-200 px-3 py-2.5 text-sm outline-none focus:border-navy"></textarea>
                    <p class="mt-1 text-xs text-red-600" x-show="errors.message" x-text="errors.message"></p>
                </div>
                <button type="submit" class="btn-primary mt-6">Submit enquiry</button>
            </form>

            <div x-show="submitted" class="mt-6 rounded-2xl border border-navy/15 bg-canvas px-4 py-3 text-sm text-navy-dark" style="display: none;">
                The form looks valid. Backend submission is not connected in this phase, so this message has not been sent. Please email hello@badilicash.com if you need a reply today.
            </div>
        </div>
    </section>
@endsection

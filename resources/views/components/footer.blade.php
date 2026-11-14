<footer class="border-t border-slate-200 bg-canvas">
    <div class="container-bc grid gap-10 py-16 md:grid-cols-2 lg:grid-cols-6">
        <div class="lg:col-span-2">
            <a href="{{ route('home') }}" class="inline-flex" aria-label="BadiliCash home">
                <img src="{{ asset('assets/images/badilicash-logo.png') }}" alt="BadiliCash" class="h-10 w-auto" width="220" height="63">
            </a>
            <p class="mt-4 max-w-sm text-sm leading-relaxed text-muted">
                BadiliCash helps businesses collect digital payments with a cleaner experience — from QR codes and payment links to developer-ready APIs.
            </p>
            <div class="mt-5 flex gap-3">
                <a href="{{ route('contact') }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-navy hover:border-navy/30" aria-label="Share or contact"><i data-lucide="share-2" class="h-4 w-4"></i></a>
                <a href="{{ route('contact') }}" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-navy hover:border-navy/30" aria-label="Website enquiry"><i data-lucide="globe" class="h-4 w-4"></i></a>
                <a href="mailto:hello@badilicash.com" class="flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 bg-white text-navy hover:border-navy/30" aria-label="Email BadiliCash"><i data-lucide="link" class="h-4 w-4"></i></a>
            </div>
        </div>

        <div>
            <h2 class="text-sm font-semibold tracking-wide text-navy-dark uppercase">Company</h2>
            <ul class="mt-4 space-y-2.5 text-sm text-muted">
                <li><a class="hover:text-navy" href="{{ route('about') }}">About Us</a></li>
                <li><a class="hover:text-navy" href="{{ route('how-it-works') }}">How it works</a></li>
                <li><a class="hover:text-navy" href="{{ route('pricing') }}">Pricing</a></li>
                <li><a class="hover:text-navy" href="{{ route('contact') }}">Contact</a></li>
                <li><a class="hover:text-navy" href="{{ route('faq') }}">FAQs</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-sm font-semibold tracking-wide text-navy-dark uppercase">Payment solutions</h2>
            <ul class="mt-4 space-y-2.5 text-sm text-muted">
                <li><a class="hover:text-navy" href="{{ route('upi') }}">UPI Payments</a></li>
                <li><a class="hover:text-navy" href="{{ route('qr') }}">QR Code Payments</a></li>
                <li><a class="hover:text-navy" href="{{ route('static-qr') }}">Static QR</a></li>
                <li><a class="hover:text-navy" href="{{ route('dynamic-qr') }}">Dynamic QR</a></li>
                <li><a class="hover:text-navy" href="{{ route('payment-links') }}">Payment Links</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-sm font-semibold tracking-wide text-navy-dark uppercase">Developers</h2>
            <ul class="mt-4 space-y-2.5 text-sm text-muted">
                <li><a class="hover:text-navy" href="{{ route('developers') }}">API overview</a></li>
                <li><a class="hover:text-navy" href="{{ route('developers') }}#payin">Pay-in sample</a></li>
                <li><a class="hover:text-navy" href="{{ route('developers') }}#webhooks">Webhooks</a></li>
                <li><a class="hover:text-navy" href="{{ route('contact') }}">Developer support</a></li>
            </ul>
        </div>

        <div>
            <h2 class="text-sm font-semibold tracking-wide text-navy-dark uppercase">Contact</h2>
            <ul class="mt-4 space-y-2.5 text-sm text-muted">
                <li>Business enquiries</li>
                <li><a class="hover:text-navy" href="mailto:hello@badilicash.com">hello@badilicash.com</a></li>
                <li>Product conversations</li>
                <li><a class="hover:text-navy" href="{{ route('contact') }}">Contact form</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-slate-200">
        <div class="container-bc flex flex-col gap-3 py-6 text-xs text-muted sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} BadiliCash. All rights reserved.</p>
            <div class="flex gap-5">
                <a class="hover:text-navy" href="{{ route('privacy') }}">Privacy Policy</a>
                <a class="hover:text-navy" href="{{ route('terms') }}">Terms and Conditions</a>
            </div>
        </div>
    </div>
</footer>

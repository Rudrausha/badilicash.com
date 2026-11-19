@php
    $socials = [
        ['LinkedIn', 'https://www.linkedin.com/company/badilicash', 'M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45z'],
        ['X', 'https://x.com/badilicash', 'M18.24 2.25h3.31l-7.23 8.26 8.5 11.24h-6.51l-4.71-6.23-5.4 6.23H2.74l7.73-8.84L1.25 2.25H8.08l4.25 5.62L18.24 2.25zm-1.16 17.52h1.83L7.08 4.13H5.12L17.08 19.77z'],
        ['Instagram', 'https://www.instagram.com/badilicash', 'M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.69 4.92 4.92.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.64.07-4.85.07s-3.58-.01-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92-.06-1.27-.07-1.64-.07-4.85s.01-3.58.07-4.85C2.38 3.92 3.9 2.38 7.15 2.23 8.42 2.17 8.8 2.16 12 2.16zm0 1.8c-3.14 0-3.51.01-4.75.07-2.18.1-3.2 1.14-3.3 3.3-.06 1.24-.07 1.6-.07 4.75s.01 3.51.07 4.75c.1 2.16 1.12 3.2 3.3 3.3 1.24.06 1.61.07 4.75.07s3.51-.01 4.75-.07c2.18-.1 3.2-1.14 3.3-3.3.06-1.24.07-1.61.07-4.75s-.01-3.51-.07-4.75c-.1-2.16-1.12-3.2-3.3-3.3-1.24-.06-1.61-.07-4.75-.07zm0 3.07a4.97 4.97 0 1 1 0 9.94 4.97 4.97 0 0 1 0-9.94zm0 1.8a3.17 3.17 0 1 0 0 6.34 3.17 3.17 0 0 0 0-6.34zm6.3-2.3a1.16 1.16 0 1 1-2.32 0 1.16 1.16 0 0 1 2.32 0z'],
        ['Facebook', 'https://www.facebook.com/badilicash', 'M22 12.07C22 6.5 17.52 2 12 2S2 6.5 2 12.07C2 17.1 5.66 21.24 10.44 22v-7.03H7.9v-2.9h2.54V9.84c0-2.5 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.44 2.9h-2.34V22C18.34 21.24 22 17.1 22 12.07z'],
        ['YouTube', 'https://www.youtube.com/@badilicash', 'M23.5 6.2a3 3 0 0 0-2.12-2.14C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.38.46A3 3 0 0 0 .5 6.2 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.8 3 3 0 0 0 2.12 2.14C4.5 20.4 12 20.4 12 20.4s7.5 0 9.38-.46a3 3 0 0 0 2.12-2.14A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.8zM9.75 15.57V8.43L15.84 12l-6.09 3.57z'],
    ];
@endphp

<footer class="site-footer">
    <div class="container-bc relative z-10 py-14">
        <div class="grid gap-12 lg:grid-cols-12 lg:gap-10">
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" class="inline-flex rounded-2xl bg-white px-3 py-2" aria-label="BadiliCash home">
                    <img src="{{ asset('assets/images/badilicash-logo.png') }}" alt="BadiliCash" class="h-9 w-auto" width="200" height="57">
                </a>
                <p class="mt-5 max-w-sm text-sm leading-relaxed text-white/70">
                    BadiliCash is built for counters and checkouts that collect with UPI, QR codes, payment links, and QR sound boxes. Pages on this site show how those flows look. They do not move money.
                </p>
                <p class="mt-5 text-sm font-semibold text-white">Write to us</p>
                <a class="mt-1 inline-block text-sm text-green-soft hover:text-white" href="mailto:hello@badilicash.com">hello@badilicash.com</a>
                <ul class="mt-5 flex flex-wrap gap-2" aria-label="BadiliCash social profiles">
                    @foreach ($socials as $social)
                        <li>
                            <a class="footer-mark" href="{{ $social[1] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social[0] }}">
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" fill-rule="evenodd" aria-hidden="true"><path d="{{ $social[2] }}"/></svg>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="grid grid-cols-2 gap-x-6 gap-y-8 lg:col-span-8 lg:grid-cols-4">
                <div>
                    <h2 class="footer-title">Collections</h2>
                    <ul class="mt-4 space-y-2.5">
                        <li><a class="footer-link" href="{{ route('upi') }}">UPI payments</a></li>
                        <li><a class="footer-link" href="{{ route('qr') }}">QR code payments</a></li>
                        <li><a class="footer-link" href="{{ route('static-qr') }}">Static QR</a></li>
                        <li><a class="footer-link" href="{{ route('dynamic-qr') }}">Dynamic QR</a></li>
                        <li><a class="footer-link" href="{{ route('payment-links') }}">Payment links</a></li>
                        <li><a class="footer-link" href="{{ route('solutions') }}">All solutions</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-title">Sound boxes</h2>
                    <ul class="mt-4 space-y-2.5">
                        <li><a class="footer-link" href="{{ route('standard-sound-box') }}">Standard QR Sound Box</a></li>
                        <li><a class="footer-link" href="{{ route('digital-sound-box') }}">Digital QR Sound Box</a></li>
                        <li><a class="footer-link" href="{{ route('dynamic-sound-box') }}">Dynamic QR Sound Box</a></li>
                        <li><a class="footer-link" href="{{ route('contact') }}?intent=order">Order a sound box</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-title">Developers</h2>
                    <ul class="mt-4 space-y-2.5">
                        <li><a class="footer-link" href="{{ route('developers') }}">API overview</a></li>
                        <li><a class="footer-link" href="{{ route('developers') }}#payin">Pay-in sample</a></li>
                        <li><a class="footer-link" href="{{ route('developers') }}#webhooks">Webhooks</a></li>
                        <li><a class="footer-link" href="{{ route('contact') }}">Developer support</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-title">Company</h2>
                    <ul class="mt-4 space-y-2.5">
                        <li><a class="footer-link" href="{{ route('home') }}">Home</a></li>
                        <li><a class="footer-link" href="{{ route('about') }}">About</a></li>
                        <li><a class="footer-link" href="{{ route('how-it-works') }}">How it works</a></li>
                        <li><a class="footer-link" href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a class="footer-link" href="{{ route('faq') }}">FAQs</a></li>
                        <li><a class="footer-link" href="{{ route('contact') }}">Contact</a></li>
                        <li><a class="footer-link" href="{{ route('privacy') }}">Privacy</a></li>
                        <li><a class="footer-link" href="{{ route('terms') }}">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-12 flex flex-col gap-3 border-t border-white/10 pt-6 text-xs leading-relaxed text-white/55 sm:flex-row sm:items-start sm:justify-between">
            <p>© {{ date('Y') }} BadiliCash. All rights reserved.</p>
            <p class="max-w-xl sm:text-right">Sample QR codes, checkout screens, and sound-box flows on this website are demonstrations. They are not live payment processing.</p>
        </div>
    </div>
</footer>

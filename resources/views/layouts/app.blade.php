<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'BadiliCash — Smarter Payments. Seamless Possibilities.')</title>
    <meta name="description" content="@yield('description', 'BadiliCash helps businesses collect digital payments with UPI, QR codes, payment links and developer-friendly APIs.')">
    <meta name="theme-color" content="#263D87">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta property="og:site_name" content="BadiliCash">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title')))">
    <meta property="og:description" content="@yield('description', 'Power your business with innovative digital payment solutions from BadiliCash.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/badilicash-logo.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', trim($__env->yieldContent('title')))">
    <meta name="twitter:description" content="@yield('description')">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/mark.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/mark.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=ibm-plex-mono:400,500|plus-jakarta-sans:400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        #main h1.display {
            font-size: clamp(1.85rem, 3.1vw, 2.65rem);
            line-height: 1.14;
            letter-spacing: -0.03em;
        }
        #main h2.section-kicker,
        #main h2.text-3xl,
        #main h2.text-4xl,
        #main .cta-gradient h2 {
            font-size: clamp(1.5rem, 1.9vw, 1.8rem);
            line-height: 1.28;
            letter-spacing: -0.02em;
        }
        #main .lead {
            font-size: 0.95rem;
            line-height: 1.65;
        }
        #main .page-hero-roomy h1.display {
            font-size: clamp(1.35rem, 1.6vw, 1.7rem);
            line-height: 1.3;
            max-width: 22rem;
        }
        #main .page-hero-roomy .lead {
            font-size: 0.875rem;
            line-height: 1.65;
            max-width: 34rem;
        }
        body {
            overflow-x: clip;
        }
        header.site-header {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 50;
            background: transparent;
            border: 0;
        }
        #main > :first-child {
            padding-top: 4rem;
        }
        .color-round::after {
            top: 8%;
            right: 2.5rem;
            width: min(460px, 34vw);
            height: 84%;
        }
    </style>
</head>
<body class="min-h-screen bg-white text-ink">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:left-4 focus:top-4 focus:z-50 focus:rounded-full focus:bg-navy focus:px-4 focus:py-2 focus:text-white">Skip to content</a>
    <x-navbar />
    <main id="main">
        @yield('content')
    </main>
    <x-footer />
</body>
</html>

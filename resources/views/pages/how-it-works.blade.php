@extends('layouts.app')

@section('title', 'How It Works — BadiliCash')
@section('description', 'See the BadiliCash payment experience from merchant onboarding through payment request, QR or link, customer payment, confirmation and API notification.')

@section('content')
    <x-page-hero eyebrow="How it works" title="From onboarding to confirmation, in one sequence." cta="Talk to us" roomy>
        BadiliCash is organised around a payment request. Everything else — QR, link, customer action, confirmation and developer notification — hangs off that object.
    </x-page-hero>

    <section class="journey-wrap">
        <div class="container-bc">
            <div class="journey-stage" aria-label="Merchant onboarding journey">
                <svg class="journey-arc" viewBox="0 0 1120 760" preserveAspectRatio="xMidYMid meet" aria-hidden="true">
                    <path id="journeyArc" class="arc-path" pathLength="100" d="M 400 70 A 240 300 0 0 1 400 670" />
                    <circle class="arc-dot arc-dot-start" cx="400" cy="70" r="9" />
                    <circle class="arc-dot arc-dot-end" cx="400" cy="670" r="9" />
                    <circle class="arc-traveler" r="6">
                        <animateMotion dur="7s" repeatCount="indefinite" begin="1.5s" rotate="auto">
                            <mpath href="#journeyArc" />
                        </animateMotion>
                    </circle>
                </svg>

                <div class="journey-intro">
                    <h2>Merchant onboarding concept</h2>
                    <p>A business is introduced to BadiliCash and prepared to create collection requests. Live KYC and account provisioning belong to a later phase.</p>
                </div>

                <article class="journey-step" style="--x: 45.8%; --y: 13.8%; --d: 0.55s; --c: #d4536a;">
                    <span class="spacer"></span>
                    <div class="pin pin-card" aria-hidden="true">
                        <svg viewBox="0 0 64 48">
                            <rect x="2" y="6" width="46" height="32" rx="6" fill="#3d7ef0"/>
                            <rect x="8" y="13" width="12" height="8" rx="2" fill="#d7e6ff"/>
                            <rect x="8" y="27" width="22" height="3" rx="1.5" fill="#d7e6ff" opacity=".85"/>
                            <rect x="32" y="27" width="10" height="3" rx="1.5" fill="#d7e6ff" opacity=".55"/>
                        </svg>
                        <svg class="cursor" viewBox="0 0 24 24">
                            <path d="M5 2.5 19 12.2 12.2 13.4 9.4 20.6Z" fill="#172554" stroke="#fff" stroke-width="1.2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Payment request creation</h3>
                    <span class="dash"></span>
                    <p class="desc">Amount, currency, reference and optional note are captured as a request.</p>
                </article>

                <article class="journey-step" style="--x: 54.3%; --y: 28.9%; --d: 0.9s; --c: #d4893a;">
                    <span class="spacer"></span>
                    <div class="pin pin-photo" aria-hidden="true">
                        <svg viewBox="0 0 64 64">
                            <rect width="64" height="64" rx="10" fill="#eef4ff"/>
                            <rect x="10" y="10" width="8" height="8" fill="#263d87"/>
                            <rect x="22" y="10" width="4" height="8" fill="#263d87"/>
                            <rect x="30" y="10" width="8" height="8" fill="#263d87"/>
                            <rect x="42" y="10" width="4" height="8" fill="#263d87"/>
                            <rect x="50" y="10" width="4" height="8" fill="#263d87"/>
                            <rect x="10" y="22" width="4" height="4" fill="#263d87"/>
                            <rect x="22" y="22" width="16" height="16" fill="none" stroke="#239a45" stroke-width="3"/>
                            <rect x="28" y="28" width="4" height="4" fill="#239a45"/>
                            <rect x="46" y="22" width="8" height="4" fill="#263d87"/>
                            <rect x="10" y="30" width="4" height="8" fill="#263d87"/>
                            <rect x="46" y="32" width="4" height="8" fill="#263d87"/>
                            <rect x="54" y="30" width="4" height="12" fill="#263d87"/>
                            <rect x="10" y="46" width="8" height="8" fill="#263d87"/>
                            <rect x="22" y="46" width="4" height="8" fill="#263d87"/>
                            <rect x="30" y="46" width="12" height="4" fill="#263d87"/>
                            <rect x="30" y="54" width="4" height="4" fill="#263d87"/>
                            <rect x="46" y="46" width="8" height="8" fill="#263d87"/>
                        </svg>
                    </div>
                    <h3>QR or payment link generation</h3>
                    <span class="dash"></span>
                    <p class="desc">The same request can be presented as a Static QR, Dynamic QR or shareable URL.</p>
                </article>

                <article class="journey-step" style="--x: 57.1%; --y: 52.1%; --d: 1.25s; --c: #239a45;">
                    <span class="spacer"></span>
                    <div class="pin pin-photo" aria-hidden="true">
                        <svg viewBox="0 0 64 64">
                            <rect width="64" height="64" rx="10" fill="#f3f7f4"/>
                            <rect x="20" y="6" width="24" height="52" rx="5" fill="#172554"/>
                            <rect x="23" y="12" width="18" height="34" rx="2" fill="#f8fbff"/>
                            <rect x="26" y="16" width="12" height="12" rx="1" fill="#263d87"/>
                            <rect x="28" y="18" width="3" height="3" fill="#fff"/>
                            <rect x="33" y="18" width="3" height="3" fill="#fff"/>
                            <rect x="28" y="23" width="8" height="3" fill="#fff"/>
                            <rect x="26" y="32" width="12" height="3" rx="1" fill="#239a45"/>
                            <rect x="28" y="38" width="8" height="2" rx="1" fill="#c5d0e0"/>
                            <circle cx="32" cy="52" r="1.6" fill="#d7e0ea"/>
                        </svg>
                    </div>
                    <h3>Customer payment</h3>
                    <span class="dash"></span>
                    <p class="desc">The customer scans or opens the request and completes payment in their preferred app.</p>
                </article>

                <article class="journey-step" style="--x: 52.6%; --y: 73%; --d: 1.6s; --c: #7d8a32;">
                    <span class="spacer"></span>
                    <div class="pin pin-card pin-confirm" aria-hidden="true">
                        <svg viewBox="0 0 64 48">
                            <rect x="2" y="8" width="44" height="30" rx="6" fill="#3d7ef0"/>
                            <rect x="8" y="15" width="14" height="8" rx="2" fill="#d7e6ff"/>
                            <circle cx="46" cy="32" r="14" fill="#e9f8ee" stroke="#239a45" stroke-width="2"/>
                            <path class="check" d="M39 32.5 44 37.5 53.5 26" fill="none" stroke="#239a45" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Payment confirmation</h3>
                    <span class="dash"></span>
                    <p class="desc">The interface moves to a paid, pending or expired state so staff can see what happened.</p>
                </article>

                <article class="journey-step" style="--x: 44.4%; --y: 84.7%; --d: 1.95s; --c: #3b6fd8;">
                    <span class="spacer"></span>
                    <div class="pin pin-bell" aria-hidden="true">
                        <svg viewBox="0 0 64 64">
                            <rect width="64" height="64" rx="14" fill="#eef3ff"/>
                            <path class="bell" d="M32 14a12 12 0 0 0-12 12v7.2c0 1.4-.5 2.8-1.4 3.9L16 40.2h32l-2.6-3.1a6 6 0 0 1-1.4-3.9V26a12 12 0 0 0-12-12Z" fill="#f5b942" stroke="#172554" stroke-width="1.6" stroke-linejoin="round"/>
                            <path d="M27 42.5a5 5 0 0 0 10 0" fill="none" stroke="#172554" stroke-width="1.8" stroke-linecap="round"/>
                            <circle cx="44" cy="18" r="8" fill="#e11d48"/>
                            <text x="44" y="21.5" text-anchor="middle" font-size="10" font-weight="700" fill="#fff">1</text>
                        </svg>
                    </div>
                    <h3>API notification concept</h3>
                    <span class="dash"></span>
                    <p class="desc">A webhook-style callback can tell your system the same status, using sample payloads until live APIs ship.</p>
                </article>
            </div>
        </div>
    </section>

    <style>
        .journey-wrap {
            background:
                radial-gradient(520px 280px at 12% 20%, rgba(35, 154, 69, 0.08), transparent 70%),
                linear-gradient(180deg, #f7faf8 0%, #f3f6fb 100%);
            padding: 28px 0 64px;
        }
        .journey-stage {
            position: relative;
            width: 100%;
            aspect-ratio: 1120 / 760;
        }
        .journey-arc {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            overflow: visible;
        }
        .arc-path {
            fill: none;
            stroke: #239a45;
            stroke-width: 5;
            stroke-linecap: round;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: arc-draw 1.6s cubic-bezier(.4, 0, .2, 1) forwards;
        }
        .arc-dot {
            fill: #239a45;
            transform-box: fill-box;
            transform-origin: center;
            opacity: 0;
            animation: dot-pop .45s ease forwards;
        }
        .arc-dot-start { animation-delay: .15s; }
        .arc-dot-end { animation-delay: 1.45s; }
        .arc-traveler {
            fill: #239a45;
            filter: drop-shadow(0 0 6px rgba(35, 154, 69, .65));
            opacity: 0;
            animation: traveler-in .3s ease 1.5s forwards;
        }
        .journey-intro {
            position: absolute;
            top: 22%;
            left: 2.5%;
            width: 31%;
            animation: intro-in .7s ease both;
        }
        .journey-intro h2 {
            margin: 0;
            font-size: clamp(1.6rem, 2.2vw, 2rem);
            line-height: 1.08;
            letter-spacing: -0.035em;
            font-weight: 800;
            color: #1a2140;
        }
        .journey-intro p {
            margin: 14px 0 0;
            max-width: 34ch;
            font-size: 14px;
            line-height: 1.55;
            font-weight: 650;
            color: #243056;
        }
        .journey-step {
            position: absolute;
            left: 0;
            right: 2%;
            top: var(--y);
            display: grid;
            grid-template-columns: calc(var(--x) - 28px) 56px auto minmax(28px, 1fr) minmax(168px, 220px);
            align-items: center;
            column-gap: 10px;
            transform: translateY(-50%);
            opacity: 0;
            animation: step-in .55s ease forwards;
            animation-delay: var(--d);
        }
        .pin {
            width: 56px;
            height: 56px;
            display: grid;
            place-items: center;
            position: relative;
            animation: pin-float 3.6s ease-in-out infinite;
            animation-delay: var(--d);
        }
        .pin svg { width: 56px; height: 56px; display: block; }
        .pin-card {
            width: 64px;
            height: 52px;
            filter: drop-shadow(0 8px 10px rgba(38, 61, 135, .18));
        }
        .pin-card svg { width: 64px; height: 48px; }
        .pin-photo {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 18px -12px rgba(23, 37, 84, .55);
        }
        .cursor {
            position: absolute;
            width: 22px !important;
            height: 22px !important;
            right: -6px;
            bottom: -4px;
            transform-origin: 20% 15%;
            animation: cursor-tap 2.4s ease-in-out infinite;
        }
        .check {
            stroke-dasharray: 24;
            stroke-dashoffset: 24;
            animation: check-draw .5s ease forwards;
            animation-delay: calc(var(--d) + .35s);
        }
        .bell {
            transform-box: fill-box;
            transform-origin: top center;
            animation: bell-ring 2.8s ease-in-out infinite;
            animation-delay: 2.1s;
        }
        .journey-step h3 {
            margin: 0;
            max-width: 190px;
            font-size: 15px;
            line-height: 1.25;
            font-weight: 800;
            letter-spacing: -0.02em;
            color: var(--c);
        }
        .dash {
            height: 2px;
            border-radius: 99px;
            background: repeating-linear-gradient(90deg, #c3cedd 0 8px, transparent 8px 13px);
            transform: scaleX(0);
            transform-origin: left center;
            animation: dash-in .55s ease forwards;
            animation-delay: calc(var(--d) + .15s);
        }
        .desc {
            margin: 0;
            font-size: 13px;
            line-height: 1.45;
            color: #5c6b86;
        }
        @keyframes arc-draw { to { stroke-dashoffset: 0; } }
        @keyframes dot-pop { from { opacity: 0; transform: scale(.4); } to { opacity: 1; transform: scale(1); } }
        @keyframes traveler-in { to { opacity: 1; } }
        @keyframes intro-in { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: none; } }
        @keyframes step-in { from { opacity: 0; transform: translateY(calc(-50% + 10px)); } to { opacity: 1; transform: translateY(-50%); } }
        @keyframes dash-in { to { transform: scaleX(1); } }
        @keyframes pin-float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-4px); } }
        @keyframes cursor-tap {
            0%, 55% { transform: translate(0, 0) scale(1); }
            70% { transform: translate(-3px, -3px) scale(.92); }
            82%, 100% { transform: translate(0, 0) scale(1); }
        }
        @keyframes check-draw { to { stroke-dashoffset: 0; } }
        @keyframes bell-ring {
            0%, 62%, 100% { transform: rotate(0); }
            70% { transform: rotate(12deg); }
            78% { transform: rotate(-10deg); }
            86% { transform: rotate(6deg); }
            94% { transform: rotate(-3deg); }
        }
        @media (max-width: 980px) {
            .journey-wrap { padding: 12px 0 48px; }
            .journey-stage {
                aspect-ratio: auto;
                display: flex;
                flex-direction: column;
                gap: 22px;
            }
            .journey-arc { display: none; }
            .journey-intro { position: static; width: auto; }
            .journey-intro p { max-width: none; }
            .journey-step {
                position: relative;
                top: auto;
                right: auto;
                display: grid;
                grid-template-columns: 56px 1fr;
                gap: 4px 12px;
                transform: none;
                opacity: 1;
                animation: step-in-mobile .5s ease both;
            }
            .spacer, .dash { display: none; }
            .pin { grid-column: 1; grid-row: 1 / span 2; align-self: start; }
            .journey-step h3 { grid-column: 2; grid-row: 1; }
            .desc { grid-column: 2; grid-row: 2; }
        }
        @keyframes step-in-mobile { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: none; } }
        @media (prefers-reduced-motion: reduce) {
            .arc-path { animation: none; stroke-dashoffset: 0; }
            .arc-dot, .arc-traveler, .journey-intro, .journey-step, .dash, .check, .cursor, .bell, .pin {
                animation: none !important;
                opacity: 1;
                transform: none;
            }
            .dash { transform: none; }
            .check { stroke-dashoffset: 0; }
        }
    </style>
    <x-cta-band title="See it mapped to your business" text="Tell us whether you collect at a counter, through invoices, or inside a product — we’ll sketch the journey." />
@endsection

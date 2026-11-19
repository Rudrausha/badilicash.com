<?php

namespace App\Support;

class SoundBoxCatalog
{
    /**
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        $audio = ['Audio Feedback', 'The sound box gives audio notifications for successful transactions, payment errors, or system issues.'];
        $touchless = ['Touchless payment', 'Customers scan the QR code on the sound box with a smartphone or digital wallet, without handing over a card.'];
        $realtime = ['Real-time transaction updates', 'Audio confirmation of the payment amount so the customer and merchant agree on the value.'];
        $battery = ['Battery and power efficiency', 'A rechargeable battery or low-power mode so the box can last through a full day of collections.'];
        $history = ['Transaction history and reporting', 'Transaction logs that help a business track payments, view reports, and see patterns.'];
        $security = ['Security features', 'Alerts for the customer and the merchant if a QR code has expired, is invalid, or the transaction looks unusual.'];
        $sounds = ['Customizable sounds and alerts', 'Audio alerts can use a melody or voice that fits the business.'];
        $compact = ['Compact and portable design', 'A small sound box that is easy to place in an existing counter setup.'];
        $merchant = ['Notifications for merchants', 'Real-time merchant alerts by SMS, email, or app when a transaction completes or something needs attention.'];
        $display = ['Multifunctional display', 'A visual display alongside the audio, so customers can see the QR code they need to scan.'];
        $simple = ['User-friendly interface', 'Setup and everyday use need little technical knowledge. Merchants can manage settings and common issues themselves.'];
        $sim = ['SIM slot', 'A SIM slot so the sound box can stay connected on a mobile network.'];
        $wifi = ['Wi-Fi connection', 'A Wi-Fi connection for payment updates while the sound box is online.'];

        return [
            'standard' => [
                'route' => 'standard-sound-box',
                'icon' => 'scan-line',
                'name' => 'Standard QR Sound Box',
                'menu' => 'Displayed QR with spoken payment confirmation.',
                'headline' => 'A counter QR that speaks when the payment lands.',
                'summary' => 'Standard QR Sound Box with a displayed QR, audio confirmation, and merchant alerts.',
                'intro' => 'The Standard QR Sound Box shows a QR code customers already know how to scan, then confirms the amount out loud so both sides hear the same result.',
                'image' => 'assets/images/soundbox/standard-front.png',
                'imageAlt' => 'BadiliCash Standard QR Sound Box with the display QR code and charging slot labelled',
                'gallery' => [],
                'features' => [
                    ['QR code scanning', 'An integrated QR on the sound box, scanned with a smartphone or a dedicated scanner.'],
                    $audio,
                    $touchless,
                    $realtime,
                    $battery,
                    $history,
                    $security,
                    $sounds,
                    ['Ease of use', 'Plug-and-play setup that does not need a technical install.'],
                    $compact,
                    ['Durability', 'Options built for weather, dust, and the bumps of a busy counter.'],
                    $merchant,
                    ['Cost-effectiveness', 'Priced so small businesses and new teams can put a QR sound box on the counter.'],
                    ['Compatibility with apps', 'Works with apps for content, audio customization, and scan activity.'],
                ],
            ],
            'digital' => [
                'route' => 'digital-sound-box',
                'icon' => 'radio',
                'name' => 'Digital QR Sound Box',
                'menu' => 'On-screen QR with SIM, Wi-Fi, and audio.',
                'headline' => 'A digital QR on the box, confirmed by voice.',
                'summary' => 'Digital QR Sound Box with an on-screen QR, audio feedback, SIM slot, and Wi-Fi.',
                'intro' => 'The Digital QR Sound Box puts the QR on the device itself. Customers scan it from any UPI app, and the box confirms the payment out loud.',
                'image' => 'assets/images/soundbox/digital-front.png',
                'imageAlt' => 'BadiliCash Digital QR Sound Box showing a scan-and-pay QR code',
                'gallery' => [],
                'features' => [
                    ['Digital QR code', 'The QR is shown on the sound box for a phone or scanner to read.'],
                    $audio,
                    $touchless,
                    $realtime,
                    $battery,
                    $history,
                    $security,
                    $sounds,
                    $display,
                    $compact,
                    $simple,
                    $merchant,
                    $sim,
                    $wifi,
                ],
            ],
            'dynamic' => [
                'route' => 'dynamic-sound-box',
                'icon' => 'refresh-cw',
                'name' => 'Dynamic QR Sound Box',
                'menu' => 'A new QR for each transaction, with audio confirmation.',
                'headline' => 'A new QR for every transaction, read back by the box.',
                'summary' => 'Dynamic QR Sound Box that generates a fresh QR per transaction and confirms the amount by audio.',
                'intro' => 'The Dynamic QR Sound Box creates a QR that changes with each transaction, shows it on the display, and speaks the amount when the payment is done.',
                'image' => 'assets/images/soundbox/dynamic-front.png',
                'imageAlt' => 'BadiliCash Dynamic QR Sound Box with the display QR code and charging slot labelled',
                'gallery' => [
                    [
                        'src' => 'assets/images/soundbox/dynamic-back.png',
                        'alt' => 'Back of the Dynamic QR Sound Box showing the power button, mode button, volume controls, and speaker',
                    ],
                ],
                'features' => [
                    ['Dynamic QR code generation', 'The sound box generates a dynamic QR code that changes with each transaction.'],
                    $audio,
                    $touchless,
                    $realtime,
                    $battery,
                    $history,
                    $security,
                    $sounds,
                    ['Multifunctional display', 'An LCD or LED screen shows the dynamic QR code next to the audio feedback.'],
                    $compact,
                    $simple,
                    $merchant,
                    $sim,
                    $wifi,
                ],
            ],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public static function get(string $key): array
    {
        $all = self::all();

        abort_unless(isset($all[$key]), 404);

        return $all[$key];
    }
}

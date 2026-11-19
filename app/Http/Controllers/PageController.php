<?php

namespace App\Http\Controllers;

use App\Support\SoundBoxCatalog;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function solutions(): View
    {
        return view('pages.solutions');
    }

    public function upi(): View
    {
        return view('pages.upi');
    }

    public function qrPayments(): View
    {
        return view('pages.qr-payments');
    }

    public function staticQr(): View
    {
        return view('pages.static-qr');
    }

    public function dynamicQr(): View
    {
        return view('pages.dynamic-qr');
    }

    public function paymentLinks(): View
    {
        return view('pages.payment-links');
    }

    public function standardSoundBox(): View
    {
        return view('pages.sound-box', ['product' => SoundBoxCatalog::get('standard')]);
    }

    public function digitalSoundBox(): View
    {
        return view('pages.sound-box', ['product' => SoundBoxCatalog::get('digital')]);
    }

    public function dynamicSoundBox(): View
    {
        return view('pages.sound-box', ['product' => SoundBoxCatalog::get('dynamic')]);
    }

    public function howItWorks(): View
    {
        return view('pages.how-it-works');
    }

    public function developers(): View
    {
        return view('pages.developers');
    }

    public function pricing(): View
    {
        return view('pages.pricing');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }

    public function terms(): View
    {
        return view('pages.terms');
    }
}

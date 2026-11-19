<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/solutions/upi', [PageController::class, 'upi'])->name('upi');
Route::get('/solutions/qr', [PageController::class, 'qrPayments'])->name('qr');
Route::get('/solutions/static-qr', [PageController::class, 'staticQr'])->name('static-qr');
Route::get('/solutions/dynamic-qr', [PageController::class, 'dynamicQr'])->name('dynamic-qr');
Route::get('/solutions/payment-links', [PageController::class, 'paymentLinks'])->name('payment-links');
Route::get('/solutions/standard-qr-sound-box', [PageController::class, 'standardSoundBox'])->name('standard-sound-box');
Route::get('/solutions/digital-qr-sound-box', [PageController::class, 'digitalSoundBox'])->name('digital-sound-box');
Route::get('/solutions/dynamic-qr-sound-box', [PageController::class, 'dynamicSoundBox'])->name('dynamic-sound-box');
Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');
Route::get('/developers', [PageController::class, 'developers'])->name('developers');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::controller(RouteController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/overOns', 'overOns')->name('overOns.index');
    Route::get('/pakketten', 'pakketten')->name('pakketten.index');
    Route::get('/contact', 'contact')->name('contact.index');

});

Route::post('/contact', [MailController::class, 'send'])
    ->middleware('contactThrottle')
    ->name('contact.send');

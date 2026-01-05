<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('Home.index');
})->name('home');


Route::get('/about', function () {
    return view('About.about');
})->name('about');


Route::get('/pricing', function () {
    return view('Pricing.pricing');
})->name('pricing');

Route::get('/whitelabel', function () {
    return view('White Label.whitelabel');
})->name('whitelabel');


Route::get('/orderinfo', function () {
    return view('Order Info.Order_Info');
})->name('orderinfo');
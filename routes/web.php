<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/registered-office-address', function () {
    return view('registered-office');
})->name('registered-office');

Route::get('/director-service-address', function () {
    return view('director-service');
})->name('director-service');

Route::get('/virtual-business-address', function () {
    return view('virtual-business');
})->name('virtual-business');

Route::get('/virtual-business-plus', function () {
    return view('virtual-business-plus');
})->name('virtual-business-plus');

Route::get('/telephone-answering-service', function () {
    return view('telephone-answering');
})->name('telephone-answering');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/our-offices', function () {
    return view('locations');
})->name('locations');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/virtual-business-address-and-telephone-answering-service', function () {
    return view('virtual-business-and-telephone');
})->name('virtual-business-and-telephone');

Route::get('/virtual-business-plus-and-telephone-answering-service', function () {
    return view('virtual-business-plus-and-telephone');
})->name('virtual-business-plus-and-telephone');

Route::get('/virtual-business-plus-and-legal-document-pack', function () {
    return view('virtual-business-plus-legal');
})->name('virtual-business-plus-legal');

Route::get('/frequently-asked-questions', function () {
    return view('faqs');
})->name('faqs');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/meet-the-team', function () {
    return view('meet-the-team');
})->name('meet-the-team');

Route::get('/affordable-meeting-rooms-london', function () {
    return view('meeting-rooms');
})->name('meeting-rooms');

Route::get('/readymade-companies', function () {
    return view('readymade-companies');
})->name('readymade-companies');

Route::get('/returns-parcel-management', function () {
    return view('returns-parcel');
})->name('returns-parcel');

Route::get('/{slug}', function ($slug) {
    return view('location-detail', ['slug' => $slug]);
})->name('location-detail');

Route::get('/index/cart', function () {
    return view('cart');
})->name('cart');

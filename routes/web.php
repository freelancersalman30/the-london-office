<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/order/success/{orderId}', [OrderController::class, 'success'])->name('order.success');
    Route::get('/order/cancel', [OrderController::class, 'cancel'])->name('order.cancel');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/clients', [AdminController::class, 'clients'])->name('admin.clients');
    Route::get('/admin/clients/{id}/orders', [AdminController::class, 'clientOrders'])->name('admin.client.orders');
    Route::post('/admin/clients/{id}/toggle', [AdminController::class, 'toggleClientStatus'])->name('admin.client.toggle');
    Route::get('/admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::put('/admin/orders/{id}/update', [AdminController::class, 'updateOrderStatus'])->name('admin.order.update');
    Route::get('/admin/services', [AdminController::class, 'services'])->name('admin.services');
    Route::post('/admin/services', [AdminController::class, 'createService'])->name('admin.service.create');
    Route::put('/admin/services/{id}', [AdminController::class, 'updateService'])->name('admin.service.update');
    Route::delete('/admin/services/{id}', [AdminController::class, 'deleteService'])->name('admin.service.delete');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/client/orders', [ClientController::class, 'orders'])->name('client.orders');
    Route::get('/client/orders/{id}', [ClientController::class, 'orderDetail'])->name('client.order.detail');
    Route::get('/client/services', [ClientController::class, 'services'])->name('client.services');
    Route::get('/client/locations', [ClientController::class, 'locations'])->name('client.locations');
    Route::get('/client/profile', [ClientController::class, 'profile'])->name('client.profile');
    Route::post('/client/profile', [ClientController::class, 'updateProfile'])->name('client.profile.update');
    Route::post('/client/password', [ClientController::class, 'updatePassword'])->name('client.password.update');
});

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

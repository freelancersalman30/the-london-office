@extends('layouts.master')

@section('title', 'Returns Parcel Management | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Returns Parcel Management</h1>
        <p class="text-xl text-gray-300">Manage your business returns and parcels with ease</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold mb-6">Simplify Your Returns Process</h2>
            <p class="text-gray-600 mb-4">Our Returns Parcel Management service helps businesses manage their returns efficiently. Perfect for e-commerce businesses and online retailers.</p>
            <p class="text-gray-600 mb-6">We can receive, log, store, and dispatch returned items on your behalf. Our secure facilities ensure your parcels are safe and tracked throughout the process.</p>
            
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4">Service Features:</h3>
                <ul class="feature-list">
                    <li><i class="fas fa-check"></i> Parcel receiving and logging</li>
                    <li><i class="fas fa-check"></i> Condition reporting</li>
                    <li><i class="fas fa-check"></i> Secure storage</li>
                    <li><i class="fas fa-check"></i> Quality inspection</li>
                    <li><i class="fas fa-check"></i> Redistribution or disposal</li>
                    <li><i class="fas fa-check"></i> Online tracking portal</li>
                </ul>
            </div>
            
            <div class="mt-8 text-center">
                <a href="{{ route('contact') }}" class="btn-accent">Contact Us for Pricing</a>
            </div>
        </div>
    </div>
</section>
@endsection
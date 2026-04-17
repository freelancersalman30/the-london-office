@extends('layouts.master')

@section('title', 'Virtual Business Plus + Telephone Answering | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Virtual Business Plus + Telephone Answering</h1>
        <p class="text-xl text-gray-300">Our most popular combined package</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">Most Popular Package</h2>
                <p class="text-gray-600 mb-6">Get the complete package with Virtual Business Plus and Telephone Answering Service.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">What's Included:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Prime Business Address</li>
                        <li><i class="fas fa-check"></i> Registered Office Address</li>
                        <li><i class="fas fa-check"></i> Director Service Address</li>
                        <li><i class="fas fa-check"></i> Free Scans & Uploads</li>
                        <li><i class="fas fa-check"></i> Calls answered in your company name</li>
                        <li><i class="fas fa-check"></i> Dedicated London Phone Number</li>
                        <li><i class="fas fa-check"></i> Unlimited Calls & Messages</li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <div class="inline-block bg-orange-500 text-white px-3 py-1 text-sm font-semibold mb-2">MOST POPULAR</div>
                    <h3 class="text-2xl font-bold mb-2">VBP + Telephone Answering</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£349.99<span class="text-xl">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-2">£29.16 per month</p>
                    <p class="text-gray-500 text-sm mb-6">+ £20 Postal Deposit + VAT</p>
                    
                    <button onclick="buyNow('VBP + Telephone Answering', 349.99)" class="btn-accent w-full mb-4">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
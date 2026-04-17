@extends('layouts.master')

@section('title', 'Virtual Business Plus | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="flex items-center gap-2 mb-2">
            <span class="bg-orange-500 text-white px-3 py-1 text-sm font-semibold rounded">50% OFF</span>
            <span class="text-orange-500 text-lg font-semibold">with code VBP50</span>
        </div>
        <h1 class="text-4xl font-bold mb-4">Virtual Business Plus</h1>
        <p class="text-xl text-gray-300">The complete package - Business mail + Official mail + Registered Office</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">What is Virtual Business Plus?</h2>
                <p class="text-gray-600 mb-4">Our Virtual Business Plus service combines everything in our Virtual Business Address with Registered Office Address and Director Service Address.</p>
                <p class="text-gray-600 mb-6">Receive both business mail AND official mail (Companies House, HMRC) at your dedicated London address.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">What's Included:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Prime Business Address for website, invoices, stationery</li>
                        <li><i class="fas fa-check"></i> Registered Office Address</li>
                        <li><i class="fas fa-check"></i> Director Service Address for all directors</li>
                        <li><i class="fas fa-check"></i> Free Scans & Uploads - All mail scanned free</li>
                        <li><i class="fas fa-check"></i> Free Mail Collection from our London offices</li>
                        <li><i class="fas fa-check"></i> Mail Forwarding at £0.50 per item + postage</li>
                        <li><i class="fas fa-check"></i> Meeting room access</li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <h3 class="text-2xl font-bold mb-2">Virtual Business Plus</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£199.99<span class="text-xl">/yr</span></div>
                    <p class="text-orange-600 font-semibold mb-2">Pay only £100 with code VBP50</p>
                    <p class="text-gray-500 text-sm mb-4">+ £20 Postal Deposit + VAT</p>
                    
                    <h4 class="font-semibold mb-3">Duration:</h4>
                    <div class="flex gap-2 mb-4 flex-wrap">
                        <button class="px-4 py-2 border-2 border-orange-500 bg-orange-500 text-white font-semibold">1 Year</button>
                        <button class="px-4 py-2 border border-gray-300 font-semibold">6 Months</button>
                        <button class="px-4 py-2 border border-gray-300 font-semibold">3 Months</button>
                        <button class="px-4 py-2 border border-gray-300 font-semibold">1 Month</button>
                    </div>
                    
                    <button onclick="buyNow('Virtual Business Plus', 199.99)" class="btn-accent w-full mb-4">Buy Now</button>
                    <p class="text-sm text-gray-500 text-center">30-day money-back guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
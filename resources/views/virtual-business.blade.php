@extends('layouts.master')

@section('title', 'Virtual Business Address | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Virtual Business Address</h1>
        <p class="text-xl text-gray-300">Use our prestigious Central London address for your business mail and correspondence</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">What is a Virtual Business Address?</h2>
                <p class="text-gray-600 mb-4">Our Virtual Business Address service allows you to use our Central London address as your business address on your website, invoices, stationery, and marketing materials.</p>
                <p class="text-gray-600 mb-6">This service is perfect if you wish to receive business mail only. All mail is sorted daily, scanned and uploaded to your portal for free.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">What's Included:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Prime Business Address - Use on your website, invoices, and stationery</li>
                        <li><i class="fas fa-check"></i> Free Scans & Uploads - Business mail scanned and uploaded at no cost</li>
                        <li><i class="fas fa-check"></i> Free Business Mail Collection from our London offices</li>
                        <li><i class="fas fa-check"></i> Business Mail Forwarding at £0.50 per item + postage</li>
                        <li><i class="fas fa-check"></i> Mail sorted daily</li>
                        <li><i class="fas fa-check"></i> Meeting room access (fees apply)</li>
                    </ul>
                </div>
                
                <div class="bg-orange-100 p-4 rounded-lg">
                    <p class="text-orange-800"><i class="fas fa-exclamation-circle mr-2"></i>Plus £20 Postal Deposit (inc VAT) required to cover postage costs</p>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <h3 class="text-2xl font-bold mb-2">Virtual Business Address</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£169.99<span class="text-xl">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-6">+ £20 Postal Deposit + VAT</p>
                    
                    <h4 class="font-semibold mb-3">Duration:</h4>
                    <div class="flex gap-2 mb-4">
                        <button class="px-4 py-2 border-2 border-orange-500 bg-orange-500 text-white font-semibold">1 Year</button>
                        <button class="px-4 py-2 border border-gray-300 font-semibold">6 Months</button>
                        <button class="px-4 py-2 border border-gray-300 font-semibold">3 Months</button>
                        <button class="px-4 py-2 border border-gray-300 font-semibold">1 Month</button>
                    </div>
                    
                    <button onclick="buyNow('Virtual Business Address', 169.99)" class="btn-accent w-full mb-4">Buy Now</button>
                    <p class="text-sm text-gray-500 text-center">30-day money-back guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">Our Locations</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg">
                <h4 class="font-bold mb-2">West End, W1</h4>
                <p class="text-gray-600">85 Great Portland Street<br>167-169 Great Portland Street</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                <h4 class="font-bold mb-2">City, EC1</h4>
                <p class="text-gray-600">63-66 Hatton Garden</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                <h4 class="font-bold mb-2">Strand, WC2</h4>
                <p class="text-gray-600">7 Bell Yard</p>
            </div>
        </div>
    </div>
</section>
@endsection
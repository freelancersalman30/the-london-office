@extends('layouts.master')

@section('title', 'Director Service Address | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Director Service Address</h1>
        <p class="text-xl text-gray-300">Keep your personal address private by using our prestigious London West End address</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">What is a Director Service Address?</h2>
                <p class="text-gray-600 mb-4">Since 2016, director details have been on the public register at Companies House. Using our Director Service Address keeps your personal residential address private.</p>
                <p class="text-gray-600 mb-6">Your directors' service address will appear on the public register instead of their home address, protecting their privacy.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">What's Included:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Use our West End London office as your Director Service Address</li>
                        <li><i class="fas fa-check"></i> Covers ALL directors of the company</li>
                        <li><i class="fas fa-check"></i> Official mail forwarded at £0.50 per item + postage</li>
                        <li><i class="fas fa-check"></i> Free mail collection from our office</li>
                        <li><i class="fas fa-check"></i> Mail scanned and uploaded to your portal FREE</li>
                    </ul>
                </div>
                
                <div class="bg-orange-100 p-4 rounded-lg">
                    <p class="text-orange-800"><i class="fas fa-info-circle mr-2"></i>Our Director Service Address service is only £10 per year when purchased with our Registered Office Address service</p>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <h3 class="text-2xl font-bold mb-2">Director Service Address</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£10<span class="text-xl">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-6">When purchased with Registered Office Address</p>
                    
                    <div class="text-gray-600 mb-4">
                        <p class="font-semibold">Standalone price:</p>
                        <p class="text-2xl font-bold">£25/yr + VAT</p>
                    </div>
                    
                    <button onclick="buyNow('Director Service Address', 10)" class="btn-accent w-full mb-4">Buy Now</button>
                    <p class="text-sm text-gray-500 text-center">30-day money-back guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
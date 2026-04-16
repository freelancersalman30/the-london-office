@extends('layouts.master')

@section('title', 'Registered Office Address | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Registered Office Address</h1>
        <p class="text-xl text-gray-300">Benefit from registering your company at our prestigious Central London West End address</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">What is a Registered Office Address?</h2>
                <p class="text-gray-600 mb-4">Every UK company must have a registered office address. This is the official address where Companies House sends correspondence, and it must be in the UK.</p>
                <p class="text-gray-600 mb-6">Purchase this service if you wish to receive 'official' mail only (Companies House, HMRC, and Court Documents). Your address will appear on the public register at Companies House.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">What's Included:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Use our prestigious West End London office as your company's Registered Office Address</li>
                        <li><i class="fas fa-check"></i> Official Mail Forwarding - £0.50 per item + postal charges</li>
                        <li><i class="fas fa-check"></i> Free Scans & Uploads - Official mail is scanned and securely uploaded to your portal at no cost</li>
                        <li><i class="fas fa-check"></i> Director Service Address - Add for only £10/yr (when purchased with Registered Office)</li>
                        <li><i class="fas fa-check"></i> Free Official Mail Collection from our Great Portland Street office</li>
                        <li><i class="fas fa-check"></i> Mail sorted daily and forwarded to you</li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <h3 class="text-2xl font-bold mb-2">Registered Office Address</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£49.99<span class="text-xl">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-6">First year only – renews at £49.99/yr + VAT</p>
                    
                    <div class="mb-4">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="w-4 h-4">
                            <span>Add Director Service Address (+£10/yr)</span>
                        </label>
                    </div>
                    
                    <button class="btn-accent w-full mb-4">Buy Now</button>
                    <p class="text-sm text-gray-500 text-center">30-day money-back guarantee</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">Why Choose Our Service?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg">
                <i class="fas fa-building text-orange-500 text-3xl mb-4"></i>
                <h4 class="font-bold mb-2">Prestigious Address</h4>
                <p class="text-gray-600">Our West End London address adds credibility to your business</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                <i class="fas fa-shield-alt text-orange-500 text-3xl mb-4"></i>
                <h4 class="font-bold mb-2">Privacy Protection</h4>
                <p class="text-gray-600">Keep your personal address off the public register</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                <i class="fas fa-envelope text-orange-500 text-3xl mb-4"></i>
                <h4 class="font-bold mb-2">Secure Mail Handling</h4>
                <p class="text-gray-600">All mail is scanned and uploaded to your secure portal</p>
            </div>
        </div>
    </div>
</section>
@endsection
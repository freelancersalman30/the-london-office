@extends('layouts.master')

@section('title', 'Telephone Answering Service | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Telephone Answering Service</h1>
        <p class="text-xl text-gray-300">Never miss another call - have calls answered professionally in your company name</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">Professional Call Handling</h2>
                <p class="text-gray-600 mb-4">Our friendly and professional staff answer all calls promptly and professionally in your company name. Messages are taken and sent straight to you via email instantly.</p>
                <p class="text-gray-600 mb-6">No per-call fees. All incoming calls are included in our Telephone Answering Service.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">What's Included:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Calls answered in YOUR company name</li>
                        <li><i class="fas fa-check"></i> Dedicated London Phone Number (020)</li>
                        <li><i class="fas fa-check"></i> Unlimited Phone Calls - No per call fees</li>
                        <li><i class="fas fa-check"></i> Messages sent by email instantly</li>
                        <li><i class="fas fa-check"></i> One Hour Setup - Activated within the hour</li>
                        <li><i class="fas fa-check"></i> Free MYCO App for instant messages</li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <h3 class="text-2xl font-bold mb-2">Telephone Answering</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£357<span class="text-xl">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">Or from £35/month</p>
                    
                    <div class="mb-4 p-4 bg-orange-100 rounded-lg">
                        <p class="font-semibold text-orange-800">PAY MONTHLY OPTIONS</p>
                        <p class="text-2xl font-bold text-orange-600">From only £35/month</p>
                    </div>
                    
                    <button class="btn-accent w-full mb-4">Buy Now</button>
                    <p class="text-sm text-gray-500 text-center">Call 0207 1128362 or book a call back</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
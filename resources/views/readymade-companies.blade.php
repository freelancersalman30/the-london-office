@extends('layouts.master')

@section('title', 'Ready Made Companies | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Ready Made Companies</h1>
        <p class="text-xl text-gray-300">Pre-incorporated UK companies available for immediate use</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">Instant UK Companies</h2>
                <p class="text-gray-600 mb-4">Our ready-made companies come with a free registered office and directors service address for one year. These are pre-incorporated at Companies House and ready for you to start trading immediately.</p>
                <p class="text-gray-600 mb-6">All companies are freshly incorporated and have never been traded. They include all standard incorporation documents.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">What's Included:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> UK Limited Company</li>
                        <li><i class="fas fa-check"></i> Free Registered Office Address (1 year)</li>
                        <li><i class="fas fa-check"></i> Free Director Service Address (1 year)</li>
                        <li><i class="fas fa-check"></i> Companies House Incorporation Certificate</li>
                        <li><i class="fas fa-check"></i> Memorandum & Articles of Association</li>
                        <li><i class="fas fa-check"></i> Share Certificate</li>
                        <li><i class="fas fa-check"></i> Registered in England & Wales</li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <h3 class="text-2xl font-bold mb-2">Ready Made Company</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£399<span class="text-xl">+VAT</span></div>
                    <p class="text-gray-500 text-sm mb-6">One-off payment</p>
                    
                    <p class="text-sm text-gray-600 mb-4">*Discount codes cannot be applied to company formations</p>
                    
                    <button class="btn-accent w-full mb-4">View Available Companies</button>
                    <p class="text-sm text-gray-500 text-center">Companies ready to trade immediately</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
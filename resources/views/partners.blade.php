@extends('layouts.master')

@section('title', 'Partners | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Partner Program</h1>
        <p class="text-xl text-gray-300">Work with us and earn commission promoting our services</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Earn Extra Income</h2>
            <p class="text-gray-600">Join our Partner Program and promote our services as your own. We work with many partners who generate extra income for their business.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-handshake text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Sign Up</h3>
                <p class="text-gray-600">Register your interest and join our partner program</p>
            </div>
            
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-bullhorn text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Promote</h3>
                <p class="text-gray-600">Share our services with your clients and audience</p>
            </div>
            
            <div class="text-center p-6">
                <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-pound-sign text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Earn</h3>
                <p class="text-gray-600">Receive commission for every successful referral</p>
            </div>
        </div>
        
        <div class="bg-gray-50 p-8 rounded-lg text-center">
            <h3 class="text-2xl font-bold mb-4">Ready to become a partner?</h3>
            <a href="{{ route('contact') }}" class="btn-accent">Register Your Interest</a>
        </div>
    </div>
</section>
@endsection
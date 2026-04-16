@extends('layouts.master')

@section('title', 'About Us | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">About Us</h1>
        <p class="text-xl text-gray-300">Learn more about The London Office and our mission</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">Who We Are</h2>
                <p class="text-gray-600 mb-4">The London Office, a division of Registered Office (UK) Ltd was formed in late 2014 and has since grown to become one of the UK's most trusted behind-the-scenes B2B service providers with over 70,000 clients globally.</p>
                <p class="text-gray-600 mb-4">We provide prestigious London addresses for businesses, helping entrepreneurs and companies establish a professional presence in the heart of London without the overhead of a physical office.</p>
                <p class="text-gray-600">Our services include Registered Office Address, Director Service Address, Virtual Business Address, Telephone Answering Service, and Meeting Room hire.</p>
            </div>
            <div>
                <img src="https://thelondonoffice.com/assets/img/TLO photo.png" alt="The London Office" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
        
        <div class="mt-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <i class="fas fa-star text-orange-500 text-3xl mb-4"></i>
                    <h4 class="font-bold mb-2">Excellence</h4>
                    <p class="text-gray-600 text-sm">We strive for excellence in everything we do</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-heart text-orange-500 text-3xl mb-4"></i>
                    <h4 class="font-bold mb-2">Customer Focus</h4>
                    <p class="text-gray-600 text-sm">Our customers are at the heart of our business</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-shield-alt text-orange-500 text-3xl mb-4"></i>
                    <h4 class="font-bold mb-2">Trust & Security</h4>
                    <p class="text-gray-600 text-sm">We build trust through reliability and security</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-lightbulb text-orange-500 text-3xl mb-4"></i>
                    <h4 class="font-bold mb-2">Innovation</h4>
                    <p class="text-gray-600 text-sm">We continuously innovate our services</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Charity of The Year</h2>
        <p class="text-gray-600 mb-6">We're proud to support St Elizabeth Hospice</p>
        <img src="https://thelondonoffice.com/assets/img/MYCOxST_Elizabeth_Hospice.png" alt="St Elizabeth Hospice" class="h-24 mx-auto">
    </div>
</section>
@endsection
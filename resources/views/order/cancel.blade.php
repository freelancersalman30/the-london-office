@extends('layouts.master')

@section('title', 'Order Cancelled - The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Order Cancelled</h1>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <i class="fas fa-times-circle text-6xl text-red-500"></i>
            </div>
            
            <h2 class="text-2xl font-bold mb-4">Payment was cancelled</h2>
            <p class="text-gray-600 mb-8">Your order was not completed. You can try again.</p>
            
            <div class="flex gap-4 justify-center">
                <a href="{{ route('cart') }}" class="btn-accent">Try Again</a>
                <a href="{{ route('home') }}" class="btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</section>
@endsection
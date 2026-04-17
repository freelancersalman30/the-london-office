@extends('layouts.master')

@section('title', 'Order Confirmed - The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Order Confirmed!</h1>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto text-center">
            <div class="mb-8">
                <i class="fas fa-check-circle text-6xl text-green-500"></i>
            </div>
            
            <h2 class="text-2xl font-bold mb-4">Thank you for your order!</h2>
            <p class="text-gray-600 mb-8">Your order has been successfully processed.</p>
            
            <div class="bg-gray-50 p-6 rounded-lg text-left mb-8">
                <h3 class="font-bold text-lg mb-4">Order Details</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Order ID</p>
                        <p class="font-medium">#{{ $order->id }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Service</p>
                        <p class="font-medium">{{ $order->service->name ?? 'Virtual Office Service' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Amount Paid</p>
                        <p class="font-medium">£{{ number_format($order->total_amount, 2) }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Transaction ID</p>
                        <p class="font-medium">{{ $order->transaction_id }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Start Date</p>
                        <p class="font-medium">{{ $order->started_at->format('M d, Y') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Expires</p>
                        <p class="font-medium">{{ $order->expires_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>

            <div class="flex gap-4 justify-center">
                <a href="{{ route('client.dashboard') }}" class="btn-primary">Go to Dashboard</a>
                <a href="{{ route('home') }}" class="btn-accent">Back to Home</a>
            </div>
        </div>
    </div>
</section>
@endsection
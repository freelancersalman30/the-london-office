@extends('client.layout')

@section('title', 'Order Details')
@section('header', 'Order Details')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">Order #{{ $order->id }}</h3>
            <span class="px-3 py-1 text-sm rounded-full 
                {{ $order->status === 'active' ? 'bg-green-100 text-green-800' : 
                   ($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-600') }}">
                {{ ucfirst($order->status) }}
            </span>
        </div>
    </div>
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-2">Service Details</h4>
                <p class="text-gray-900 font-medium">{{ $order->service->name ?? 'N/A' }}</p>
                <p class="text-gray-600 text-sm mt-1">{{ $order->service->description ?? '' }}</p>
            </div>
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-2">Payment Details</h4>
                <p class="text-gray-900">Amount: <span class="font-medium">£{{ number_format($order->total_amount, 2) }}</span></p>
                <p class="text-gray-600 text-sm">Payment Method: {{ ucfirst($order->payment_method ?? 'N/A') }}</p>
                <p class="text-gray-600 text-sm">Transaction ID: {{ $order->transaction_id ?? 'N/A' }}</p>
            </div>
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-2">Start Date</h4>
                <p class="text-gray-900">{{ $order->started_at ? $order->started_at->format('M d, Y') : 'Not started' }}</p>
            </div>
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-2">End Date</h4>
                <p class="text-gray-900">{{ $order->expires_at ? $order->expires_at->format('M d, Y') : 'N/A' }}</p>
            </div>
        </div>
        @if($order->notes)
        <div class="mt-6 pt-6 border-t border-gray-200">
            <h4 class="text-sm font-medium text-gray-500 mb-2">Notes</h4>
            <p class="text-gray-600">{{ $order->notes }}</p>
        </div>
        @endif
    </div>
    <div class="p-6 border-t border-gray-200">
        <a href="{{ route('client.orders') }}" class="text-orange-500 hover:text-orange-600">← Back to Orders</a>
    </div>
</div>
@endsection
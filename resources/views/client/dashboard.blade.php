@extends('client.layout')

@section('title', 'My Dashboard')
@section('header', 'My Dashboard')

@section('content')
@if(session('success'))
<div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded mb-6">
    {{ session('success') }}
</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Orders</p>
                <p class="text-2xl font-bold text-gray-900">{{ $orders->count() }}</p>
            </div>
            <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                <i class="fas fa-shopping-cart text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Active Services</p>
                <p class="text-2xl font-bold text-gray-900">{{ $activeServices->count() }}</p>
            </div>
            <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                <i class="fas fa-check-circle text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Account Status</p>
                <p class="text-2xl font-bold text-gray-900">Active</p>
            </div>
            <div class="h-12 w-12 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
                <i class="fas fa-user text-xl"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">My Active Services</h3>
        </div>
        <div class="p-6">
            @forelse($activeServices as $order)
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg mb-3">
                <div>
                    <p class="font-medium text-gray-900">{{ $order->service->name ?? 'Service' }}</p>
                    <p class="text-sm text-gray-500">Expires: {{ $order->expires_at ? $order->expires_at->format('M d, Y') : 'N/A' }}</p>
                </div>
                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
            </div>
            @empty
            <p class="text-center text-gray-500 py-4">No active services</p>
            @endforelse
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Recent Orders</h3>
        </div>
        <div class="p-6">
            @forelse($orders as $order)
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg mb-3">
                <div>
                    <p class="font-medium text-gray-900">{{ $order->service->name ?? 'Service' }}</p>
                    <p class="text-sm text-gray-500">£{{ number_format($order->total_amount, 2) }}</p>
                </div>
                <span class="px-2 py-1 text-xs rounded-full 
                    {{ $order->status === 'active' ? 'bg-green-100 text-green-800' : 
                       ($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-600') }}">
                    {{ ucfirst($order->status) }}
                </span>
            </div>
            @empty
            <p class="text-center text-gray-500 py-4">No orders yet</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
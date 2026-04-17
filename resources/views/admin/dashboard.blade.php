@extends('admin.layout')

@section('title', 'Admin Dashboard')
@section('header', 'Dashboard')

@section('content')
@if(session('success'))
<div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded mb-6">
    {{ session('success') }}
</div>
@endif

<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Clients</p>
                <p class="text-2xl font-bold text-gray-900">{{ $totalClients }}</p>
            </div>
            <div class="h-12 w-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600">
                <i class="fas fa-users text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Orders</p>
                <p class="text-2xl font-bold text-gray-900">{{ $totalOrders }}</p>
            </div>
            <div class="h-12 w-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600">
                <i class="fas fa-shopping-cart text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Revenue</p>
                <p class="text-2xl font-bold text-gray-900">£{{ number_format($totalRevenue, 2) }}</p>
            </div>
            <div class="h-12 w-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                <i class="fas fa-pound-sign text-xl"></i>
            </div>
        </div>
    </div>
    
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Active Services</p>
                <p class="text-2xl font-bold text-gray-900">{{ $activeServices ?? 0 }}</p>
            </div>
            <div class="h-12 w-12 bg-orange-100 rounded-full flex items-center justify-center text-orange-600">
                <i class="fas fa-cogs text-xl"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Orders -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900">Recent Orders</h3>
                <a href="{{ route('admin.orders') }}" class="text-sm text-orange-500 hover:text-orange-600">View All</a>
            </div>
        </div>
        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="text-left text-xs text-gray-500 uppercase">
                            <th class="pb-3">Order ID</th>
                            <th class="pb-3">Client</th>
                            <th class="pb-3">Service</th>
                            <th class="pb-3">Status</th>
                            <th class="pb-3">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($recentOrders as $order)
                        <tr>
                            <td class="py-3 text-sm">#{{ $order->id }}</td>
                            <td class="py-3 text-sm">{{ $order->user->name }}</td>
                            <td class="py-3 text-sm">{{ $order->service->name ?? 'N/A' }}</td>
                            <td class="py-3">
                                <span class="px-2 py-1 text-xs rounded-full 
                                    {{ $order->status === 'active' ? 'bg-green-100 text-green-800' : 
                                       ($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td class="py-3 text-sm">£{{ number_format($order->total_amount, 2) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-gray-500">No orders yet</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- Recent Clients -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h3 class="text-lg font-semibold text-gray-900">Recent Clients</h3>
                <a href="{{ route('admin.clients') }}" class="text-sm text-orange-500 hover:text-orange-600">View All</a>
            </div>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                @forelse($recentClients as $client)
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center gap-3">
                        <div class="h-10 w-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                            {{ strtoupper(substr($client->name, 0, 1)) }}
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">{{ $client->name }}</p>
                            <p class="text-xs text-gray-500">{{ $client->email }}</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 text-xs rounded-full {{ $client->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $client->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>
                @empty
                <p class="text-center text-gray-500 py-4">No clients yet</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
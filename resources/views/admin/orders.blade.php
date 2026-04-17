@extends('admin.layout')

@section('title', 'Manage Orders')
@section('header', 'Orders')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">All Orders</h3>
            <div class="flex gap-4">
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Active</option>
                    <option>Expired</option>
                    <option>Cancelled</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Order ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Client</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Service</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Started</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Expires</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($orders as $order)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900">#{{ $order->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $order->user->name ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $order->service->name ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900">£{{ number_format($order->total_amount, 2) }}</td>
                    <td class="px-6 py-4">
                        <form action="{{ route('admin.order.update', $order->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PUT')
                            <select name="status" onchange="this.form.submit()" class="text-xs px-2 py-1 border rounded 
                                {{ $order->status === 'active' ? 'border-green-500 text-green-600' : 
                                   ($order->status === 'pending' ? 'border-yellow-500 text-yellow-600' : 'border-gray-300') }}">
                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="active" {{ $order->status === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="expired" {{ $order->status === 'expired' ? 'selected' : '' }}>Expired</option>
                                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                        </form>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $order->started_at ? $order->started_at->format('M d, Y') : '-' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $order->expires_at ? $order->expires_at->format('M d, Y') : '-' }}</td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-orange-500 hover:text-orange-600 text-sm">View Details</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="px-6 py-8 text-center text-gray-500">No orders found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="p-6 border-t border-gray-200">
        {{ $orders->links() }}
    </div>
</div>
@endsection
@extends('admin.layout')

@section('title', 'Manage Clients')
@section('header', 'Clients')

@section('content')
<div class="bg-white rounded-lg shadow-sm border border-gray-200">
    <div class="p-6 border-b border-gray-200">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">All Clients</h3>
            <div class="flex gap-4">
                <input type="search" placeholder="Search clients..." class="px-4 py-2 border border-gray-300 rounded-lg text-sm">
            </div>
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Phone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Joined</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($clients as $client)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="h-8 w-8 bg-orange-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                                {{ strtoupper(substr($client->name, 0, 1)) }}
                            </div>
                            <span class="font-medium text-gray-900">{{ $client->name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $client->email }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $client->company_name ?? '-' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $client->phone ?? '-' }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{ $client->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $client->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">{{ $client->created_at->format('M d, Y') }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.client.orders', $client->id) }}" class="text-blue-600 hover:text-blue-800 text-sm">View Orders</a>
                            <form action="{{ route('admin.client.toggle', $client->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="text-{{ $client->is_active ? 'red' : 'green' }}-600 hover:text-{{ $client->is_active ? 'red' : 'green' }}-800 text-sm">
                                    {{ $client->is_active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="px-6 py-8 text-center text-gray-500">No clients found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="p-6 border-t border-gray-200">
        {{ $clients->links() }}
    </div>
</div>
@endsection
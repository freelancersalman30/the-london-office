@extends('client.layout')

@section('title', 'Our Locations')
@section('header', 'Our Locations')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($locations as $location)
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        @if($location->image)
        <img src="{{ asset('storage/' . $location->image) }}" alt="{{ $location->name }}" class="w-full h-48 object-cover">
        @else
        <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
            <i class="fas fa-map-marker-alt text-4xl text-gray-400"></i>
        </div>
        @endif
        <div class="p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $location->name }}</h3>
            <p class="text-gray-600 text-sm mb-4">{{ $location->address }}</p>
            <a href="{{ route('location-detail', $location->slug) }}" class="text-orange-500 hover:text-orange-600 text-sm font-medium">View Details →</a>
        </div>
    </div>
    @empty
    <div class="col-span-full text-center py-8 text-gray-500">
        No locations available
    </div>
    @endforelse
</div>
@endsection
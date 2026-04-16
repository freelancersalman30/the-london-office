@extends('layouts.master')

@section('title', 'Our Locations | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Our Locations</h1>
        <p class="text-xl text-gray-300">Choose from our prestigious Central London addresses</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 167-169 Great Portland Street -->
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">167-169 Great Portland Street</h3>
                    <p class="text-gray-600 mb-4">West End, W1W 5PF</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 px-3 py-1 text-sm">Great Portland Street (4 min walk)</span>
                        <span class="bg-gray-100 px-3 py-1 text-sm">2 Meeting Rooms</span>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li><i class="fas fa-wifi mr-2"></i>Broadband</li>
                        <li><i class="fas fa-snowflake mr-2"></i>Air Conditioning</li>
                        <li><i class="fas fa-coffee mr-2"></i>Tea & Coffee</li>
                        <li><i class="fas fa-utensils mr-2"></i>Kitchen</li>
                    </ul>
                    <a href="#" class="btn-primary mt-4 inline-block">Learn More</a>
                </div>
            </div>
            
            <!-- 85 Great Portland Street -->
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">85 Great Portland Street</h3>
                    <p class="text-gray-600 mb-4">West End, W1W 7LT</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 px-3 py-1 text-sm">Oxford Street</span>
                        <span class="bg-gray-100 px-3 py-1 text-sm">Central Location</span>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li><i class="fas fa-wifi mr-2"></i>Broadband</li>
                        <li><i class="fas fa-snowflake mr-2"></i>Air Conditioning</li>
                        <li><i class="fas fa-coffee mr-2"></i>Tea & Coffee</li>
                    </ul>
                    <a href="#" class="btn-primary mt-4 inline-block">Learn More</a>
                </div>
            </div>
            
            <!-- Hatton Garden -->
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">63-66 Hatton Garden</h3>
                    <p class="text-gray-600 mb-4">City, EC1N 8LE</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 px-3 py-1 text-sm">Farringdon Station</span>
                        <span class="bg-gray-100 px-3 py-1 text-sm">Business Hub</span>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li><i class="fas fa-wifi mr-2"></i>Broadband</li>
                        <li><i class="fas fa-snowflake mr-2"></i>Air Conditioning</li>
                        <li><i class="fas fa-coffee mr-2"></i>Tea & Coffee</li>
                    </ul>
                    <a href="#" class="btn-primary mt-4 inline-block">Learn More</a>
                </div>
            </div>
            
            <!-- 7 Bell Yard -->
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">7 Bell Yard</h3>
                    <p class="text-gray-600 mb-4">Strand, WC2A 2JR</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 px-3 py-1 text-sm">Covent Garden</span>
                        <span class="bg-gray-100 px-3 py-1 text-sm">Professional Area</span>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li><i class="fas fa-wifi mr-2"></i>Broadband</li>
                        <li><i class="fas fa-snowflake mr-2"></i>Air Conditioning</li>
                        <li><i class="fas fa-coffee mr-2"></i>Tea & Coffee</li>
                    </ul>
                    <a href="#" class="btn-primary mt-4 inline-block">Learn More</a>
                </div>
            </div>
            
            <!-- Edinburgh -->
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">64A Cumberland Street</h3>
                    <p class="text-gray-600 mb-4">Edinburgh, EH3 6RE</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 px-3 py-1 text-sm">New Town</span>
                        <span class="bg-gray-100 px-3 py-1 text-sm">Scotland</span>
                    </div>
                    <a href="#" class="btn-primary mt-4 inline-block">Learn More</a>
                </div>
            </div>
            
            <!-- Ipswich -->
            <div class="border rounded-lg overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-gray-400"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">50 Princes Street</h3>
                    <p class="text-gray-600 mb-4">Ipswich, IP1 1RJ</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-gray-100 px-3 py-1 text-sm">Suffolk</span>
                        <span class="bg-gray-100 px-3 py-1 text-sm">East Anglia</span>
                    </div>
                    <a href="#" class="btn-primary mt-4 inline-block">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
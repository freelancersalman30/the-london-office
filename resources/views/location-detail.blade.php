@extends('layouts.master')

@section('title', 'Location | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4" id="location-title">Location Details</h1>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <div class="bg-gray-200 h-96 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-building text-6xl text-gray-400"></i>
                </div>
                
                <h2 class="text-2xl font-bold mb-4">About This Location</h2>
                <p class="text-gray-600 mb-4">Situated in the heart of London, this location is a popular area for commercial industries. Our virtual office provides meeting space which is highly sought after in this exclusive location.</p>
                
                <h3 class="text-xl font-bold mb-3">Amenities</h3>
                <div class="flex flex-wrap gap-3 mb-6">
                    <span class="bg-gray-100 px-4 py-2 rounded-full"><i class="fas fa-wifi mr-2"></i>Broadband</span>
                    <span class="bg-gray-100 px-4 py-2 rounded-full"><i class="fas fa-snowflake mr-2"></i>Air Conditioning</span>
                    <span class="bg-gray-100 px-4 py-2 rounded-full"><i class="fas fa-coffee mr-2"></i>Tea & Coffee</span>
                    <span class="bg-gray-100 px-4 py-2 rounded-full"><i class="fas fa-utensils mr-2"></i>Kitchen</span>
                </div>
                
                <h3 class="text-xl font-bold mb-3">Nearest Stations</h3>
                <p class="text-gray-600">Great Portland Street (4 minute walk)</p>
            </div>
            
            <div>
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-bold mb-4">Meeting Rooms Available</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-lg text-center">
                            <h4 class="font-bold">Deben Room</h4>
                            <p class="text-gray-600 text-sm">Up to 4 people</p>
                            <p class="text-orange-500 font-bold">From £20/hr</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg text-center">
                            <h4 class="font-bold">Orwell Room</h4>
                            <p class="text-gray-600 text-sm">Up to 10 people</p>
                            <p class="text-orange-500 font-bold">From £40/hr</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Services at This Location</h3>
                    <ul class="space-y-2">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Registered Office Address</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Director Service Address</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Virtual Business Address</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Virtual Business Plus</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Mail Collection</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Meeting Room Hire</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const slug = '{{ $slug }}';
    const locations = {
        '167-169-great-portland-street': { title: '167-169 Great Portland Street, London', address: '167-169 Great Portland Street, London, W1W 5PF' },
        '85-great-portland-street': { title: '85 Great Portland Street, London', address: '85 Great Portland Street, London, W1W 7LT' },
        'hatton-garden': { title: '63-66 Hatton Garden, London', address: '63-66 Hatton Garden, London, EC1N 8LE' },
        'bell-yard': { title: '7 Bell Yard, London', address: '7 Bell Yard, London, WC2A 2JR' }
    };
    
    if (locations[slug]) {
        document.getElementById('location-title').textContent = locations[slug].title;
    }
</script>
@endsection
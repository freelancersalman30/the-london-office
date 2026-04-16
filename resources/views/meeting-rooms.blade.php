@extends('layouts.master')

@section('title', 'Meeting Rooms London | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Meeting Rooms in London</h1>
        <p class="text-xl text-gray-300">Host client meetings in our contemporary, unbranded meeting rooms in Central London</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">Your Office, Our Space</h2>
                <p class="text-gray-600 mb-4">Our meeting rooms are available for hire in Central London. Whether you need a space for a client presentation, team catch-up, training session, or brainstorming session, we've got you covered.</p>
                <p class="text-gray-600 mb-6">All meeting rooms come equipped with modern amenities and are situated in prestigious London locations.</p>
                
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Room Features:</h3>
                    <ul class="feature-list">
                        <li><i class="fas fa-check"></i> Contemporary, unbranded spaces</li>
                        <li><i class="fas fa-check"></i> Modern AV equipment</li>
                        <li><i class="fas fa-check"></i> High-speed broadband</li>
                        <li><i class="fas fa-check"></i> Air conditioned</li>
                        <li><i class="fas fa-check"></i> Tea & coffee facilities</li>
                        <li><i class="fas fa-check"></i> Flexible booking options</li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-8 rounded-lg sticky top-24">
                    <h3 class="text-2xl font-bold mb-4">Meeting Room Rates</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">From £20<span class="text-xl">/hour</span></div>
                    <p class="text-gray-500 text-sm mb-6">Central London locations</p>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Select Location</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                            <option>167-169 Great Portland Street</option>
                            <option>85 Great Portland Street</option>
                            <option>7 Bell Yard</option>
                            <option>63-66 Hatton Garden</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Number of Delegates</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg">
                            <option>2-4 people</option>
                            <option>5-8 people</option>
                            <option>8-10 people</option>
                        </select>
                    </div>
                    
                    <button class="btn-accent w-full">Check Availability</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">Our Locations</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg text-center">
                <h4 class="font-bold mb-2">167-169 Great Portland Street</h4>
                <p class="text-gray-600 text-sm">2 Meeting Rooms</p>
                <p class="text-orange-500 font-semibold mt-2">From £20/hr</p>
            </div>
            <div class="bg-white p-6 rounded-lg text-center">
                <h4 class="font-bold mb-2">85 Great Portland Street</h4>
                <p class="text-gray-600 text-sm">Meeting Rooms Available</p>
                <p class="text-orange-500 font-semibold mt-2">From £20/hr</p>
            </div>
            <div class="bg-white p-6 rounded-lg text-center">
                <h4 class="font-bold mb-2">7 Bell Yard</h4>
                <p class="text-gray-600 text-sm">Meeting Rooms Available</p>
                <p class="text-orange-500 font-semibold mt-2">From £20/hr</p>
            </div>
            <div class="bg-white p-6 rounded-lg text-center">
                <h4 class="font-bold mb-2">63-66 Hatton Garden</h4>
                <p class="text-gray-600 text-sm">Meeting Rooms Available</p>
                <p class="text-orange-500 font-semibold mt-2">From £20/hr</p>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.master')

@section('title', 'Contact Us | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl text-gray-300">We'd love to hear from you. Get in touch with our team.</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
                <p class="text-gray-600 mb-8">Our friendly and hard-working team at The London Office will sort your mail, take your calls and simply be there behind-the-scenes to support your business.</p>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-phone text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Sales</h4>
                            <p class="text-gray-600">020 7183 4775</p>
                            <p class="text-sm text-gray-500">09:00 – 17:30 | Monday to Friday</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center">
                            <i class="fas fa-file-signature text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Company Formations</h4>
                            <p class="text-gray-600">020 7183 2653</p>
                            <p class="text-sm text-gray-500">09:00 – 17:30 | Monday to Friday</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center">
                            <i class="fas fa-headset text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Support</h4>
                            <p class="text-gray-600">020 7183 5369</p>
                            <p class="text-sm text-gray-500">09:00 – 17:30 | Monday to Friday</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Email</h4>
                            <p class="text-gray-600">contact@thelondonoffice.com</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <form class="bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Your Name *</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Email Address *</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Location</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500">
                            <option>Select a location</option>
                            <option>85 Great Portland Street</option>
                            <option>7 Bell Yard</option>
                            <option>167-169 Great Portland Street</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-2">Message *</label>
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-accent w-full">Send Message</button>
                </form>
            </div>
        </div>
        
        <div class="mt-16">
            <h3 class="text-2xl font-bold mb-6 text-center">Visit Our Head Office</h3>
            <div class="bg-gray-100 p-8 rounded-lg text-center">
                <h4 class="text-xl font-bold mb-2">167-169 Great Portland Street</h4>
                <p class="text-gray-600">5th Floor, London, W1W 5PF</p>
                <p class="text-gray-500 mt-2">United Kingdom</p>
            </div>
        </div>
    </div>
</section>
@endsection
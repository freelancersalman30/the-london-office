@extends('layouts.master')

@section('title', 'Virtual Office, Mail and Call Handling | The London Office')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gray-900 text-white py-24 lg:py-32">
    <div class="absolute inset-0 bg-gradient-to-r from-gray-900 to-gray-800"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <h1 class="text-4xl lg:text-5xl font-bold mb-6">Make the Right Impression<br>With a Central London Address</h1>
            <p class="text-xl text-gray-300 mb-8">Build credibility, protect your privacy, and manage your business mail with ease - use our address as your registered office, director service address, or business correspondence address, all fully compliant.</p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('pricing') }}" class="btn-accent">Our Prices & Services</a>
                <a href="{{ route('locations') }}" class="bg-white text-gray-900 px-6 py-3 font-semibold hover:bg-gray-100">Our Locations</a>
            </div>
            <div class="mt-6">
                <a href="https://uk.trustpilot.com/review/thelondonoffice.com" target="_blank" class="text-yellow-400 text-sm">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span class="text-white ml-2">Trustpilot</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Everything You Need for a Professional London Business Address</h2>
            <p class="text-gray-600 text-lg">Tailored to Your Business</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Registered Office Address -->
            <div class="service-card text-center">
                <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-building text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Registered Office Address</h3>
                <p class="text-gray-600 mb-4">From £39.99/yr</p>
                <a href="{{ route('registered-office') }}" class="text-orange-500 font-semibold">Learn More</a>
            </div>
            
            <!-- Director Service Address -->
            <div class="service-card text-center">
                <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user-tie text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Director Service Address</h3>
                <p class="text-gray-600 mb-4">From £10/yr</p>
                <a href="{{ route('director-service') }}" class="text-orange-500 font-semibold">Learn More</a>
            </div>
            
            <!-- Virtual Business Address -->
            <div class="service-card text-center">
                <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Virtual Business Address</h3>
                <p class="text-gray-600 mb-4">From £169.99/yr</p>
                <a href="{{ route('virtual-business') }}" class="text-orange-500 font-semibold">Learn More</a>
            </div>
            
            <!-- Telephone Answering -->
            <div class="service-card text-center">
                <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Telephone Answering</h3>
                <p class="text-gray-600 mb-4">From £35/month</p>
                <a href="{{ route('telephone-answering') }}" class="text-orange-500 font-semibold">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Our Services & Pricing</h2>
            <p class="text-gray-600 text-lg">Save £49.99 when you upgrade to a combined package</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Registered Office -->
            <div class="price-card bg-white">
                <h3 class="text-2xl font-bold mb-2">Registered Office Address</h3>
                <div class="text-4xl font-bold text-orange-500 mb-4">£49.99<span class="text-lg text-gray-500">/yr</span></div>
                <p class="text-gray-500 text-sm mb-4">First year only – renews at £49.99/yr</p>
                <ul class="feature-list text-left mb-6">
                    <li><i class="fas fa-check"></i> Use our West End London office</li>
                    <li><i class="fas fa-check"></i> Official mail forwarding £0.50/item</li>
                    <li><i class="fas fa-check"></i> Free scans & uploads</li>
                    <li><i class="fas fa-check"></i> Director Service Address (+£10)</li>
                </ul>
                <a href="{{ route('registered-office') }}" class="btn-primary w-full">Learn More</a>
            </div>
            
            <!-- Virtual Business Address -->
            <div class="price-card bg-white">
                <h3 class="text-2xl font-bold mb-2">Virtual Business Address</h3>
                <div class="text-4xl font-bold text-orange-500 mb-4">£169.99<span class="text-lg text-gray-500">/yr</span></div>
                <p class="text-gray-500 text-sm mb-4">+ £20 Postal Deposit</p>
                <ul class="feature-list text-left mb-6">
                    <li><i class="fas fa-check"></i> Prime business address</li>
                    <li><i class="fas fa-check"></i> Free scans & uploads</li>
                    <li><i class="fas fa-check"></i> Business mail forwarding</li>
                    <li><i class="fas fa-check"></i> Meeting room access</li>
                </ul>
                <a href="{{ route('virtual-business') }}" class="btn-primary w-full">Learn More</a>
            </div>
            
            <!-- Virtual Business Plus -->
            <div class="price-card bg-white popular">
                <h3 class="text-2xl font-bold mb-2">Virtual Business Plus</h3>
                <div class="text-4xl font-bold text-orange-500 mb-4">£199.99<span class="text-lg text-gray-500">/yr</span></div>
                <p class="text-gray-500 text-sm mb-4">Pay only £100 with code VBP50</p>
                <ul class="feature-list text-left mb-6">
                    <li><i class="fas fa-check"></i> Everything in Virtual Business</li>
                    <li><i class="fas fa-check"></i> Registered Office Address</li>
                    <li><i class="fas fa-check"></i> Director Service Address</li>
                    <li><i class="fas fa-check"></i> Meeting room access</li>
                </ul>
                <a href="{{ route('virtual-business-plus') }}" class="btn-accent w-full">Learn More</a>
            </div>
        </div>
        
        <!-- Combined Packages -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="price-card bg-white">
                <h3 class="text-xl font-bold mb-2">VBA + Telephone Answering</h3>
                <div class="text-3xl font-bold text-orange-500 mb-4">£319.99<span class="text-lg text-gray-500">/yr</span></div>
                <p class="text-gray-500 text-sm mb-4">£26.66/month</p>
                <a href="{{ route('virtual-business-and-telephone') }}" class="btn-primary w-full">Learn More</a>
            </div>
            
            <div class="price-card bg-white popular">
                <h3 class="text-xl font-bold mb-2">VBP + Telephone Answering</h3>
                <div class="text-3xl font-bold text-orange-500 mb-4">£349.99<span class="text-lg text-gray-500">/yr</span></div>
                <p class="text-gray-500 text-sm mb-4">£29.16/month - MOST POPULAR</p>
                <a href="{{ route('virtual-business-plus-and-telephone') }}" class="btn-accent w-full">Learn More</a>
            </div>
            
            <div class="price-card bg-white">
                <h3 class="text-xl font-bold mb-2">VBP + Legal Document Pack</h3>
                <div class="text-3xl font-bold text-orange-500 mb-4">£369.99<span class="text-lg text-gray-500">/yr</span></div>
                <p class="text-gray-500 text-sm mb-4">£30.83/month</p>
                <a href="{{ route('virtual-business-plus-legal') }}" class="btn-primary w-full">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Join The London Office in 3 Simple Steps</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Choose & Pay</h3>
                <p class="text-gray-600">Select the service that fits your business needs and complete your payment online.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Verify Your ID</h3>
                <p class="text-gray-600">Complete your ID verification through our secure third-party provider — at no extra cost.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold mb-2">Start Using Your Service</h3>
                <p class="text-gray-600">Once your ID is approved, you're officially authorised to use your chosen address.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Why Choose The London Office?</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow">
                    <i class="fas fa-phone text-orange-500 text-2xl"></i>
                </div>
                <h4 class="font-bold mb-2">Telephone Answering</h4>
                <p class="text-sm text-gray-600">Calls answered in your company name</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow">
                    <i class="fas fa-headset text-orange-500 text-2xl"></i>
                </div>
                <h4 class="font-bold mb-2">Customer Support</h4>
                <p class="text-sm text-gray-600">Unlimited support via phone, email, live chat</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow">
                    <i class="fas fa-map-marker-alt text-orange-500 text-2xl"></i>
                </div>
                <h4 class="font-bold mb-2">Virtual Business Address</h4>
                <p class="text-sm text-gray-600">Use our address on your website & stationery</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow">
                    <i class="fas fa-scanner text-orange-500 text-2xl"></i>
                </div>
                <h4 class="font-bold mb-2">Unlimited Scans Free</h4>
                <p class="text-sm text-gray-600">Mail scanned and uploaded at no cost</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow">
                    <i class="fas fa-user-cog text-orange-500 text-2xl"></i>
                </div>
                <h4 class="font-bold mb-2">Account Management</h4>
                <p class="text-sm text-gray-600">Manage your account via our Office Support tool</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow">
                    <i class="fas fa-users text-orange-500 text-2xl"></i>
                </div>
                <h4 class="font-bold mb-2">Meeting Rooms</h4>
                <p class="text-sm text-gray-600">Host meetings in Central London</p>
            </div>
        </div>
    </div>
</section>

<!-- Locations -->
<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">Your prestigious business address in London's West End</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="text-xl font-bold mb-2">West End, W1</h4>
                <p class="text-gray-600 mb-4">85 Great Portland Street<br>London</p>
                <p class="text-gray-500 text-sm">167-169 Great Portland Street<br>London</p>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="text-xl font-bold mb-2">City, EC1</h4>
                <p class="text-gray-600 mb-4">Hatton Garden<br>London</p>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-lg">
                <h4 class="text-xl font-bold mb-2">Strand, WC2</h4>
                <p class="text-gray-600 mb-4">7 Bell Yard<br>London</p>
            </div>
        </div>
        
        <div class="text-center mt-8">
            <a href="{{ route('locations') }}" class="btn-primary">View All Locations</a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding bg-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold mb-4">Ready to get started?</h2>
        <p class="text-xl text-gray-300 mb-8">Join over 70,000 businesses worldwide</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('pricing') }}" class="btn-accent">View Our Prices</a>
            <a href="{{ route('contact') }}" class="bg-white text-gray-900 px-6 py-3 font-semibold hover:bg-gray-100">Contact Us</a>
        </div>
    </div>
</section>
@endsection
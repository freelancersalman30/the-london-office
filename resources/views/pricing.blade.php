@extends('layouts.master')

@section('title', 'Pricing | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Pricing</h1>
        <p class="text-xl text-gray-300">Choose the perfect package for your business needs</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <p class="text-orange-500 font-semibold">Save £49.99 when you upgrade to a combined package</p>
            <p class="text-gray-500">City Centre Locations - Choose from our prestigious London addresses</p>
        </div>
        
        <div class="mb-8 flex justify-center gap-4">
            <button onclick="switchPricingView('individual')" id="btn-individual" class="px-6 py-2 bg-orange-500 text-white font-semibold rounded">Individual Package</button>
            <button onclick="switchPricingView('combined')" id="btn-combined" class="px-6 py-2 border border-gray-300 font-semibold rounded">Combined Package</button>
        </div>
        
        <div id="individual-pricing">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Registered Office -->
                <div class="price-card">
                    <h3 class="text-2xl font-bold mb-2">Registered Office Address</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£49.99<span class="text-lg text-gray-500">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">+ VAT • First year £39.99</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Registered Office Address</li>
                        <li><i class="fas fa-check"></i> Official mail forwarding</li>
                        <li><i class="fas fa-check"></i> Free scans & uploads</li>
                        <li><i class="fas fa-check"></i> Director Service (+£10)</li>
                    </ul>
                    <button onclick="addToCart('Registered Office Address', 49.99)" class="btn-primary w-full">Add to Cart</button>
                </div>
                
                <!-- Director Service -->
                <div class="price-card">
                    <h3 class="text-2xl font-bold mb-2">Director Service Address</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£10<span class="text-lg text-gray-500">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">When with Registered Office</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Privacy protection</li>
                        <li><i class="fas fa-check"></i> Covers all directors</li>
                        <li><i class="fas fa-check"></i> Mail forwarding</li>
                        <li><i class="fas fa-check"></i> Free scans</li>
                    </ul>
                    <button onclick="addToCart('Director Service Address', 10)" class="btn-primary w-full">Add to Cart</button>
                </div>
                
                <!-- Virtual Business Address -->
                <div class="price-card">
                    <h3 class="text-2xl font-bold mb-2">Virtual Business Address</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£169.99<span class="text-lg text-gray-500">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">+ £20 deposit + VAT</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Business address</li>
                        <li><i class="fas fa-check"></i> Free scans & uploads</li>
                        <li><i class="fas fa-check"></i> Mail forwarding</li>
                        <li><i class="fas fa-check"></i> Meeting rooms</li>
                    </ul>
                    <button onclick="addToCart('Virtual Business Address', 169.99)" class="btn-primary w-full">Add to Cart</button>
                </div>
                
                <!-- Virtual Business Plus -->
                <div class="price-card popular">
                    <span class="absolute top-0 right-0 bg-orange-500 text-white text-xs px-2 py-1 rounded-bl">50% OFF</span>
                    <h3 class="text-2xl font-bold mb-2">Virtual Business Plus</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£199.99<span class="text-lg text-gray-500">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">£100 with VBP50 + £20 deposit</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Business address</li>
                        <li><i class="fas fa-check"></i> Registered Office</li>
                        <li><i class="fas fa-check"></i> Director Service</li>
                        <li><i class="fas fa-check"></i> Meeting rooms</li>
                    </ul>
                    <button onclick="addToCart('Virtual Business Plus', 199.99)" class="btn-accent w-full">Add to Cart</button>
                </div>
                
                <!-- Telephone Answering -->
                <div class="price-card">
                    <h3 class="text-2xl font-bold mb-2">Telephone Answering</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">£357<span class="text-lg text-gray-500">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">Or £35/month</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Your company name</li>
                        <li><i class="fas fa-check"></i> London phone number</li>
                        <li><i class="fas fa-check"></i> Unlimited calls</li>
                        <li><i class="fas fa-check"></i> Email messages</li>
                    </ul>
                    <button onclick="addToCart('Telephone Answering Service', 357)" class="btn-primary w-full">Add to Cart</button>
                </div>
                
                <!-- Meeting Rooms -->
                <div class="price-card">
                    <h3 class="text-2xl font-bold mb-2">Meeting Rooms</h3>
                    <div class="text-4xl font-bold text-orange-500 mb-2">From £20<span class="text-lg text-gray-500">/hr</span></div>
                    <p class="text-gray-500 text-sm mb-4">Central London locations</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Contemporary spaces</li>
                        <li><i class="fas fa-check"></i> AV equipment</li>
                        <li><i class="fas fa-check"></i> Tea & coffee</li>
                        <li><i class="fas fa-check"></i> Air conditioned</li>
                    </ul>
                    <a href="{{ route('meeting-rooms') }}" class="btn-primary w-full text-center block">Learn More</a>
                </div>
            </div>
        </div>
        
        <div id="combined-pricing" class="hidden">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="price-card">
                    <h3 class="text-xl font-bold mb-2">VBA + Telephone</h3>
                    <div class="text-3xl font-bold text-orange-500 mb-2">£319.99<span class="text-lg">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">£26.66/month</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Virtual Business Address</li>
                        <li><i class="fas fa-check"></i> Telephone Answering</li>
                    </ul>
                    <button onclick="addToCart('VBA + Telephone Answering', 319.99)" class="btn-primary w-full">Add to Cart</button>
                </div>
                
                <div class="price-card popular">
                    <span class="absolute top-0 right-0 bg-orange-500 text-white text-xs px-2 py-1 rounded-bl">POPULAR</span>
                    <h3 class="text-xl font-bold mb-2">VBP + Telephone</h3>
                    <div class="text-3xl font-bold text-orange-500 mb-2">£349.99<span class="text-lg">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">£29.16/month</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Virtual Business Plus</li>
                        <li><i class="fas fa-check"></i> Telephone Answering</li>
                    </ul>
                    <button onclick="addToCart('VBP + Telephone Answering', 349.99)" class="btn-accent w-full">Add to Cart</button>
                </div>
                
                <div class="price-card">
                    <h3 class="text-xl font-bold mb-2">VBP + Legal Pack</h3>
                    <div class="text-3xl font-bold text-orange-500 mb-2">£369.99<span class="text-lg">/yr</span></div>
                    <p class="text-gray-500 text-sm mb-4">£30.83/month</p>
                    <ul class="feature-list text-left mb-6">
                        <li><i class="fas fa-check"></i> Virtual Business Plus</li>
                        <li><i class="fas fa-check"></i> Legal Document Pack</li>
                    </ul>
                    <button onclick="addToCart('VBP + Legal Document Pack', 369.99)" class="btn-primary w-full">Add to Cart</button>
                </div>
            </div>
        </div>
        
        <div class="mt-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Compare Our Services</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-900 text-white">
                            <th class="p-4 text-left">Feature</th>
                            <th class="p-4 text-center">Registered Office</th>
                            <th class="p-4 text-center">Registered Office + Director</th>
                            <th class="p-4 text-center">Virtual Business Address</th>
                            <th class="p-4 text-center">Virtual Business Plus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="p-4">Registered Office Address</td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-4">Director Service Address</td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-4">Official Mail Forwarding</td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-4">Business Address</td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-4">Business Mail Forwarding</td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-times text-red-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-4">Free Scans & Uploads</td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                        <tr class="border-b">
                            <td class="p-4">Meeting Room Access</td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                        <tr>
                            <td class="p-4">MYCO App</td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                            <td class="p-4 text-center"><i class="fas fa-check text-green-500"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mt-12 text-center text-gray-500">
            <p>Prices exclude VAT. 20% VAT will be applied. All prices are per year unless stated.</p>
        </div>
    </div>
</section>

<section class="section-padding bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Unsure which service you need?</h2>
        <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg">
            <p class="text-gray-600 mb-4"><strong>What type of mail do you need to receive?</strong></p>
            <ul class="space-y-2 mb-6">
                <li><strong>Official mail only</strong> - Companies House, HMRC, Court Documents</li>
                <li><strong>Business mail only</strong> - Banks, clients, suppliers</li>
                <li><strong>Official & Business mail</strong> - Both types</li>
            </ul>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('registered-office') }}" class="btn-primary">Registered Office Address</a>
                <a href="{{ route('virtual-business') }}" class="btn-primary">Virtual Business Address</a>
                <a href="{{ route('virtual-business-plus') }}" class="btn-accent">Virtual Business Plus</a>
            </div>
            <p class="text-center mt-4 text-gray-600">Need help? Call <a href="tel:02071834775" class="text-orange-500 font-semibold">020 7183 4775</a></p>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function switchPricingView(view) {
        const individualBtn = document.getElementById('btn-individual');
        const combinedBtn = document.getElementById('btn-combined');
        const individualPricing = document.getElementById('individual-pricing');
        const combinedPricing = document.getElementById('combined-pricing');
        
        if (view === 'individual') {
            individualBtn.classList.add('bg-orange-500', 'text-white');
            individualBtn.classList.remove('border-gray-300');
            combinedBtn.classList.remove('bg-orange-500', 'text-white');
            combinedBtn.classList.add('border-gray-300');
            individualPricing.classList.remove('hidden');
            combinedPricing.classList.add('hidden');
        } else {
            combinedBtn.classList.add('bg-orange-500', 'text-white');
            combinedBtn.classList.remove('border-gray-300');
            individualBtn.classList.remove('bg-orange-500', 'text-white');
            individualBtn.classList.add('border-gray-300');
            combinedPricing.classList.remove('hidden');
            individualPricing.classList.add('hidden');
        }
    }
</script>
@endsection
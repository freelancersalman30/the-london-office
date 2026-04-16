@extends('layouts.master')

@section('title', 'Frequently Asked Questions | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Frequently Asked Questions</h1>
        <p class="text-xl text-gray-300">Find answers to common questions about our services</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div class="space-y-4">
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>Which payment methods do you accept?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            We securely accept payments via Stripe, accommodating all major credit and debit cards.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>Why do I need to pay a postal deposit?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            For all services that include receiving business mail, we require a £20 postal deposit (plus VAT) to cover the cost of forwarding your business mail to you. Forwarding mail is charged at 50p per letter (plus the cost of forwarding). Once the deposit runs out, you will be required to top it up.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>I don't know which service I require. Can you help?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            Of course! Our friendly and knowledgeable team are happy to help walk you through the order process and answer any questions. Call us on 020 7183 4775.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>If I change my mind, can I cancel my service?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            Yes. You can change your mind and cancel your service for any reason within 14 days of your order date.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>What features are included with the MYCO app?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            Our MYCO app allows clients full control over their account, with the ability to view scanned mail and read telephone messages. You can enable push notifications to create alerts to new messages. Download from App Store or Google Play.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>Where are your office locations?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            The London Office has a prestigious London address in the West End. We also have further locations in Edinburgh and Ipswich.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>What services do you provide?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            We are a business-to-business service provider specialising in affordable and flexible products, including Registered Office Address, Director Service Address, Business Address, Company Formations, Telephone Answering Services and Meeting Room hire in London.
                        </div>
                    </div>
                    
                    <div class="border rounded-lg overflow-hidden">
                        <button class="w-full text-left p-4 flex justify-between items-center font-semibold bg-gray-50 hover:bg-gray-100" onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('i').classList.toggle('rotate-180')">
                            <span>How much do your services cost?</span>
                            <i class="fas fa-chevron-down transition-transform"></i>
                        </button>
                        <div class="hidden p-4 text-gray-600">
                            We offer a range of affordable, fully-inclusive and flexible packages with no hidden fees. Visit our pricing page to view our packages and associated costs.
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="bg-gray-50 p-6 rounded-lg sticky top-24">
                    <h3 class="text-xl font-bold mb-4">Need More Help?</h3>
                    <p class="text-gray-600 mb-4">Our team is here to help with any questions.</p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-phone text-orange-500"></i>
                            <div>
                                <p class="font-semibold">Sales</p>
                                <p class="text-gray-600">020 7183 4775</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-envelope text-orange-500"></i>
                            <div>
                                <p class="font-semibold">Email</p>
                                <p class="text-gray-600">contact@thelondonoffice.com</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn-primary w-full text-center mt-4 block">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
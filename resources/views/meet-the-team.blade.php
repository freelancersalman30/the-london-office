@extends('layouts.master')

@section('title', 'Meet The Team | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Meet The Team</h1>
        <p class="text-xl text-gray-300">The people behind The London Office</p>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">Our friendly and hard-working team at The London Office will sort your mail, take your calls and simply be there behind-the-scenes to support your business. We assure you of a professional, reliable and friendly service at all times.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-gray-200 rounded-lg h-64 mb-4 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-6xl"></i>
                </div>
                <h3 class="text-xl font-bold">Team Member</h3>
                <p class="text-gray-600">Position</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gray-200 rounded-lg h-64 mb-4 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-6xl"></i>
                </div>
                <h3 class="text-xl font-bold">Team Member</h3>
                <p class="text-gray-600">Position</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gray-200 rounded-lg h-64 mb-4 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-6xl"></i>
                </div>
                <h3 class="text-xl font-bold">Team Member</h3>
                <p class="text-gray-600">Position</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gray-200 rounded-lg h-64 mb-4 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-6xl"></i>
                </div>
                <h3 class="text-xl font-bold">Team Member</h3>
                <p class="text-gray-600">Position</p>
            </div>
        </div>
    </div>
</section>
@endsection
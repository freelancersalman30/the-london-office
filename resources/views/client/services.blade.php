@extends('client.layout')

@section('title', 'Available Services')
@section('header', 'Available Services')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($services as $service)
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $service->name }}</h3>
        <p class="text-gray-600 text-sm mb-4">{{ $service->description ?? 'No description available' }}</p>
        <div class="flex items-end justify-between">
            <div>
                <span class="text-2xl font-bold text-gray-900">£{{ number_format($service->price, 2) }}</span>
                <span class="text-sm text-gray-500">/{{ $service->billing_cycle }}</span>
            </div>
            <button onclick="subscribeService('{{ addslashes($service->name) }}', {{ $service->price }})" class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600 text-sm font-medium">
                Subscribe
            </button>
        </div>
    </div>
    @empty
    <div class="col-span-full text-center py-8 text-gray-500">
        No services available at the moment
    </div>
    @endforelse
</div>

<script>
function subscribeService(name, price) {
    var cart = [{name: name, price: price}];
    localStorage.setItem('cart', JSON.stringify(cart));
    
    fetch('{{ route("checkout") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({cart: cart})
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            localStorage.removeItem('cart');
            window.location.href = '/order/success/' + data.order_id;
        } else {
            alert('Error: ' + data.message);
        }
    })
    .catch(error => {
        alert('Something went wrong. Please try again.');
    });
}
</script>
@endsection
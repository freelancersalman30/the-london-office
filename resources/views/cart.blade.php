@extends('layouts.master')

@section('title', 'Shopping Cart | The London Office')

@section('content')
<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-4">Your Cart</h1>
    </div>
</section>

<section class="section-padding bg-white">
    <div class="container mx-auto px-4">
        <div id="cart-content">
            <div class="text-center py-12">
                <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                <h2 class="text-2xl font-bold mb-2">Your cart is empty</h2>
                <p class="text-gray-600 mb-6">Browse our services and add what you need</p>
                <a href="{{ route('pricing') }}" class="btn-accent">View Our Services</a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function loadCart() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartContent = document.getElementById('cart-content');
        
        if (cart.length === 0) {
            cartContent.innerHTML = `
                <div class="text-center py-12">
                    <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-4"></i>
                    <h2 class="text-2xl font-bold mb-2">Your cart is empty</h2>
                    <p class="text-gray-600 mb-6">Browse our services and add what you need</p>
                    <a href="{{ route('pricing') }}" class="btn-accent">View Our Services</a>
                </div>
            `;
            return;
        }
        
        const total = cart.reduce((sum, item) => sum + item.price, 0);
        const vat = total * 0.20;
        const grandTotal = total + vat;
        
        cartContent.innerHTML = `
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <div class="border rounded-lg overflow-hidden">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left font-semibold">Service</th>
                                    <th class="px-4 py-3 text-right font-semibold">Price</th>
                                    <th class="px-4 py-3 text-center font-semibold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ${cart.map((item, index) => `
                                    <tr class="border-t">
                                        <td class="px-4 py-4">${item.name}</td>
                                        <td class="px-4 py-4 text-right">£${item.price.toFixed(2)}</td>
                                        <td class="px-4 py-4 text-center">
                                            <button onclick="removeFromCart(${index})" class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-trash"></i> Remove
                                            </button>
                                        </td>
                                    </tr>
                                `).join('')}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-xl font-bold mb-4">Order Summary</h3>
                        <div class="flex justify-between mb-2">
                            <span>Subtotal</span>
                            <span>£${total.toFixed(2)}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>VAT (20%)</span>
                            <span>£${vat.toFixed(2)}</span>
                        </div>
                        <div class="flex justify-between font-bold text-lg mt-4 pt-4 border-t">
                            <span>Total</span>
                            <span>£${grandTotal.toFixed(2)}</span>
                        </div>
                        <button onclick="checkout()" class="btn-accent w-full mt-6">Proceed to Checkout</button>
                        <p class="text-sm text-gray-500 text-center mt-3">Secure payment via Stripe</p>
                    </div>
                </div>
            </div>
        `;
    }
    
    function removeFromCart(index) {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        loadCart();
        updateCartDisplay();
    }
    
    function checkout() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        
        if (cart.length === 0) {
            alert('Your cart is empty');
            return;
        }
        
        const isLoggedIn = {{ Auth::check() ? 'true' : 'false' }};
        
        if (!isLoggedIn) {
            window.location.href = '{{ route("login") }}?redirect=/cart';
            return;
        }
        
        console.log('Sending cart:', cart);
        
        fetch('{{ route("checkout") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ cart: cart })
        })
        .then(response => {
            console.log('Response status:', response.status);
            return response.json();
        })
        .then(data => {
            console.log('Response data:', data);
            if (data.success) {
                localStorage.removeItem('cart');
                updateCartDisplay();
                window.location.href = '/order/success/' + data.order_id;
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Something went wrong: ' + error.message);
        });
    }
    
    function updateCartDisplay() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        document.getElementById('cart-count').textContent = cart.length;
        const total = cart.reduce((sum, item) => sum + item.price, 0);
        document.getElementById('cart-total').textContent = total.toFixed(2);
    }
    
    // Load cart on page load
    loadCart();
    updateCartDisplay();
</script>
@endsection
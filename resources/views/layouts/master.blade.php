<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'The London Office - Virtual Office, Mail and Call Handling')</title>
    <meta name="description" content="@yield('description', 'Get a prestigious London business address with our virtual office services. Registered office address, mail forwarding, and telephone answering.')">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #1a1a1a;
            --secondary: #f5f5f5;
            --accent: #e67e22;
            --text-dark: #1a1a1a;
            --text-light: #666;
        }
        
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Playfair Display', serif; }
        
        .dropdown { position: relative; display: inline-block; }
        .dropdown-content { display: none; position: absolute; background-color: #fff; min-width: 220px; box-shadow: 0 8px 16px rgba(0,0,0,0.1); z-index: 1000; top: 100%; left: 0; border-top: 3px solid #e67e22; }
        .dropdown:hover .dropdown-content { display: block; }
        .dropdown-content a { padding: 12px 16px; display: block; color: #1a1a1a; text-decoration: none; font-size: 14px; border-bottom: 1px solid #f0f0f0; }
        .dropdown-content a:hover { background-color: #f5f5f5; }
        .dropdown-content a:last-child { border-bottom: none; }
        
        .mega-menu { display: none; position: absolute; background-color: #fff; width: 750px; box-shadow: 0 8px 16px rgba(0,0,0,0.1); z-index: 1000; padding: 25px; left: 0; top: 100%; border-top: 3px solid #e67e22; }
        .dropdown:hover .mega-menu { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px; }
        
        .offers-menu { display: none; position: absolute; background-color: #fff; width: 300px; box-shadow: 0 8px 16px rgba(0,0,0,0.1); z-index: 1000; padding: 15px; left: 0; top: 100%; border-top: 3px solid #e67e22; }
        .dropdown:hover .offers-menu { display: block; }
        
        .combined-menu { display: none; position: absolute; background-color: #fff; width: 350px; box-shadow: 0 8px 16px rgba(0,0,0,0.1); z-index: 1000; padding: 15px; left: 0; top: 100%; border-top: 3px solid #e67e22; }
        .dropdown:hover .combined-menu { display: block; }
        
        .btn-primary { background-color: #1a1a1a; color: white; padding: 12px 24px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s; border: none; cursor: pointer; }
        .btn-primary:hover { background-color: #333; }
        .btn-accent { background-color: #e67e22; color: white; padding: 12px 24px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s; border: none; cursor: pointer; }
        .btn-accent:hover { background-color: #d35400; }
        
        .section-padding { padding: 80px 0; }
        .service-card { background: white; padding: 40px; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s; }
        .service-card:hover { transform: translateY(-5px); box-shadow: 0 8px 30px rgba(0,0,0,0.12); }
        
        .price-card { border: 2px solid #eee; padding: 30px; text-align: center; transition: all 0.3s; position: relative; }
        .price-card:hover, .price-card.popular { border-color: #e67e22; }
        .price-card.popular::before { content: 'MOST POPULAR'; position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: #e67e22; color: white; padding: 4px 16px; font-size: 12px; font-weight: 600; }
        
        .feature-list li { padding: 8px 0; display: flex; align-items: center; gap: 10px; }
        .feature-list li i { color: #27ae60; }
        
        nav a { transition: color 0.3s; }
        
        /* Cart styles */
        .cart-dropdown { display: none; position: absolute; right: 0; background: #fff; width: 350px; box-shadow: 0 8px 16px rgba(0,0,0,0.15); z-index: 1000; border-top: 3px solid #e67e22; }
        .cart-wrapper:hover .cart-dropdown { display: block; }
        
        .add-to-cart-btn { background: #e67e22; color: white; padding: 10px 20px; border: none; cursor: pointer; font-weight: 600; transition: all 0.3s; }
        .add-to-cart-btn:hover { background: #d35400; }
        
        @media (max-width: 768px) {
            .section-padding { padding: 40px 0; }
            .service-card { padding: 20px; }
        }
    </style>
    
    @yield('styles')
</head>
<body class="bg-gray-50">
    <!-- Top Bar -->
    <div class="bg-gray-900 text-white py-2 text-sm">
        <div class="container mx-auto px-4 flex justify-between items-center flex-wrap gap-2">
            <div class="flex items-center gap-4">
                <span class="text-orange-500"><i class="fas fa-fire mr-2"></i>LIMITED OFFER - £10 OFF</span>
                <span><i class="fas fa-phone mr-2"></i>+44 (0) 207 183 3787</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="https://theoffice.support/" target="_blank" class="hover:text-gray-300">Log In</a>
                <button onclick="showDiscountPopup()" class="text-orange-500 font-semibold hover:underline">Get 10% Off - Click Here</button>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="https://thelondonoffice.com/assets/img/TLOxMYCO - Logo-black.png" alt="The London Office" class="h-10 lg:h-12">
                </a>
                
                <nav class="hidden xl:flex items-center gap-4 text-sm">
                    <div class="dropdown">
                        <a href="#" class="font-semibold text-gray-700 hover:text-orange-500 flex items-center gap-1 py-2">
                            Our Services <i class="fas fa-chevron-down text-xs"></i>
                        </a>
                        <div class="mega-menu">
                            <div>
                                <h4 class="font-bold text-gray-900 mb-3 text-orange-500">Address Services</h4>
                                <a href="{{ route('registered-office') }}">Registered Office Address</a>
                                <a href="{{ route('director-service') }}">Director Service Address</a>
                                <a href="{{ route('virtual-business') }}">Virtual Business Address</a>
                                <a href="{{ route('virtual-business-plus') }}">Virtual Business Plus</a>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-3 text-orange-500">Business Call Answering</h4>
                                <a href="{{ route('telephone-answering') }}">Telephone Answering Service</a>
                                <h4 class="font-bold text-gray-900 mb-3 mt-4 text-orange-500">Other Services</h4>
                                <a href="https://www.mycoformations.co.uk/" target="_blank">Company Formations</a>
                                <a href="{{ route('readymade-companies') }}">Ready Made Companies</a>
                                <a href="{{ route('meeting-rooms') }}">Meeting Rooms</a>
                                <a href="{{ route('returns-parcel') }}">Returns Parcel Management</a>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-3 text-orange-500">Combined Services</h4>
                                <a href="{{ route('virtual-business-and-telephone') }}">VBA + Telephone Answering</a>
                                <a href="{{ route('virtual-business-plus-and-telephone') }}">VBP + Telephone Answering</a>
                                <a href="{{ route('virtual-business-plus-legal') }}">VBP + Legal Document Pack</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <a href="#" class="font-semibold text-gray-700 hover:text-orange-500 flex items-center gap-1 py-2">
                            Locations <i class="fas fa-chevron-down text-xs"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('locations') }}">View All Locations</a>
                            <a href="{{ route('location-detail', '167-169-great-portland-street') }}">167-169 Great Portland Street</a>
                            <a href="{{ route('location-detail', '85-great-portland-street') }}">85 Great Portland Street</a>
                            <a href="{{ route('location-detail', 'hatton-garden') }}">63-66 Hatton Garden</a>
                            <a href="{{ route('location-detail', 'bell-yard') }}">7 Bell Yard</a>
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <a href="#" class="font-semibold text-gray-700 hover:text-orange-500 flex items-center gap-1 py-2">
                            Offers <i class="fas fa-chevron-down text-xs"></i>
                        </a>
                        <div class="offers-menu">
                            <a href="#">HSBC Bank Account</a>
                            <a href="#">Anna Money Account</a>
                            <a href="#">Capital on Tap Credit Card</a>
                            <a href="#">Xero - MTD Software</a>
                            <a href="#">Accountancy Partner</a>
                            <a href="#">Business Loans</a>
                            <a href="#">Business Insurance</a>
                            <a href="#">Web Hosting</a>
                        </div>
                    </div>
                    
                    <a href="{{ route('pricing') }}" class="font-semibold text-gray-700 hover:text-orange-500 py-2">Pricing</a>
                    <a href="{{ route('faqs') }}" class="font-semibold text-gray-700 hover:text-orange-500 py-2">FAQs</a>
                    <a href="{{ route('partners') }}" class="font-semibold text-gray-700 hover:text-orange-500 py-2">Partners</a>
                    <a href="#" class="font-semibold text-gray-700 hover:text-orange-500 py-2">Blog</a>
                    
                    <div class="dropdown">
                        <a href="#" class="font-semibold text-gray-700 hover:text-orange-500 flex items-center gap-1 py-2">
                            About Us <i class="fas fa-chevron-down text-xs"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('about-us') }}">About Us</a>
                            <a href="{{ route('meet-the-team') }}">Meet The Team</a>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="font-semibold text-gray-700 hover:text-orange-500 py-2">Contact Us</a>
                </nav>
                
                <div class="flex items-center gap-4">
                    <div class="cart-wrapper relative">
                        <a href="#" class="text-gray-700 hover:text-orange-500 flex items-center gap-1">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            <span class="text-sm hidden sm:inline">Cart</span>
                            <span id="cart-count" class="bg-orange-500 text-white text-xs rounded-full px-2 py-0.5">0</span>
                        </a>
                        <div class="cart-dropdown p-4">
                            <h4 class="font-bold mb-3">Your Cart</h4>
                            <div id="cart-items">
                                <p class="text-gray-500 text-sm">Your cart is empty</p>
                            </div>
                            <div class="border-t mt-3 pt-3">
                                <div class="flex justify-between font-bold">
                                    <span>Order Total:</span>
                                    <span>£<span id="cart-total">0.00</span></span>
                                </div>
                                <a href="{{ route('cart') }}" class="btn-primary w-full text-center mt-3 block">View Cart</a>
                            </div>
                        </div>
                    </div>
                    <button class="xl:hidden" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden xl:hidden bg-white border-t">
            <div class="container mx-auto px-4 py-4">
                <a href="{{ route('home') }}" class="block py-2 font-semibold">Home</a>
                <a href="#" class="block py-2 font-semibold">Our Services ></a>
                <a href="#" class="block py-2 font-semibold">Locations ></a>
                <a href="#" class="block py-2 font-semibold">Offers ></a>
                <a href="{{ route('pricing') }}" class="block py-2 font-semibold">Pricing</a>
                <a href="{{ route('faqs') }}" class="block py-2 font-semibold">FAQs</a>
                <a href="{{ route('partners') }}" class="block py-2 font-semibold">Partners</a>
                <a href="#" class="block py-2 font-semibold">Blog</a>
                <a href="#" class="block py-2 font-semibold">About Us ></a>
                <a href="{{ route('contact') }}" class="block py-2 font-semibold">Contact Us</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <img src="https://thelondonoffice.com/assets/img/TLOxMYCO-logo-white.png" alt="The London Office" class="h-14 mb-4">
                    <p class="text-gray-400 mb-4">The London Office provides prestigious London addresses for businesses. Virtual office, mail handling, and telephone answering services.</p>
                    <div class="flex gap-4">
                        <a href="https://linkedin.com/company/myco-hub-co" target="_blank" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin text-xl"></i></a>
                        <a href="https://www.facebook.com/myco.hub.uk" target="_blank" class="text-gray-400 hover:text-white"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="https://www.instagram.com/myco.hub.co/" target="_blank" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=%2B447939331315" target="_blank" class="text-gray-400 hover:text-white"><i class="fab fa-whatsapp text-xl"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Our Company</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about-us') }}" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="{{ route('meet-the-team') }}" class="text-gray-400 hover:text-white">Meet The Team</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="{{ route('locations') }}" class="text-gray-400 hover:text-white">Locations</a></li>
                        <li><a href="{{ route('pricing') }}" class="text-gray-400 hover:text-white">Pricing</a></li>
                        <li><a href="{{ route('faqs') }}" class="text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">ID Requirements</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Our Services</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('registered-office') }}" class="text-gray-400 hover:text-white">Registered Office Address</a></li>
                        <li><a href="{{ route('director-service') }}" class="text-gray-400 hover:text-white">Director Service Address</a></li>
                        <li><a href="{{ route('virtual-business') }}" class="text-gray-400 hover:text-white">Virtual Business Address</a></li>
                        <li><a href="{{ route('virtual-business-plus') }}" class="text-gray-400 hover:text-white">Virtual Business Plus</a></li>
                        <li><a href="{{ route('telephone-answering') }}" class="text-gray-400 hover:text-white">Telephone Answering Service</a></li>
                        <li><a href="{{ route('meeting-rooms') }}" class="text-gray-400 hover:text-white">Meeting Rooms</a></li>
                        <li><a href="https://www.mycoformations.co.uk/" target="_blank" class="text-gray-400 hover:text-white">Company Formations</a></li>
                        <li><a href="{{ route('readymade-companies') }}" class="text-gray-400 hover:text-white">Ready Made Companies</a></li>
                        <li><a href="{{ route('returns-parcel') }}" class="text-gray-400 hover:text-white">Returns Parcel Management</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Contact Us</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-map-marker-alt mr-2"></i>167-169 Great Portland Street<br>5th Floor, London W1W 5PF</li>
                        <li><i class="fas fa-phone mr-2"></i>+44 (0) 207 183 3787</li>
                        <li><i class="fas fa-envelope mr-2"></i>contact@thelondonoffice.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} Registered Office (UK) Ltd. All Rights Reserved. | VAT No: GB263877953 | Company No: 09347868</p>
                <div class="flex gap-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy & Cookies</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms & Conditions</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Site Security</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Discount Popup -->
    <div id="discount-popup" class="fixed inset-0 bg-black bg-opacity-50 z-[9999] hidden flex items-center justify-center">
        <div class="bg-white rounded-lg p-8 max-w-md text-center relative">
            <button onclick="closeDiscountPopup()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                <i class="fas fa-times text-xl"></i>
            </button>
            <h2 class="text-3xl font-bold text-orange-500 mb-4">10% OFF<br>your first order</h2>
            <p class="text-gray-600 mb-4">*Excludes our ready made companies</p>
            <p class="text-gray-500 text-sm mb-4">Enter your email below to receive your discount code</p>
            <input type="email" placeholder="Your email address" class="w-full px-4 py-3 border border-gray-300 rounded mb-3">
            <button class="btn-accent w-full mb-3">GET MY 10% OFF</button>
            <button onclick="closeDiscountPopup()" class="text-gray-500 text-sm hover:underline">No thanks, I'm not interested</button>
            <p class="text-xs text-gray-400 mt-3">By subscribing, you agree to receive marketing emails per our Privacy Policy.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Cart functionality
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        
        function updateCartDisplay() {
            document.getElementById('cart-count').textContent = cart.length;
            const total = cart.reduce((sum, item) => sum + item.price, 0);
            document.getElementById('cart-total').textContent = total.toFixed(2);
            
            const cartItems = document.getElementById('cart-items');
            if (cart.length === 0) {
                cartItems.innerHTML = '<p class="text-gray-500 text-sm">Your cart is empty</p>';
            } else {
                cartItems.innerHTML = cart.map(item => `
                    <div class="flex justify-between items-center py-2 border-b">
                        <span class="text-sm">${item.name}</span>
                        <span class="font-semibold">£${item.price.toFixed(2)}</span>
                    </div>
                `).join('');
            }
            localStorage.setItem('cart', JSON.stringify(cart));
        }
        
        function addToCart(name, price) {
            cart.push({ name: name, price: price });
            updateCartDisplay();
            alert('Item added to cart!');
        }
        
        function showDiscountPopup() {
            document.getElementById('discount-popup').classList.remove('hidden');
        }
        
        function closeDiscountPopup() {
            document.getElementById('discount-popup').classList.add('hidden');
        }
        
        // Initialize cart on page load
        updateCartDisplay();
    </script>
    @yield('scripts')
</body>
</html>
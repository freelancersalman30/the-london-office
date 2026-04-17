<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - The London Office')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'DM Sans', sans-serif; }
    </style>
    @yield('styles')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white flex flex-col">
            <div class="p-6 border-b border-gray-800">
                <h1 class="text-xl font-bold">The London Office</h1>
                <p class="text-sm text-gray-400">Admin Panel</p>
            </div>
            
            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-home w-5"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('admin.clients') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.clients*') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-users w-5"></i>
                    <span>Clients</span>
                </a>
                <a href="{{ route('admin.orders') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.orders*') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-shopping-cart w-5"></i>
                    <span>Orders</span>
                </a>
                <a href="{{ route('admin.services') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.services*') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-cogs w-5"></i>
                    <span>Services</span>
                </a>
                <a href="{{ route('admin.settings') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 {{ request()->routeIs('admin.settings') ? 'bg-gray-800' : '' }}">
                    <i class="fas fa-cog w-5"></i>
                    <span>Settings</span>
                </a>
            </nav>
            
            <div class="p-4 border-t border-gray-800">
                <a href="{{ route('logout') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-800 text-red-400">
                    <i class="fas fa-sign-out-alt w-5"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 p-4 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">@yield('header', 'Dashboard')</h2>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-600">Welcome, {{ Auth::user()->name }}</span>
                    <div class="h-8 w-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                </div>
            </header>
            
            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::user()->role !== 'admin') {
                return redirect()->route('client.dashboard');
            }

            return $next($request);
        });
    }

    public function dashboard()
    {
        $totalClients = User::where('role', 'client')->count();
        $totalOrders = Order::count();
        $totalRevenue = Order::where('status', 'active')->sum('total_amount');
        $activeServices = Order::where('status', 'active')->count();
        $recentOrders = Order::with(['user', 'service'])->latest()->take(10)->get();
        $recentClients = User::where('role', 'client')->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalClients', 'totalOrders', 'totalRevenue', 'activeServices', 'recentOrders', 'recentClients'));
    }

    public function clients()
    {
        $clients = User::where('role', 'client')->latest()->paginate(20);

        return view('admin.clients', compact('clients'));
    }

    public function clientOrders($id)
    {
        $client = User::findOrFail($id);
        $orders = Order::with('service')->where('user_id', $id)->latest()->paginate(20);

        return view('admin.client-orders', compact('client', 'orders'));
    }

    public function orders()
    {
        $orders = Order::with(['user', 'service'])->latest()->paginate(20);

        return view('admin.orders', compact('orders'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);

        return back()->with('success', 'Order status updated');
    }

    public function services()
    {
        $services = Service::all();

        return view('admin.services', compact('services'));
    }

    public function createService(Request $request)
    {
        Service::create($request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'billing_cycle' => 'required|in:monthly,yearly',
            'is_active' => 'boolean',
        ]));

        return back()->with('success', 'Service created successfully');
    }

    public function updateService(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,'.$id,
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'billing_cycle' => 'required|in:monthly,yearly',
            'is_active' => 'boolean',
        ]);

        $service->update($data);

        return back()->with('success', 'Service updated successfully');
    }

    public function deleteService($id)
    {
        Service::findOrFail($id)->delete();

        return back()->with('success', 'Service deleted');
    }

    public function toggleClientStatus($id)
    {
        $client = User::findOrFail($id);
        $client->update(['is_active' => ! $client->is_active]);

        return back()->with('success', 'Client status updated');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}

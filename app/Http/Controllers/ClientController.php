<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (Auth::user()->role !== 'client') {
                return redirect()->route('admin.dashboard');
            }

            return $next($request);
        });
    }

    public function dashboard()
    {
        $user = Auth::user();

        $orders = Order::with('service')
            ->where('user_id', $user->id)
            ->latest()
            ->take(10)
            ->get();

        $activeServices = Order::with('service')
            ->where('user_id', $user->id)
            ->where('status', 'active')
            ->get();

        $totalSpent = Order::where('user_id', $user->id)
            ->where('status', 'active')
            ->sum('total_amount');

        $expiredServices = Order::with('service')
            ->where('user_id', $user->id)
            ->where('status', 'expired')
            ->get();

        $locations = Location::where('is_active', true)->get();

        return view('client.dashboard', compact('orders', 'activeServices', 'totalSpent', 'expiredServices', 'locations'));
    }

    public function orders()
    {
        $orders = Order::with('service')->where('user_id', Auth::id())->latest()->paginate(10);

        return view('client.orders', compact('orders'));
    }

    public function orderDetail($id)
    {
        $order = Order::with('service')->where('user_id', Auth::id())->findOrFail($id);

        return view('client.order-detail', compact('order'));
    }

    public function services()
    {
        $services = Service::where('is_active', true)->get();

        return view('client.services', compact('services'));
    }

    public function locations()
    {
        $locations = Location::all();

        return view('client.locations', compact('locations'));
    }

    public function profile()
    {
        return view('client.profile');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        $user->update($data);

        return back()->with('success', 'Profile updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        if (! \Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user->update(['password' => \Hash::make($request->new_password)]);

        return back()->with('success', 'Password updated successfully');
    }
}

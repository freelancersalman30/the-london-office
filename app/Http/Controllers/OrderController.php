<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        try {
            $cartData = $request->input('cart');

            if (! $cartData) {
                return response()->json(['success' => false, 'message' => 'No cart data provided']);
            }

            $cart = is_array($cartData) ? $cartData : json_decode($cartData, true);

            if (empty($cart)) {
                return response()->json(['success' => false, 'message' => 'Cart is empty']);
            }

            if (! Auth::check()) {
                return response()->json(['success' => false, 'message' => 'Please login first']);
            }

            $user = Auth::user();
            $total = collect($cart)->sum('price');
            $vat = $total * 0.20;
            $grandTotal = $total + $vat;

            $serviceName = $cart[0]['name'] ?? 'Virtual Office';
            $service = Service::where('name', 'like', '%'.$serviceName.'%')->first();

            $order = Order::create([
                'user_id' => $user->id,
                'service_id' => $service?->id ?? null,
                'status' => 'pending',
                'total_amount' => $grandTotal,
                'payment_method' => 'card',
                'transaction_id' => 'TXN-'.time().'-'.rand(1000, 9999),
                'notes' => json_encode($cart),
                'started_at' => now(),
                'expires_at' => now()->addYear(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Order processed successfully',
                'order_id' => $order->id,
            ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error: '.$e->getMessage()]);
        }
    }

    public function success($orderId)
    {
        $order = Order::with('service', 'user')->findOrFail($orderId);

        if (! Auth::check()) {
            return redirect('/login?redirect=/order/success/'.$orderId);
        }

        if (Auth::id() !== $order->user_id && Auth::user()->role !== 'admin') {
            return redirect('/');
        }

        if ($order->status === 'pending') {
            $order->update(['status' => 'active']);
        }

        return view('order.success', compact('order'));
    }

    public function cancel()
    {
        return view('order.cancel');
    }
}

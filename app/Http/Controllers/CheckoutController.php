<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $carts = Order::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
        $total = $carts->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });

        return view('checkout.index', compact('carts', 'total'));
    }

    public function store(Request $request)
    {
        // Xử lý thanh toán và cập nhật trạng thái đơn hàng
        // ...

        // Đặt trạng thái đơn hàng thành 'completed' sau khi thanh toán thành công
        Order::where('user_id', auth()->user()->id)
            ->where('status', 'pending')
            ->update(['status' => 'completed']);

        return redirect()->route('checkout.index')->with('success', 'Thanh toán thành công!');
    }
}

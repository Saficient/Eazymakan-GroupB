<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Add this line to import the Order model

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders;
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_item' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = new Order();
        $order->user_id = auth()->id();
        $order->food_item = $request->food_item;
        $order->quantity = $request->quantity;
        $order->total_price = $request->quantity * $this->getFoodPrice($request->food_item); // Assume getFoodPrice is a method that returns price
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }

    // Example method to get food price
    private function getFoodPrice($foodItem)
    {
        $prices = [
            'Pizza' => 10.99,
            'Burger' => 8.99,
            'Pasta' => 12.99,
        ];

        return $prices[$foodItem] ?? 0;
    }
}

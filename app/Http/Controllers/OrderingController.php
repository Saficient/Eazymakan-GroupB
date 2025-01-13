<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderingController extends Controller
{
    //

        public function store(Request $request)
        {
            $validated = $request->validate([
                'item' => 'required|string|max:255',
                'quantity' => 'required|integer|min:1',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'address' => 'required|string|max:500',
            ]);

            Order::create($validated);

            return redirect()->route('order.confirmation');
        }
        public function index()
    {
        // Logic to handle the ordering page
        return view('ordering');
    }
}

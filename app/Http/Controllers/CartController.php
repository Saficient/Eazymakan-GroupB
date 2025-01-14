<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        $total = $this->calculateTotal($cart);
        return view('cart', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $cart = Session::get('cart', []);

        $item = [
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity ?? 1,
            'mahallah' => $request->mahallah,
            'image' => $request->image
        ];

        // Check if item already exists in cart
        $itemExists = false;
        foreach ($cart as $key => $cartItem) {
            if ($cartItem['id'] == $item['id'] && $cartItem['mahallah'] == $item['mahallah']) {
                $cart[$key]['quantity'] += 1;
                $itemExists = true;
                break;
            }
        }

        if (!$itemExists) {
            $cart[] = $item;
        }

        Session::put('cart', $cart);

        return response()->json([
            'message' => 'Item added to cart',
            'cart_count' => count($cart)
        ]);
    }

    public function remove($index)
    {
        $cart = Session::get('cart', []);
        unset($cart[$index]);
        Session::put('cart', array_values($cart));

        return redirect()->route('cart.index');
    }

    private function calculateTotal($cart)
    {
        return collect($cart)->sum(function($item) {
            return $item['price'] * $item['quantity'];
        });
    }

    public function checkout()
    {
        $cart = Session::get('cart', []);
        $total = $this->calculateTotal($cart);
        return view('checkout', compact('cart', 'total'));
    }
}

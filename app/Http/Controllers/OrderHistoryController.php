<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    //


    public function index()
    {
        // Fetch orders from the database
        $orders = Order::all(); // You might want to paginate or filter orders

        // Pass orders to the view
        return view('order_history', compact('orders'));
    }


}

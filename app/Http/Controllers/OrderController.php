<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // ✅ Show all orders
    public function index()
    {
        $orders = Order::all();   
        return view('order', compact('orders'));

    }

    // ✅ Show create form
    public function create()
    {
        return view('orders.create');
    }

    // ✅ Store a new order
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'type'          => 'required|string',
            'pickup_date'   => 'required|date',
            'budget'        => 'required|numeric',
            'status'        => 'required|string',
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order created successfully!');
    }

    // ✅ Show one order
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    // ✅ Edit page
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    // ✅ Update order
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'type'          => 'required|string',
            'pickup_date'   => 'required|date',
            'budget'        => 'required|numeric',
            'status'        => 'required|string',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
    }

    // ✅ Delete order
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully!');
    }
}

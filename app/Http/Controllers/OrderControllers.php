<?php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderControllers extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'comment' => 'nullable|string',
        ]);

        $product = Product::find($request->product_id);
        $totalPrice = $product->price * $request->quantity;

        Order::create([
            'customer_name' => $request->customer_name,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'comment' => $request->comment,
            'created_at' => now(),
        ]);

        return redirect()->route('orders.index')->with('success', 'Заказ успешно добавлен!');
    }
    public function show(Order $order){
        $order->load('product');
        return view('orders.show', compact('order'));
    }

    public function complete(Order $order)
    {
        if ($order->status === 'new') {
            $order->update(['status' => 'completed']);
            return redirect()->route('orders.show', $order)->with('success', 'Статус заказа изменен на "выполнен"!');
        }

        return redirect()->route('orders.show', $order)->with('error', 'Невозможно изменить статус заказа.');
    }
}

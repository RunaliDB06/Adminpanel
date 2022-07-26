<?php

namespace App\Http\Controllers;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order=Order::all();
        return view('Admin.orders.index',compact('order'));
    }

    public function confirm($id){
        $order= Order::find($id);
        $order->update(['status'=>1]);
        return redirect()->back()->with('message','order has been confirm');
    }

   public function pending($id){
        $order= Order::find($id);
        $order->update(['status'=>0]);
        return redirect()->back()->with('message','order is again into pending');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('Admin.Orders.details',compact('order'));
    }
}

<?php

namespace App\Http\Controllers\Fornt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Cart;
class CartController extends Controller
{
   public function index(){
    return view('Fornt.cart.index');
   }
   public function store(Request $request){
    // Cart::add($request->id, $request->name, $request->price);
    return redirect()->back()->with('msg','Item has been added to car');
   }
}

<?php

namespace App\Http\Controllers\Fornt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ForntController extends Controller
{
  public function index(){
    $products=Product::inRandomOrder()->take(4)->get();
    return view('Fornt.index',compact('products'));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class UserController extends Controller
{
    public function show(){
       $users= User::all();
        return view('Admin.users.index',compact('users'));
    }
    public function detail($id){
        $order=Order::with('user','products')->find($id);
        return view('Admin.users.detail',compact('order'));
        return redirect()->route('user.detail');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
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
    public function profile(){
        $user=Auth::user();
        return view('admin.profile',compact('user'));
    }
    public function profile_store(Request $request){
        $request->validate([
            'name'=>'nullable',
            'email'=>'nullable',
            'password'=>'nullable'
        ]);
        $id=Auth::user()->id;
        $user= User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->route('users.index');
    }

}

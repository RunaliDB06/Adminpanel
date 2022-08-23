<?php

namespace App\Http\Controllers\Fornt;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class UserProfileController extends Controller
{
    public function index()
    {
        $id=auth()->user()->id;
        $user =User::find($id);
        $order= Order::where('user_id',$id)->get();
        return view('fornt.profile.index',compact(['user','order']));
     }
     public function show($id)
     {
        $order =Order::find($id);
        return view('fornt,profile.details',compact('order'));
     }
}

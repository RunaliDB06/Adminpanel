<?php

namespace App\Http\Controllers\Fornt;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function register(){
    return view('fornt.register');
  }
  public function store(Request $request){
    $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|confirmed|min:6',
        'address'=>'required',
    ]);
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'address'=> $request->address,
        'password'=>bcrypt($request->password),

    ]);
    return redirect()->back()->with('msg','user has been create successfully');
  }
}

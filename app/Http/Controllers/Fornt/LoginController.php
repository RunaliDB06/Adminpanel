<?php

namespace App\Http\Controllers\Fornt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('fornt.login');
    }
    public function store(Request $request){
        $rules = [
            'email'=>'required|email',
            'password'=>'required',

        ];
        $request->validate($rules);
        $data =request(['email','password']);
        if (!auth()->attempt($data)){
            return back()->with(['msg','wrong details please try again !']);
        }
        return redirect()->route('profile.index')->with('msg','you have been login successfully !');
    }

    public function logout(){
        auth()->logout();
        redirect()->route('profile.index')->with('msg','you have been login successfully !');
    }
    public function index(){
        return view('fornt.profile.index');
    }
}

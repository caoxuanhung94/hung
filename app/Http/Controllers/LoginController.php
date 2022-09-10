<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function show() {
        return view('login');
    } 
    public function checkLogin(Request $request) {
        $users = new User;
        if(!empty($users->where('email',$request->email)->where('password',$request->password)->first())){
            return redirect()->route('product');
        }
        else{
            return redirect()->route('login');
        }
        // dd($request->all());
    } 
}

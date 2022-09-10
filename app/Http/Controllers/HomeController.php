<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $users = User::get();
        // dd($users);
        return view('layout.home', ['users' => $users]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function index() {
        return view('cookie.index');
    }
    public function getCookie() {
        return view('cookie.cookie');
    }
}
